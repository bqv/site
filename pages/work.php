<link rel="import" href="/components/paper-material/paper-material.html">
<link rel="import" href="/components/iron-flex-layout/iron-flex-layout.html">

<dom-module id="page-work">
  <style>
      [layout] {
        @apply(--layout);
      }
      [layout][center] {
        @apply(--layout-center);
      }
      [layout][vertical] {
        @apply(--layout-vertical);
      }
      @media (max-width: 481px) {
        paper-material {
          width: 400px;
        }
      }
      .container {
        padding: 1em;
        height: 100vh;
      }
      paper-material {
        background-color: #FFFFFF;
        padding: 10px 20px;
        margin: 1em 0;
      }
      paper-material div {
        width: 33%;
        text-align: center;
      }
      paper-material img {
        border-radius: 2em;
        height: 7em;
        border: #ddd 1px solid;
      }
      h4 {
        display: block;
        margin: auto;
        padding: 1em;
      }
      h3 {
        text-align: center;
        display: block;
        width: 100%;
      }
    </style>
  <template>
    <div class="grey container">
      <paper-material elevation="1" layout center>
        <div><img src="/static/thales.jpg" /></div>
        <div layout vertical center>
          <h3>Software Engineer Intern</h3>
          <span>at</span>
          <h5>Thales UK Ltd</h5>
        </div>
        <div layout vertical center>
          <p>Jul 2016</p>
          <span>to</span>
          <p>Present</p>
        </div>
      </paper-material>
      <paper-material elevation="1" layout center>
        <h4>More to come...</h4>
      </paper-material>
    </div>
  </template>
  <script>
    Polymer({ is: 'page-work' });
  </script>
</dom-module>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
