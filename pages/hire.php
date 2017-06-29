<link rel="import" href="/components/paper-material/paper-material.html">
<link rel="import" href="/components/paper-button/paper-button.html">
<link rel="import" href="/components/iron-collapse/iron-collapse.html">
<link rel="import" href="/elements/pdf-reader.html">

  <!--
      TODO(polyup): unable to infer path to components
      directory. This import path is probably incomplete.
   -->
  <link rel="import" href="/components/iron-flex-layout/iron-flex-layout.html">
<dom-module id="page-hire">
  <style>
    /* TODO(polyup): For speed, consider reworking these styles with .classes
                     and #ids rather than [attributes].
    */
    [layout] {
      @apply(--layout);
    }
    [layout][center] {
      @apply(--layout-center);
    }
    [layout][vertical] {
      @apply(--layout-vertical);
    }
    [layout][horizontal] {
      @apply(--layout-horizontal);
    }
    [layout][wrap] {
      @apply(--layout-wrap);
    }
  </style>
  <style>
      .container {
        width: 80%;
        margin: auto;
      }
      @media (min-width: 481px) {
        .container {
          width: 400px;
        }
      }
      paper-shadow {
        background-color: #FFFFFF;
        margin: 2%;
      }
      paper-button {
        height: 1em;
        width: 1em;
        min-width: 1em;
      }
      paper-button::shadow .button-content {
        padding: 0px;
      }
      a {
        color: #777;
        padding: 10px;
        display: inline;
        text-decoration: none;
        text-transform: uppercase;
      }
      a:visited {
        color: #aaa;
      }
      a:hover {
        color: #444;
      }
    </style>
  <template>

    <paper-material elevation="1" layout="" center="">
      <div class="container" layout="" vertical="" center="">
        <h2>My CV
          <paper-button on-click="togglepreview" title="{{preview ? " collapse"="" :="" "expand"}}"="">{{_computeExpression1(preview)}}</paper-button>
        </h2>
        <iron-collapse id="cvpreview" opened="{{preview}}">
          <!--pdf-reader width="400" height="566" src="/static/cv.pdf"></pdf-reader-->
        </iron-collapse>
        <div horizontal="" layout="" wrap="">
          <a href="/static/cv.pdf">PDF</a>
          <a href="/static/cv.pdf">Popup</a>
        </div>
      </div>
    </paper-material>
  </template>
  <script>
    Polymer({
      is: 'page-hire',
      properties: {
        preview: {
          type: Boolean,
          value: true
        }
      },
      togglepreview: function () {
        this.$.cvpreview.toggle();
      },
      _computeExpression1: function (preview) {
        return preview ? '-' : '+';
      }
    });
  </script>
</dom-module>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
