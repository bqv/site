<!DOCTYPE html>
<html>
  <head>
    <title>Tony Olagbaiye</title>
    <link rel="shortcut icon" href="/favicon.ico?<?php print(time()) ?>" />
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
          href="/components/core-animated-pages/core-animated-pages.html">
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
    </style>
    <link rel="import"
          href="/elements/page-home.php">
    <link rel="import"
          href="/elements/page-about.php">
    <link rel="import"
          href="/elements/page-contact.php">
  </head>
  <body fullbleed vertical layout unresolved touch="auto">
    <polymer-element name="home-page" fit>
      <template>
        <style>
          #navheader {
            background-color: #3CB371;
          }
          core-header-panel {
            height: 100%;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
          }
          core-toolbar {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #526E9C;
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
            padding-top: 100%;
          }
        </style>

        <core-scaffold mode="waterfall-tall">
          <core-header-panel navigation flex mode="waterfall">
            <core-toolbar horizontal center-justified layout id="navheader">
              <img src="/images/me.jpg" />
              <span>Tony Olagbaiye</span>
            </core-toolbar>

            <core-menu vertical layout theme="core-light-theme" selected="{{page}}" on-core-select="{{menuSelect}}" selectedItem="{{item}}">
              <paper-item recenteringTouch=true label="Home">
                <core-icon icon="home"></core-icon>
                <div style="padding-left: 10%;">Home</div>
              </paper-item>
              <paper-item recenteringTouch=true label="About Me">
                <core-icon icon="info"></core-icon>
                <div style="padding-left: 10%;">About Me</div>
              </paper-item>
              <paper-item recenteringTouch=true label="My History">
                <core-icon icon="perm-contact-cal"></core-icon>
                <div style="padding-left: 10%;">My History</div>
              </paper-item>
              <paper-item recenteringTouch=true label="My Work">
                <core-icon icon="work"></core-icon>
                <div style="padding-left: 10%;">My Work</div>
              </paper-item>
              <paper-item recenteringTouch=true label="Hire Me">
                <core-icon icon="payment"></core-icon>
                <div style="padding-left: 10%;">Hire Me</div>
              </paper-item>
              <paper-item recenteringTouch=true label="Contact Me">
                <core-icon icon="mail"></core-icon>
                <div style="padding-left: 10%;">Contact Me</div>
              </paper-item>
              <div class="copyright">
                <hr style="border-top: dotted 1px;" />
                Copyright © Tony Olagbaiye <?php
                  $year = floor(time()/(365.25*86400)+1970);
                  print($year > 2014 ? "2014-".$year : $year);
                ?><br />
                Last modified <?php
                  print(floor((time()-getlastmod())/86400));
                ?> days ago
              </div>
            </core-menu>
          </core-header-panel>

          <div tool flex class="bottom indent">{{item.attributes['label'].value}}</div>

          <core-animated-pages selected="{{page}}" transitions="cross-fade-all">
            <section id="home">
              <page-home></page-home>
            </section>
            <section id="about">
              <page-about></page-about>
            </section>
            <section id="history">
              <page-contact></page-contact>
            </section>
            <section id="work">
              <page-contact></page-contact>
            </section>
            <section id="hire">
              <page-contact></page-contact>
            </section>
            <section id="contact">
              <page-contact></page-contact>
            </section>
          </core-animated-pages>
        </core-scaffold>
      </template>

      <script>
        Polymer({
          page : 0,
          menuselect : function(e, detail) {
          }
        });
      </script>
    </polymer-element>
    <home-page></home-page>
  </body>
</html>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
