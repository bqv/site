<!DOCTYPE html>
<html>
  <head>
    <title>Frony</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="viewport"
          content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <script src="/components/webcomponentsjs/webcomponents.js"></script>
    <link rel="import"
          href="/components/font-roboto/roboto.html">
    <link rel="import"
          href="/components/core-header-panel/core-header-panel.html">
    <link rel="import"
          href="/components/core-drawer-panel/core-drawer-panel.html">
    <link rel="import"
          href="/components/core-toolbar/core-toolbar.html">
    <link rel="import"
          href="/components/core-menu/core-menu.html">
    <link rel="import"
          href="/components/paper-item/paper-item.html">
    <link rel="import"
          href="/components/core-scaffold/core-scaffold.html">
    <link rel="import"
          href="/components/core-icons/core-icons.html">
    <link rel="import"
          href="/components/core-icon/core-icon.html">
    <link rel="import"
          href="/components/paper-shadow/paper-shadow.html">
    <style>
      html,body {
        height: 100%;
        margin: 0;
        background-color: #E5E5E5;
        font-family: 'RobotoDraft', sans-serif;
      }
      #navheader {
        background-color: #56BA89;
      }
      .container {
        width: 80%;
        margin: 50px auto;
      }
      @media (min-width: 481px) {
        .container {
          width: 400px;
        }
      }
      core-header-panel {
        height: 100%;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
      }
      core-toolbar {
        color: white;
        span {
          font-size: small;
        }
      }
      img {
        border-radius: 50%;
        height: 80%;
        box-shadow: 0px 0px 4px rgba(32,32,32,128);
      }
      paper-item {
        font-size: medium;
      }
      paper-item.core-selected {
      }
      .copyright {
        color: #9E9E9E;
        font-size: x-small;
        text-align: center;
        padding-top: 100%;
      }
      paper-shadow {
        background-color: #FFFFFF;
        margin: 0 10% 0 10%;
      }
      h2 {
        font-size: 48px;
      }
    </style>
  </head>
  <body fullbleed vertical layout unresolved>
    <core-scaffold>
      <core-header-panel navigation flex mode="seamed" shadow=true>
        <core-toolbar horizontal center-justified layout id="navheader">
          <img src="/images/me.jpg" />
          <span>Tony Olagbaiye</span>
        </core-toolbar>

        <core-menu vertical layout theme="core-light-theme" selected="0">
          <paper-item recenteringTouch=true>
            <core-icon icon="home"></core-icon>
            <div style="padding-left: 10%;">Home</div>
          </paper-item>
          <paper-item recenteringTouch=true>
            <core-icon icon="info"></core-icon>
            <div style="padding-left: 10%;">About Me</div>
          </paper-item>
          <paper-item recenteringTouch=true>
            <core-icon icon="perm-contact-cal"></core-icon>
            <div style="padding-left: 10%;">My History</div>
          </paper-item>
          <paper-item recenteringTouch=true>
            <core-icon icon="work"></core-icon>
            <div style="padding-left: 10%;">My Work</div>
          </paper-item>
          <paper-item recenteringTouch=true>
            <core-icon icon="payment"></core-icon>
            <div style="padding-left: 10%;">Hire Me</div>
          </paper-item>
          <paper-item recenteringTouch=true>
            <core-icon icon="mail"></core-icon>
            <div style="padding-left: 10%;">Contact Me</div>
          </paper-item>
          <div class="copyright">
            <hr style="border-top: dotted 1px;" />
            Copyright © Tony Olagbaiye <?php
              $year = floor(time()/(365.25*86400)+1970);
              print($year > 2014 ? "2014-".$year : $year);
            ?>
          </div>
        </core-menu>
      </core-header-panel>
      <div tool shadow=true>Home</div>
      <paper-shadow z="1" layout center>
        <div class="container" layout vertical center>
          <h2>Hmm.</h2>
          <p>This site isn't quite ready yet.</p>
          <p>Feel free to grab a coffee while you wait</p>
          <?php foreach(range(0,95) as $i){print("<br/>");} ?>
        </div>
      </paper-shadow>
    </core-scaffold>

    <script>
    </script>
  </body>
</html>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
