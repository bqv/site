<link rel="import"
      href="/components/paper-shadow/paper-shadow.html">

<polymer-element name="page-about">
  <template>
    <style>
      .container {
        width: 80%;
        height: 100vh;
        margin: auto;
      }
      @media (min-width: 481px) {
        .container {
          width: 400px;
          padding: 50px 0 50px 0;
        }
      }
      paper-shadow {
        background-color: #FFFFFF;
        margin: 2%;
      }
      h2 {
        font-size: 48px;
      }
      .separator {
        height: 64px;
      }
    @import url("/static/colours.css");
    </style>

    <div class="grey">
      <div class="container" layout vertical center>
        <h2>Hello</h2>
        <p>This page isn't quite ready yet.</p>
        <em>Feel free to grab a coffee while you wait</em>
      </div>
    </div>
    <div class="red separator"></div>
    <div class="grey separator"><div class="redtipped arrow"></div></div>
    <div class="orange separator"></div>
    <div class="yellow separator"></div>
    <div class="green separator"></div>
    <div class="blue separator"></div>
    <div class="indigo separator"></div>
    <div class="violet separator"></div>
  </template>
  <script>
    Polymer({});
  </script>
</polymer-element>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
