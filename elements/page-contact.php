<link rel="import"
      href="/components/paper-shadow/paper-shadow.html">

<polymer-element name="page-contact">
  <template>
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
      h2 {
        font-size: 48px;
      }
    </style>

    <paper-shadow z="1" layout center>
      <div class="container" layout vertical center>
        <h2>Hmm.</h2>
        <p>This page isn't quite ready yet.</p>
        <em>Feel free to grab a coffee while you wait</em>
        <?php foreach(range(0,95) as $i){print("<br/>");} ?>
      </div>
    </paper-shadow>
  </template>
  <script>
    Polymer({});
  </script>
</polymer-element>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
