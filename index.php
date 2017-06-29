<!DOCTYPE html>
<html><head>
    <title>Tony Olagbaiye</title>
    <link rel="shortcut icon" href="/favicon.ico?<?php print(time()) ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <script src="/components/webcomponentsjs/webcomponents-lite.min.js"></script>
    <link rel="import" href="/components/font-roboto/roboto.html">
    <link rel="import" href="/components/paper-scroll-header-panel/paper-scroll-header-panel.html">
    <link rel="import" href="/components/paper-header-panel/paper-header-panel.html">
    <link rel="import" href="/components/paper-drawer-panel/paper-drawer-panel.html">
    <link rel="import" href="/components/paper-toolbar/paper-toolbar.html">
    <link rel="import" href="/components/paper-menu/paper-menu.html">
    <link rel="import" href="/components/paper-item/paper-item.html">
    <link rel="import" href="/components/neon-animation/neon-animated-pages.html">
    <link rel="import" href="/components/neon-animation/neon-animation.html">
    <link rel="import" href="/components/iron-icons/iron-icons.html">
    <link rel="import" href="/components/iron-icon/iron-icon.html">
    <link rel="import" href="/components/paper-material/paper-material.html">
    <link rel="import" href="/components/iron-flex-layout/iron-flex-layout.html">
    <link rel="import" href="/components/iron-flex-layout/iron-flex-layout-classes.html">
    <style>
      html,body {
        height: 100%;
        margin: 0;
        background-color: #E5E5E5;
        font-family: 'RobotoDraft', sans-serif;
      }
    </style>
    <link rel="import" href="/pages/home.php">
    <link rel="import" href="/pages/about.php">
    <link rel="import" href="/pages/history.php">
    <link rel="import" href="/pages/work.php">
    <link rel="import" href="/pages/hire.php">
    <link rel="import" href="/pages/contact.php">
    <style is="custom-style">
      /* TODO(polyup): For speed, consider reworking these styles with .classes
                       and #ids rather than [attributes].
      */
      [layout] {
        @apply(--layout);
      }
      [layout][vertical] {
        @apply(--layout-vertical);
      }
      [fullbleed] {
        margin: 0;
        height:100vh;
      }
      [fit] {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
      }
    </style>
  </head><body fullbleed vertical layout unresolved touch="auto">
    <dom-module id="home-page">
      <style>
        :host[fit] {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }
        [layout] {
          @apply(--layout);
        }
        [layout][horizontal] {
          @apply(--layout-horizontal);
        }
        [layout][center-justified] {
          @apply(--layout-center-justified);
        }
        [layout][vertical] {
          @apply(--layout-vertical);
        }
        #navheader {
          background-color: #3CB371;
        }
        paper-header-panel {
          height: 100%;
          overflow: auto;
          -webkit-overflow-scrolling: touch;
        }
        paper-toolbar {
          font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
          background-color: #526E9C;
          color: white;
          span {
            font-size: small;
          }
        }
        paper-toolbar img {
          border-radius: 50%;
          height: 80%;
          box-shadow: 0px 0px 4px rgba(32,32,32,128);
          margin: 0 1em 0 0;
        }
        paper-item {
          font-size: medium;
          border-radius: 5px;
          color: white;
        }
        paper-item * {
          color: black;
        }
        .copyright {
          color: #9E9E9E;
          font-size: x-small;
          text-align: center;
          padding: 1em;
        }
      </style>
      <template>
        <paper-drawer-panel class="horizontal layout" mode="waterfall-tall" id="scaffold">
          <paper-header-panel drawer navigation flex mode="waterfall" id="navigation">
            <paper-toolbar horizontal layout id="navheader">
              <img src="/images/me.jpg">
              <span>Tony Olagbaiye</span>
            </paper-toolbar>

            <paper-menu vertical layout theme="core-light-theme" selected="{{page}}" on-core-select="menuSelect" selecteditem="{{item}}">
              <paper-item recenteringtouch="true" label="{{title(0)}}">
                <iron-icon icon="{{icon(0)}}"></iron-icon>
                <div style="padding-left: 10%;">{{title(0)}}</div>
              </paper-item>
              <paper-item recenteringtouch="true" label="{{title(1)}}">
                <iron-icon icon="{{icon(1)}}"></iron-icon>
                <div style="padding-left: 10%;">{{title(1)}}</div>
              </paper-item>
              <paper-item recenteringtouch="true" label="{{title(2)}}">
                <iron-icon icon="{{icon(2)}}"></iron-icon>
                <div style="padding-left: 10%;">{{title(2)}}</div>
              </paper-item>
              <paper-item recenteringtouch="true" label="{{title(3)}}">
                <iron-icon icon="{{icon(3)}}"></iron-icon>
                <div style="padding-left: 10%;">{{title(3)}}</div>
              </paper-item>
              <paper-item recenteringtouch="true" label="{{title(4)}}">
                <iron-icon icon="{{icon(4)}}"></iron-icon>
                <div style="padding-left: 10%;">{{title(4)}}</div>
              </paper-item>
              <paper-item recenteringtouch="true" label="{{title(5)}}">
                <iron-icon icon="{{icon(5)}}"></iron-icon>
                <div style="padding-left: 10%;">{{title(5)}}</div>
              </paper-item>
              <div class="copyright">
                <hr style="border-top: dotted 1px;">
                <p style="font-weight: bold; color: red">Warning: This site is under **violent** refurbishment</p>
                Copyright © Tony Olagbaiye <?php
                  $year = floor(time()/(365.25*86400)+1970);
                  print($year > 2014 ? "2014-".$year : $year);
                ?><br>
                Last modified <?php
                  print(floor((time()-getlastmod())/86400));
                ?> days ago
              </div>
            </paper-menu>
          </paper-header-panel>

          <paper-header-panel main navigation flex mode="waterfall-tall" tallClass="medium-tall" condenses id="main">
            <paper-toolbar horizontal center-justified layout id="title">
              <div tool flex class="bottom indent">{{title(page)}}</div>
            </paper-toolbar>

            <neon-animated-pages selected="{{page}}" class="flex" transitions="cross-fade-all">
              <section id="home">
                <page-home></page-home>
              </section>
              <section id="about">
                <page-about></page-about>
              </section>
              <section id="history">
                <page-history></page-history>
              </section>
              <section id="work">
                <page-work></page-work>
              </section>
              <section id="hire">
                <page-hire></page-hire>
              </section>
              <section id="contact">
                <page-contact></page-contact>
              </section>
            </neon-animated-pages>
          </paper-scroll-header-panel>
        </paper-drawer-panel>
      </template>
      <script>
        var pages = [
          {
            title: "Home",
            icon: "home"
          }, {
            title: "About Me",
            icon: "info"
          }, {
            title: "My History",
            icon: "perm-contact-calendar"
          }, {
            title: "My Work",
            icon: "work"
          }, {
            title: "Hire Me",
            icon: "payment"
          }, {
            title: "Contact Me",
            icon: "mail"
          },
        ];

        Polymer.log = console.log.bind(console);
        Polymer({
          is: 'home-page',
          properties: {
            lastPage: {
              type: Number,
              value: 0
            },
            page: {
              type: Number,
              value: 0
            },
            scrollStates: {
              type: Array,
              value: function () {
                return [
                  0, 0, 0, 0, 0, 0
                ];
              }
            }
          },
          title: function(page) {
            return pages[page].title;
          },
          icon: function(page) {
            return pages[page].icon;
          },
          menuSelect: function (e, detail) {
            var elem = this.$.scaffold.$.main.firstElementChild.scroller;
            var curr = elem.scrollTop;
            var targ = this.scrollStates[this.page];
            var diff = targ - curr;
            this.set('scrollStates' + ('.' + this.lastPage), curr);
            this.lastPage = this.page;
            var anim = new CoreAnimation();
            anim.duration = 300;
            anim.target = elem;
            anim.easing = 'ease-out';
            anim.customEffect = function (timeFrac, target, _) {
              if (timeFrac == null)
                timeFrac = 1;
              target.scrollTop = curr + diff * timeFrac;
            };
            anim.play();
          },
          ready: function () {
            that = this;
            var panel = this.$.scaffold.$.main.firstElementChild;
            var handler = function (event) {
              if (event.wheelDeltaY < 0) {
                if (panel.scroller.scrollTop == 0)
                  panel.scroller.scrollTop = 1;
              }
            };
            panel.addEventListener('mousewheel', handler);
            panel.addEventListener('DOMMouseScroll', handler);
          },
          hostAttributes: { 'fit': '' }
        });
      </script>
    </dom-module>

    <home-page></home-page>

</body></html>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
