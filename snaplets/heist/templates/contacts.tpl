<apply template="_base">
  <bind tag="title-text">Contacts</bind>
  <bind tag="index">04</bind>

  <!-- Container -->
  <div class="content-wrap">

    <div id="contacts" class="inner-content">

      <apply template="_heading">
        <bind tag="heading-title">Contacts</bind>
        <bind tag="heading-subtitle">Made for Creative Professionals</bind>
        <bind tag="heading-content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id metus purus. Ut vulputate, est vel tincidunt mattis, orci neque iaculis lectus, et interdum quam felis vel tortor. Fusce ultrices dui quis nunc dignissim faucibus. Ut ac odio quis nibh viverra fringilla ac id nisi. Suspendisse tincidunt augue quis ligula cursus, non efficitur ligula faucibus. Mauris id neque maximus, tincidunt metus et, sodales nulla.
        </bind>
      </apply>

      <section id="contacts-data" class="inner-block">
        <div class="container-fluid nopadding">
          <div class="dividewhite8"></div>
          <div class="row">
            <div class="col-md-6"
                 data-animation-origin="right"
                 data-animation-duration="500"
                 data-animation-delay="500"
                 data-animation-distance="25px">
              <div class="row">
                <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Address:</span></div>
                <div class="col-sm-10"><p class="small">12234 Direct Drive, Daytona Beach, Fl USA</p></div>
              </div>
              <div class="row">
                <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Phone:</span></div>
                <div class="col-sm-10"><p class="small">1 234 567-64-35</p></div>
              </div>
              <div class="row">
                <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Skype:</span></div>
                <div class="col-sm-10"><p class="small">@samanderson</p></div>
              </div>
            </div>
            <div class="col-md-6"
                 data-animation-origin="right"
                 data-animation-duration="500"
                 data-animation-delay="800"
                 data-animation-distance="25px">
              <div class="row">
                <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Twitter:</span></div>
                <div class="col-sm-10"><p class="small"><a href="#!">//twitter.com/samanderson</a></p></div>
              </div>
              <div class="row">
                <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Facbook:</span></div>
                <div class="col-sm-10"><p class="small"><a href="#!">//www.facebook.com/samanderson</a></p></div>
              </div>
              <div class="row">
                <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Linkedin:</span></div>
                <div class="col-sm-10"><p class="small"><a href="#!">//www.linkedin.com/samanderson</a></p></div>
              </div>
            </div>
          </div>
          <div class="dividewhite1"></div>

        </div>
      </section>

      <!-- Google Map Block -->
      <section id="contacts-map" class="inner-section" data-section="map"
               data-animation-origin="top"
               data-animation-duration="500"
               data-animation-delay="500"
               data-animation-distance="25px">
        <div class="container-fluid nopadding">
          <!-- Google Map -->
          <div>
            <div id="gm-panel">
              <div id="google-map" class="bigmap"></div>
            </div>
          </div>
          <!-- /Google Map -->
        </div>
        <div class="dividewhite8"></div>
      </section>
      <!-- /Google Map Block -->

    </div>

  </div>
</apply>
