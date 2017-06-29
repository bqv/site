<link rel="import" href="/components/paper-material/paper-material.html">
<link rel="import" href="/components/google-map/google-map.html">
<link rel="import" href="/components/iron-flex-layout/iron-flex-layout.html">

<dom-module id="page-contact">
  <style>
      [layout] {
        @apply(--layout);
      }
      [layout][horizontal] {
        @apply(--layout-horizontal);
      }
      [layout][wrap] {
        @apply(--layout-wrap);
      }
      [layout][flex] {
        @apply(--layout-flex);
      }
      [layout][center] {
        @apply(--layout-center);
      }
      [layout][vertical] {
        @apply(--layout-vertical);
      }
      .container {
        margin: auto;
        padding: 0 1em 1em;
      }
      @media (min-width: 481px) {
        .container {
          width: 100%;
        }
      }
      paper-shadow {
        background-color: #FFFFFF;
        margin: 20px;
        min-width: 300px;
      }
      h2 {
        font-size: 48px;
      }
      h4 {
        display: block;
        width: 80%;
        border-bottom: 1px solid #526E9C;
        margin-bottom: 1em;
      }
      h6 {
        display: block;
        margin-bottom: 1em;
      }
      google-map {
        display: block;
        min-width: 300px;
        min-height: 300px;
      }
      a {
        text-decoration: none;
        color: black;
      }
      a:hover {
        text-decoration: underline;
      }
      a:visited {
      }
    </style>
  <template>
    <div class="grey">
      <div horizontal layout nowrap>
        <paper-material elevation="1" flex layout center>
          <div class="container" layout vertical>
            <h3>Tony Olagbaiye</h3>
            <h4>Phone:</h4>
              <a href="tel:+4479-448-43622">07944843622</a>
            <h4>E-mail:</h4>
              <a href="mailto:bo536@york.ac.uk">bo536@york.ac.uk</a>
            <h4>Website:</h4>
              <a href="http://tonyolag.co.uk">http://tonyolag.co.uk</a>
          </div>
        </paper-material>
        <paper-material elevation="1" flex layout center>
          <google-map id="gmap" latitude="52.883560" longitude="-1.974060" fittomarkers api-key="AIzaSyDrqjD_Lj9jR-8nX_gJdRAHOTeqfWc8MH4">
            <google-map-marker latitude="53.948639" longitude="-1.027540" title="Term Address">
              <h4>Term Address</h4>
              <p>Tony Olagbaiye<br>
              19 Hadrian Avenue<br>
              Heslington<br>
              York<br>
              YO10 3RD</p>
            </google-map-marker>
            <google-map-marker latitude="51.440380" longitude="-0.096620" title="Home Address">
              <h4>Home Address</h4>
              <p>Tony Olagbaiye<br>
              23 Lovelace Road<br>
              West Dulwich<br>
              London<br>
              SE21 8JY</p>
            </google-map-marker>
          </google-map>
        </paper-material>
      </div>
      <paper-material elevation="1" layout center>
        <div class="container" layout vertical center>
          <h6>See Home for more social media links.</h6>
        </div>
      </paper-material>
    </div>
  </template>
  <script>
    Polymer({
      is: 'page-contact',
      attached: function (e) {
        this.async(function () {
          this.$.gmap.resize();
        });
      }
    });
  </script>
</dom-module>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
