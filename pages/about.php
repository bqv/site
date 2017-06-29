<link rel="import" href="/components/paper-material/paper-material.html">
<link rel="import" href="/components/iron-flex-layout/iron-flex-layout.html">
<link rel="import" href="/elements/arrow-div.html">
<link rel="import" href="/elements/skill-lang.html">
<link rel="import" href="/elements/lang-box.html">

<dom-module id="page-about">
  <style>
    [layout] {
      @apply(--layout);
    }
    [layout][vertical] {
      @apply(--layout-vertical);
    }
    [layout][center] {
      @apply(--layout-center);
    }
    [layout][horizontal] {
      @apply(--layout-horizontal);
    }
    [layout][wrap] {
      @apply(--layout-wrap);
    }
  </style>
  <style>
      div {
        background: transparent;
      }
      paper-shadow {
        background-color: #FFFFFF;
        padding: 0.75em 1em 2em;
        margin: 2%;
      }
      paper-material {
        background: white;
        padding: 1em;
        margin: 0.5em;
      }
      .verbatim {
        font-family: monospace;
        text-align: left;
      }
      .verbatim span {
        font-weight: bold;
        font-size: 105%;
      }
      .container {
        width: 80%;
        min-height: 100vh;
        min-width: 400px;
        margin: auto;
        padding-bottom: 50px;
        text-align: center;
      }
      @media (min-width: 481px) {
        .container {
          padding: 50px 0;
        }
      }
      h2 {
        font-size: 32px;
      }
      skill-lang, lang-box {
        margin: 0 auto;
        padding: 5px;
      }
      img {
        border-radius: 50%;
        border: 5px solid #afafaf;
      }
      a {
        text-decoration: none;
        font-weight: bold;
        color: black;
      }
      a:hover {
        text-decoration: underline;
      }
      a:visited {
      }
      #york { background-image: url("/images/yorkbg.jpg"); }
      #code { background-image: url("/images/codebg.jpg"); }
      #maths{ background-image: url("/images/mathbg.jpg"); }
      #ling { background-image: url("/images/lingbg.jpg"); }
      #unix { background-image: url("/images/unixbg.jpg"); }
      #puzl { background-image: url("/images/puzlbg.jpg"); }
      #ents { background-image: url("/images/entsbg.jpg"); }
      #bike { background-image: url("/images/bikebg.jpg"); }
      .washout {
        background-size: cover;
        background-position: center;
      }
      .washout>div { background: rgba(250, 250, 244, 0.9); }
      .grey {
        padding-top: 4em;
      }
      #code h2 span {
        font-family: monospace;
        color: darkred;
      }
      #maths h2 span {
        font-family: serif;
        font-weight: normal;
        font-size: 110%;
        color: darkgoldenrod;
      }
      #ling h2 span {
        font-family: sans-serif;
        color: darkolivegreen;
      }
      #unix h2 span {
        font-family: sans-serif;
        color: green;
      }
      #puzl h2 span {
        font-family: sans-serif;
        color: darkturquoise;
      }
      #ents h2 span {
        font-family: sans-serif;
        color: indigo;
      }
      #bike h2 span {
        font-family: sans-serif;
        color: purple;
      }
    </style>
    <link rel="stylesheet" href="/static/colours.css">
  <template>

    <div class="washout" id="york">
      <div class="grey">
        <div class="container" vertical layout center>
          <img src="/images/me.jpg">
          <h2>This is me.</h2>
          <p>I'm an undergraduate student at the <a href="https://www.york.ac.uk">University of York</a><br>
          I'm also currently on a placement year in <a href="https://www.thalesgroup.com/en">Manchester</a></br>
          Although originally I hail from <a href="http://www.dulwich.org.uk">London.</a></p>
        </div>
      </div>
    </div>
    <div class="washout" id="code">
      <arrow-div size="32px" point="32px" from="red" to="grey" alpha="0.95"></arrow-div>
      <div class="grey">
        <div class="container" vertical layout center>
          <h2>I'm a <span>coder</span>.</h2>
          <p>and these are my tools...</p>
          <div horizontal layout wrap>
            <skill-lang exp="95" skill="95">Python3</skill-lang>
            <skill-lang exp="90" skill="90">Haskell</skill-lang>
            <skill-lang exp="80" skill="90">Python2</skill-lang>
            <skill-lang exp="85" skill="85">Java</skill-lang>
            <skill-lang exp="80" skill="98">Shell</skill-lang>
            <skill-lang exp="80" skill="80">CSS</skill-lang>
            <skill-lang exp="80" skill="00">LaTeX</skill-lang>
            <skill-lang exp="80" skill="95">HTML5</skill-lang>

            <skill-lang exp="75" skill="70">C</skill-lang>
            <skill-lang exp="60" skill="80">PHP</skill-lang>
            <skill-lang exp="60" skill="70">Clojure</skill-lang>
            <skill-lang exp="70" skill="65">C++</skill-lang>
            <skill-lang exp="50" skill="80">Javascript</skill-lang>
            <skill-lang exp="60" skill="60">Erlang</skill-lang>
            <skill-lang exp="50" skill="60">Scheme</skill-lang>
            <skill-lang exp="50" skill="65">Assembly</skill-lang>
            <skill-lang exp="45" skill="50">SQL</skill-lang>

            <skill-lang exp="20" skill="50">CLisp</skill-lang>
            <skill-lang exp="20" skill="35">C#</skill-lang>
            <skill-lang exp="20" skill="35">Ada</skill-lang>
            <skill-lang exp="20" skill="35">Pascal</skill-lang>
            <skill-lang exp="20" skill="30">Lua </skill-lang>
            <skill-lang exp="20" skill="30">Rust</skill-lang>
            <skill-lang exp="20" skill="20">Ruby</skill-lang>
            <skill-lang exp="20" skill="20">Perl</skill-lang>
         </div>
        </div>
      </div>
    </div>
    <div class="washout" id="maths">
      <arrow-div size="32px" point="32px" from="orange" to="grey"></arrow-div>
      <div class="grey">
        <div class="container" vertical layout center>
          <h2>I love <span>maths</span></h2>
          <p>don't judge me for it</p>
          <paper-material class="verbatim" elevation="1">
            <p>\section{<span>My favourite hobby topics include</span>}</p>
            <p>% <span>In no particular order or specificity</span></p>
            <p>\begin{itemize}</p>
            <p>&nbsp;\item <span>Integral transforms</span></p>
            <p>&nbsp;\item <span>Asymptotic analysis</span></p>
            <p>&nbsp;\item <span>Game theory</span></p>
            <p>&nbsp;\item <span>Nonlinear differential equations</span></p>
            <p>&nbsp;\item <span>Lagrangian mechanics</span></p>
            <p>&nbsp;\item <span>Metric spaces</span></p>
            <p>&nbsp;\item <span>Noneuclidean geometry</span></p>
            <p>&nbsp;\item <span>Field theory</span></p>
            <p>\end{itemize}</p>
            <p>\footnote{<span>but I also study it as half of my degree}</span></p>
          </paper-material>
        </div>
      </div>
    </div>
    <div class="washout" id="ling">
      <arrow-div size="32px" point="32px" from="yellow" to="grey"></arrow-div>
      <div class="grey">
        <div class="container" vertical layout center>
          <h2>I learn <span>languages</span></h2>
          <p>or at the very least, I try to.</p>
          <div horizontal layout wrap>
            <lang-box type="English" fluency="100">
              <span>I'm a native english speaker</span>
              <p>A fairly good one if I don't say so myself. However I also enjoy more general linguistics, and learning new writing scripts.</p>
            </lang-box>
            <lang-box type="French" fluency="40">
              <span>I took French GCSE in a year, so speak minimal french</span>
              <p>C'était mon primer, mais malheureusement après de mon exam je n'ai pas eu plus de chance pour utilizer cette langue</p>
            </lang-box>
            <lang-box type="Spanish" fluency="60">
              <span>I took Spanish GCSE and a term of Spanish AS.
              I think I'm fairly competent</span>
              <p>Por todo mi vida españa me ha interesado. Creo que eso es la razón que no ha perdido mucho de mi abilidád.</p>
            </lang-box>
            <lang-box type="Italian" fluency="30">
              <span>I also took Italian GCSE in a year, but I'm not so great</span>
              <p>Il mio italiano... non è molto buono.</p>
            </lang-box>
            <lang-box type="Japanese" fluency="70">
              <span>I self-studied Japanese for years, and I'm at a worthy level</span>
              <p>日本が大好きから言語を習おうと思った、そうして今あまり上手です。素晴らしい言語です</p>
            </lang-box>
            <lang-box type="Chinese" fluency="5">
              <span>I'm perpetually learning Mandarin, but I'll get there one day. Promise</span>
              <p>我喜欢汉字...</p>
            </lang-box>
            <paper-material elevation="1">
              <h4>Other languages on my list</h4>
              <span>Russian, Romanian, Arabic, Korean, Dutch, and more by the day</span>
            </paper-material>
          </div>
        </div>
      </div>
    </div>
    <div class="washout" id="unix">
      <arrow-div size="32px" point="32px" from="green" to="grey"></arrow-div>
      <div class="grey">
        <div class="container" vertical layout center>
          <h2>I'm a <span>linux</span> fan</h2>
          <p>well, a few other exotic systems too</p>
          <div><paper-material>
            <h3>I use Linux...</h3>
            ...almost every day, as my day to day system (along with OSX) and as the OS of my servers. I have experience with several hobbyist distros like Arch Linux and Gentoo, but also with enterprise and production systems like Fedora, CentOS and Debian.
          </paper-material><paper-material>
            <h3>I like BSD...</h3>
            ...and I have good experience with FreeBSD, as well as minimal experience with NetBSD and OpenBSD. Oh and I use OSX as a day to day system, if that counts.
          </paper-material><paper-material>
            <h3>I tried Solaris...</h3>
            ...it wasn't my cup of tea, but the people there do good work. I still know my way around a solaris system well enough.
          </paper-material><paper-material>
            <h3>I avoid Windows...</h3>
            ...where possible, but I have enough experience with win32 development regardless. You might even say that's why...
          </paper-material></div>
        </div>
      </div>
    </div>
    <div class="washout" id="puzl">
      <arrow-div size="32px" point="32px" from="blue" to="grey"></arrow-div>
      <div class="grey">
        <div class="container" vertical layout center>
          <h2>I'm a <span>puzzle</span> guy</h2>
          <p>seriously, you should see my collection</p>
          <div><paper-material>
            <h3>Board Games</h3>
            They're great really. Chess is the classic, and I'm a great fan of any finite zero-sum perfect information. My latest hobby in this category is the East Asian game of Go, also known as Baduk. Conveniently computationally intractable until very recently, it's one of the only games where computers find it exceedingly difficult to beat real people.
          </paper-material><paper-material>
            <h3>Twisty Puzzles</h3>
            Mainly rubik's cubes. I have quite a few, and I'm certainly what you would call a speedsolver. My personal records have nothing on the world records, but it's still good fun, and an interesting application for group theory.
          </paper-material><paper-material>
            <h3>Video Games</h3>
            I'm not a heavy gamer. I play my fair share though, every now and then.
          </paper-material></div>
        </div>
      </div>
    </div>
    <div class="washout" id="ents">
      <arrow-div size="32px" point="32px" from="indigo" to="grey"></arrow-div>
      <div class="grey">
        <div class="container" vertical layout center>
          <h2>I enjoy <span>watching</span> things</h2>
          <p>not so much listening to them, I'm not that into music</p>
          <div><paper-material>
            <p>My primary form of entertainment is TV shows, with the occasional movie, and anime. I've probably amassed quite a clock in my time...</p>
            <p>I'm in the process of rating everything I have watched on <a href="http://trakt.tv">trakt.tv</a>, but I'm not quite there yet.</p>
          </paper-material></div>
        </div>
      </div>
    </div>
    <div class="washout" id="bike">
      <arrow-div size="32px" point="32px" from="violet" to="grey"></arrow-div>
      <div class="grey">
        <div class="container" vertical layout center>
          <h2>I travel by <span>bike</span></h2>
          <p>within reason.</p>
          <div><paper-material>
            <p>I cycle daily to wherever I need to go, whether that were school, uni, work, or on errands. It's a great way to exercise, and also gets you there faster than walking.</p>
            <p>Of course I'm a sucker for the free bus service at York when it comes to lateness.</p>
          </paper-material></div>
        </div>
      </div>
    </div>
  </template>
  <script>
    Polymer({ is: 'page-about' });
  </script>
</dom-module>
<?php /* vi: set ai sw=2 ts=2 expandtab: */ ?>
