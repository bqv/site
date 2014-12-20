<link rel="import"
      href="/components/paper-shadow/paper-shadow.html">

<polymer-element name="page-home">
  <template>
    <style>
      .container {
        width: 80%;
        margin: auto;
        margin-top: 0;
        padding: 10px 20px 10px 20px;
      }
      @media (min-width: 481px) {
        .container {
          width: 400px;
          text-align: center;
        }
      }
      paper-shadow {
        background-color: #FFFFFF;
        margin: 2%;
      }
      h2 {
        font-size: 48px;
        margin: 0;
      }
      #tabs {
        background-color: transparent;
        z-index: 1;
      }
      .tab {
        height: 16px;
        margin-top: auto;
        text-align: center;
        color: #ccc;
        transition: height 200ms ease-in-out, border-radius 200ms ease-in-out;
      }
      .tab:hover {
        height: 64px;
        border-radius: 5px 5px 0 0;
      }
      #outerpage {
        height: 100vh;
        overflow: hidden;
      }
      #innerpage {
        padding-top: 64px;
        margin-bottom: -64px;
        overflow-y: scroll;
      }
      h3 {
        font-size: medium;
      }
      em {
        font-size: small;
      }
      img {
        border: 3px solid #afafaf;
        border-radius: 50%;
        max-width: 100px;
        width: 100%;
        height: auto;
        margin: auto;
      }
      a {
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        display: block;
        height: 57px;
        width: 90%;
        margin: auto;
        margin-top: 5%;
      }
      span {
        font-size: large;
        font-style: oblique;
      }
      @import url("/static/colours.css");
    </style>

    <div vertical layout id="outerpage" class="grey">
      <div flex id="innerpage">
        <div class="container" layout vertical center>
          <h2>Hello</h2>
          <p>My name is <span>Tony</span>.</p>
        </div>
        <div horizontal layout center>
          <div flex class="container">
            <img src="/static/code.jpg" />
            <h3>I code a lot</h3>
            <em>Take a look at my github to see some of my binary adventures...</em>
          </div>
          <div flex class="container">
            <img src="/static/calc.jpg" />
            <h3>I calculate a lot</h3>
            <em>There's always more maths to learn...</em>
          </div>
          <div flex class="container">
            <img src="/static/conv.jpg" />
            <h3>I converse a lot</h3>
            <em>One language just isn't enough, 新しい物を習うのはいい...</em>
          </div>
        </div>
      </div>
      <div horizontal layout id="tabs">
        <div flex class="red tab">
          <a style="background-image: url('/images/gh.png');"
             href="https://github.com/frony0"></a>
        </div>
        <div flex class="orange tab">
          <a style="background-image: url('/images/bb.png');"
             href="https://bitbucket.org/frony0"></a>
        </div>
        <div flex class="yellow tab">
          <a style="background-image: url('/images/so.png');"
             href="http://math.stackexchange.com/users/30869/frony0"></a>
        </div>
        <div flex class="green tab">
          <a style="background-image: url('/images/li.png');"
             href="https://uk.linkedin.com/in/tonyolag"></a>
        </div>
        <div flex class="blue tab">
          <a style="background-image: url('/images/sk.png');"
             href="skype:frony0?call"></a>
        </div>
        <div flex class="indigo tab">
          <a style="background-image: url('/images/ph.png');"
             href="tel:+44-79-448-43622"></a>
        </div>
        <div flex class="violet tab">
          <a style="background-image: url('/images/em.png');"
             href="mailto:bo536@york.ac.uk"></a>
        </div>
      </div>
    </div>
  </template>
  <script>
    Polymer({});
  </script>
</polymer-element>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
