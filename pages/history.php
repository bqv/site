<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700">
<link rel="import" href="/elements/time-line.html">

<dom-module id="page-history">
  <style>
      *, *:after, *:before {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
      a {
        color: #acb7c0;
        text-decoration: none;
        font-family: "Open Sans", sans-serif;
      }
      img {
        max-width: 100%;
      }
      h1, h2 {
        font-family: "Open Sans", sans-serif;
        font-weight: bold;
      }
    </style>
  <template>

    <time-line>
      <time-event>
        <img src="/images/cd-icon-picture.svg" alt="Picture">
        <h2>Born</h2>
        <p>In south-east London, where I lived up until 18.</p>
        <span>Jul 1996</span>
      </time-event>

      <time-event>
        <img src="/images/cd-icon-location.svg" alt="Location">
        <h2>Started at Dulwich College</h2>
        <p>A prestigious private school in South London, most notably part of the Eton Group of schools.</p>
        <a href="http://wikipedia.org/wiki/Dulwich_College">Read more</a>
        <span>Sep 2003</span>
      </time-event>

      <time-event>
        <img src="/images/cd-icon-picture.svg" alt="Picture">
        <h2>Completed GCSE</h2>
        <p>Achieved 11 GCSEs in total (10 at A*/A grade), including 3 completed in the space of one year.</p>
        <span>Jun 2012</span>
      </time-event>

      <time-event>
        <img src="/images/cd-icon-movie.svg" alt="Movie">
        <h2>Elected Chair of Programming Society</h2>
        <p>In my final year, I ran this society; coordinating group programming projects and teaching all those who were interested in programming, regardless of experience.</p>
        <span>Sept 2013</span>
      </time-event>

      <time-event>
        <img src="/images/cd-icon-picture.svg" alt="Picture">
        <h2>Graduated from Dulwich College</h2>
        <p>Achieved four A-Levels; A*,A in Maths and Further Maths, B in Physics, and C in Chemistry.</p>
        <span>Jun 2014</span>
      </time-event>

      <time-event>
        <img src="/images/cd-icon-location.svg" alt="Location">
        <h2>Matriculated at University of York</h2>
        <p>Reading Mathematics and Computer Science, pursuing an MMath.</p>
        <p>Estimated end date: 2019</p>
        <a href="http://york.ac.uk/">Read more</a>
        <span>Oct 2014</span>
      </time-event>

      <time-event>
        <img src="/images/cd-icon-movie.svg" alt="Location">
        <h2>Started a placement at Thales UK Ltd.</h2>
        <p>Working as a Software Engineer in Cheadle.</p>
        <a href="http://thalesgroup.com/">Read more</a>
        <span>Jun 2016</span>
      </time-event>

      <time-event>
        <img src="/images/cd-icon-picture.svg" alt="Location">
        <h2>Enrolled at Google: Get Ahead 2016</h2>
        <p>A mentoring programme to train students for internship.</p>
        <span>Aug 2016</span>
      </time-event>
    </time-line>
  </template>
  <script>
    Polymer({ is: 'page-history' });
  </script>
</dom-module>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
