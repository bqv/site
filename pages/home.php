<link rel="import" href="/components/paper-material/paper-material.html">
<link rel="import" href="/components/iron-flex-layout/iron-flex-layout.html">

<dom-module id="page-home">
  <style>
      [layout] {
        @apply(--layout);
      }
      [layout][vertical] {
        @apply(--layout-vertical);
      }
      [layout][center] {
        height: 50%;
        @apply(--layout-center);
      }
      [layout][horizontal] {
        @apply(--layout-horizontal);
      }
      .container {
        width: 30%;
        margin: auto;
        margin-top: 0;
        padding: 10px 5px 20px;
        text-align: center;
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
        font-size: 32px;
        margin: 0;
      }
      #tabs {
        z-index: 1;
      }
      .tab {
        min-width: 16px;
        width: 10%;
        text-align: center;
        margin: 20px auto 0;
        color: #ccc;
        transition: margin-top 200ms ease-in-out, height 200ms ease-in-out, border-radius 200ms ease-in-out;
        border-radius: 5px 5px 0 0;
      }
      .tab:hover {
        margin-top: 0;
        height: 64px;
        border-radius: 5px;
      }
      #page {
        height: 80vh;
        padding: 10vh 0;
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
    </style>
    <link rel="stylesheet" href="/static/colours.css">
  <template>

    <div vertical layout id="page" class="grey">
      <div class="container" layout vertical center>
        <h2>Hello</h2>
        <p>My name is <span>Tony</span>.</p>
      </div>
      <div horizontal layout center>
        <div flex class="container">
          <img src="/static/code.jpg">
          <h3>I write code</h3>
          <em>Just take a look at my github...</em>
        </div>
        <div flex class="container">
          <img src="/static/calc.jpg">
          <h3>I do the maths</h3>
          <em>Pure maths is sort of my thing...</em>
        </div>
        <div flex class="container">
          <img src="/static/conv.jpg">
          <h3>I learn languages</h3>
          <em>You can never know enough...</em>
        </div>
      </div>
    </div>
    <div horizontal layout flex class="grey" id="tabs">
      <div class="red tab">
        <a style="background-image: url('/images/gh.png');" href="https://github.com/bqv"></a>
      </div>
      <div class="orange tab">
        <a style="background-image: url('/images/bb.png');" href="https://bitbucket.org/frony0"></a>
      </div>
      <div class="yellow tab">
        <a style="background-image: url('/images/so.png');" href="http://math.stackexchange.com/users/30869/frony0"></a>
      </div>
      <div class="green tab">
        <a style="background-image: url('/images/li.png');" href="https://uk.linkedin.com/in/tonyolag"></a>
      </div>
      <div class="blue tab">
        <a style="background-image: url('/images/sk.png');" href="skype:frony0?call"></a>
      </div>
      <div class="indigo tab">
        <a style="background-image: url('/images/ph.png');" href="tel:+44-79-448-43622"></a>
      </div>
      <div class="violet tab">
        <a style="background-image: url('/images/em.png');" href="mailto:frony0@gmail.com"></a>
      </div>
    </div>
  </template>
  <script>
    Polymer({ is: 'page-home' });
  </script>
</dom-module>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
