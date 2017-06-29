/* global PDFJS, URL */
'use strict';
(function (window, undefined) {
  var Reader = function (el) {
    this.element = el;
    this.reader = Polymer.dom(el.shadowRoot).querySelector('.pdf-viewer');
    this.viewportOut = Polymer.dom(this.reader).querySelector('.pdf-viewport-out');
    this.viewport = Polymer.dom(this.reader).querySelector('.pdf-viewport');
    this.pageNav = Polymer.dom(this.reader).querySelector('.pdf-page-nav');
    this.pageNum = Polymer.dom(this.reader).querySelector('.pdf-page-num');
    this.pageNavPN = Polymer.dom(this.pageNav).querySelectorAll('.pdf-nav');
    this.totalPages = Polymer.dom(this.pageNav).querySelector('span:last-child').children[0];
    this.zoomNav = Polymer.dom(this.reader).querySelectorAll('.pdf-scale > div');
    this.zoomLvl = Polymer.dom(this.reader).querySelector('.pdf-zoom-lvl');
    this.zoomCustom = Polymer.dom(this.zoomLvl).querySelector('.pdf-custom-zoom');
    this.zoomFit = Polymer.dom(this.zoomLvl).querySelector('.pdf-fit-zoom');
    this.viewportStyle = this.viewport.style;
    this.viewportOutStyle = this.viewportOut.style;
    this.ctx = this.viewport.getContext('2d');
    this.SRC = el.getAttribute('src');
    this.WIDTH = el.getAttribute('width');
    this.HEIGHT = el.getAttribute('height');
    this.setEvents();
    this.setSize();
    PDFJS.workerSrc = '/static/pdf.worker.js';
    this.loadPDF();
  };
  Reader.prototype.setSize = function (attrName, newVal) {
    var width = this.WIDTH, height = this.HEIGHT;
    if (attrName === 'width') {
      width = newVal;
    }
    if (attrName === 'height') {
      height = newVal;
    }
    this.element.style.width = this.reader.style.width = width + 'px';
    this.element.style.height = this.reader.style.height = height + 'px';
    this.viewportOutStyle.width = width + 'px';
    this.viewportOutStyle.height = height - 40 + 'px';
  };
  Reader.prototype.loadPDF = function () {
    var self = this;
    PDFJS.getDocument(this.SRC).then(function (pdf) {
      self.PDF = pdf;
      self.renderPDF(1);
      self.pageNum.value = self.currentPage = 1;
      Polymer.dom(self.totalPages).innerHTML = self.PDF.numPages;
      self.currentZoomVal = self.fitZoomVal = self.widthZoomVal = 0;
      self.zoomFit.selected = true;
      self.createDownloadLink();
    });
  };
  Reader.prototype.renderPDF = function (pageNum, resize) {
    var self = this;
    this.PDF.getPage(pageNum).then(function (page) {
      var scaleW, scaleH, viewerViewport, scale;
      self.pageW = page.view[2];
      self.pageH = page.view[3];
      if (self.currentZoomVal === 0 || !!resize) {
        scaleW = Math.round(self.WIDTH / self.pageW * 100) / 100, scaleH = Math.round((self.HEIGHT - 40) / self.pageH * 100) / 100, scale = Math.min(scaleH, scaleW);
        self.currentZoomVal = self.fitZoomVal = scale;
        self.widthZoomVal = self.WIDTH / self.pageW;
      }
      if (!!resize) {
        self.zoomPage({ target: self.zoomLvl });
      } else {
        scale = self.currentZoomVal;
        viewerViewport = page.getViewport(scale);
        self.pageW = self.pageW * scale;
        self.pageH = self.pageH * scale;
        self.setViewportPos();
        self.viewport.width = self.pageW;
        self.viewport.height = self.pageH;
        self.viewportStyle.width = self.pageW + 'px';
        self.viewportStyle.height = self.pageH + 'px';
        self.loadViewer(self.PDF.numPages);
        self.ctx.clearRect(0, 0, self.viewport.width, self.viewport.height);
        page.render({
          canvasContext: self.ctx,
          viewport: viewerViewport
        });
      }
    });
  };
  Reader.prototype.setViewportPos = function () {
    this.viewportStyle.left = (this.WIDTH - this.pageW) / 2 + 'px';
    if (this.pageH < this.HEIGHT) {
      this.viewportStyle.top = (this.HEIGHT - this.pageH - 40) / 2 + 'px';
    } else {
      this.viewportStyle.top = 0;
    }
  };
  Reader.prototype.loadViewer = function (numOfPages) {
    if (numOfPages === 1) {
      Polymer.dom(this.pageNav).classList.add('pdf-hidden');
    } else {
      Polymer.dom(this.pageNav).classList.remove('pdf-hidden');
    }
    Polymer.dom(this.reader).classList.add('pdf-loaded');
  };
  Reader.prototype.changePage = function (e, context) {
    var nav = e.target, pattern = /^[0-9]+$/, value;
    context.currentPage = parseInt(context.pageNum.value, 10);
    if (!Polymer.dom(nav).classList.contains('pdf-nav')) {
      if (pattern.test(nav.value)) {
        value = nav.value;
        if (value < 1) {
          value = 1;
        }
        if (value > context.PDF.numPages) {
          value = context.PDF.numPages;
        }
        nav.value = value;
        context.renderPDF(value);
      }
    } else if (!Polymer.dom(nav).classList.contains('pdf-disabled')) {
      if (!!Polymer.dom(nav).classList.contains('pdf-next')) {
        context.currentPage++;
      } else {
        context.currentPage--;
      }
      if (context.currentPage === 1) {
        Polymer.dom(context.pageNavPN[0]).classList.add('pdf-disabled');
      } else {
        Polymer.dom(context.pageNavPN[0]).classList.remove('pdf-disabled');
      }
      if (context.currentPage === context.PDF.numPages) {
        Polymer.dom(context.pageNavPN[1]).classList.add('pdf-disabled');
      } else {
        Polymer.dom(context.pageNavPN[1]).classList.remove('pdf-disabled');
      }
      context.pageNum.value = context.currentPage;
      context.renderPDF(context.currentPage);
    }
  };
  Reader.prototype.zoomPage = function (e, context) {
    var zoom = e.target, step = 0.1, digValue;
    if (Polymer.dom(zoom).classList.contains('pdf-zoom-lvl')) {
      digValue = parseInt(zoom.value, 10);
      if (zoom.value === 'fit') {
        context.currentZoomVal = context.fitZoomVal;
      } else if (zoom.value === 'width') {
        context.currentZoomVal = context.widthZoomVal;
      } else {
        context.currentZoomVal = digValue / 100;
        if (digValue === 200) {
          Polymer.dom(context.zoomNav[1]).classList.add('pdf-disabled');
        }
      }
      if (parseInt(zoom.value, 10) !== 200) {
        Polymer.dom(context.zoomNav[1]).classList.remove('pdf-disabled');
      }
      Polymer.dom(context.zoomNav[0]).classList.remove('pdf-disabled');
      context.renderPDF(context.currentPage);
    } else {
      if (Polymer.dom(zoom).classList.contains('pdf-scale-down')) {
        step = -0.1;
      }
      context.currentZoomVal = Math.round((Math.round(context.currentZoomVal * 10) / 10 + step) * 10) / 10;
      if (context.currentZoomVal <= 0.1) {
        context.currentZoomVal = 0.1;
        Polymer.dom(context.zoomNav[0]).classList.add('pdf-disabled');
      } else if (context.currentZoomVal >= 2) {
        context.currentZoomVal = 2;
        Polymer.dom(context.zoomNav[1]).classList.add('pdf-disabled');
      } else {
        Polymer.dom(context.zoomNav[0]).classList.remove('pdf-disabled');
        Polymer.dom(context.zoomNav[1]).classList.remove('pdf-disabled');
        context.renderPDF(context.currentPage);
      }
      Polymer.dom(context.zoomCustom).innerHTML = Math.round(context.currentZoomVal * 100) + '%';
      context.zoomFit.selected = false;
      context.zoomCustom.selected = true;
    }
  };
  Reader.prototype.createDownloadLink = function () {
    var self = this;
    this.PDF.getData().then(function (data) {
      var blob = PDFJS.createBlob(data, 'application/pdf');
      self.downloadLink = URL.createObjectURL(blob);
    });
  };
  Reader.prototype.download = function (context) {
    var a = document.createElement('a'), filename = context.SRC.split('/');
    a.href = this.downloadLink;
    a.target = '_parent';
    if ('download' in a) {
      a.download = filename[filename.length - 1];
    }
    Polymer.dom(this.reader).appendChild(a);
    a.click();
    Polymer.dom(Polymer.dom(a).parentNode).removeChild(a);
  };
  Reader.prototype.setEvents = function () {
    var self = this;
    Polymer.dom(this.reader).querySelector('.pdf-download .pdf-btn').addEventListener('click', function () {
      self.download(self);
    }, false);
    [].forEach.call(this.pageNavPN, function (el) {
      el.addEventListener('click', function (e) {
        self.changePage(e, self);
      }, false);
    });
    this.pageNum.addEventListener('input', function (e) {
      self.changePage(e, self);
    }, false);
    [].forEach.call(this.zoomNav, function (el) {
      el.addEventListener('click', function (e) {
        self.zoomPage(e, self);
      }, false);
    });
    this.zoomLvl.addEventListener('change', function (e) {
      self.zoomPage(e, self);
    }, false);
  };
  window.Polymer.Reader = Reader;
}(window));
