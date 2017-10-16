<?php
$title="News";
include "header.php";
?>

<style type="text/css" scoped>
    .hero-titles {
        font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
        padding: 0 1em;
        margin: 2em auto;
        max-width: 768px;
        font-size: 150%;
        line-height: 1.5;
        font-weight: 200;
        margin: 0 0 1em;
        color: #666;
    }
    a.button-cta {
        background: #1f8dd6;
        color: #fff;
        border: 1px solid #1f8dd6;
    }
    a.button-cta:hover {
        color: #fff !important;
    }
    a.button-cta, a.button-secondary {
        margin: 0.25em;
    }
    a.button-secondary {
       background: #fff;
       color: #666;
       border: 1px solid #ddd;
    }
    a.button-secondary:hover {
       color: #666 !important;
    }
    a.button-cta, a.button-secondary {
       margin: 0.25em;
    }
</style>


<div class='content'>

        <div style="text-align:center;margin-top:15px;padding-top:30px;"><img style="width:100%;max-width:496px;" src="/cinelerra-home.png" alt="Cinelerra-CV">
        <div class="hero-titles">Professional video editing and compositing environment for Linux.</div>
        
        <div>
            <a class="button-cta pure-button" href="/download.php">Get Started</a>
            <a class="button-secondary pure-button" href="https://git.cinelerra-cv.org/gitweb">Browse code</a>
        </div>
        </div>

<h2>News</h2>

<div class="news" style="margin-top:30px;">
  <div class="newsitem">Development updates (Yes, we are still alive.)</div>
  <div class="datebubble">October 16, 2017</div>
</div>
<div class="newscontent">
<p>We haven't had the time to update this news page for a while - but behind the scenes, a lot of things happened.</p>
<h3>Cinelerra-GG</h3>
<p>Goodguy's variant of Cinelerra has received a big amount of love over the last months. Here are some of the most exciting new features:</p>
<ul>
<li>Sam has created a ton of beautiful icons for a more modern look (licensed under Creative Commons Zero):
<a href="/images/website/news/icons-update.jpg" target="_blank"><img style="width:80%;max-width:500px;" src="/images/website/news/icons-update.jpg" alt="New icons by Sam" /></a></li>
<br/>
<li>The titler has received major improvements.
<a href="/images/website/news/new-title-plugin.jpg" target="_blank"><img style="width:80%;max-width:500px;" src="/images/website/news/new-title-plugin.jpg" alt="New titler plugin" /></a>
<br/>
Here is a selection of the best features:
   <ul>
      <li>title can be dragged anywhere on the screen with handles</li>
      <li>longer titles up to 3071 characters</li>
      <li>color picker allows for saving the last 16 picked colors for later re-use</li>
      <li>faster font locator plus stroker for pen strokes inside characters</li>
      <li>addition of background video</li>
      <li>individual character attributes of Color, Size, Font, Underline, Bold, Italic, Caps, Blink, 
     Alpha, Nudge, Sup(erscript,subscript),  PNG inclusion, and unicode characters</li>
   </ul>
<li>Comfortable zoom slider for the compositor</li>
<a href="/images/website/news/zoom-slider.jpg" target="_blank"><img style="width:80%;max-width:416px;" src="/images/website/news/zoom-slider.jpg" alt="Zoom slider on the compositor" /></a>
<li>New and improved plugins (Perspective, Blue Banana, Edgedetect, C41, Rumbler, Motion51, CriKey)</li>
<li>Additional video transitions for Shapewipe (Specks, Spiral and Burst)</li>
<li><a href="https://cinelerra-cv.org/download_gg.php">Builds for new distributions</a> (Ubuntu 17, Mint 18, Leap 42.3, Debian Stretch 32-bit, Slackware 32-bit)</li>
<li>Third-party libraries have been kept up to date to include ffmpeg, x264/x265,ladspa.</li>
<li>Updated dcraw to be able to process CR2 raw-image formats.</li>
<li>Added several new option files: visually_lossless, option to handle "movflags=+faststart" in the MP4/QT containers and h265 option files.</li>
<li>New capability for copying/pasting a list of files among and between instances of Cinelerra.</li>
</ul>
<h3>Cinelerra-CV(E)</h3>
<ul>
<li>Einar Rünkaru has made big progress in <a href="https://git.cinelerra-cv.org/gitweb?p=einar/cinelerra.git;a=commit;h=9d233e5c35be459ac96e101403469477410825aa">removing the very outdated quicktime library</a> from Cinelerra-CVE.
This is a neccessary step for improving Cinelerra-<b>CV</b> in the future.</li>
<li>Speaking of which, Cinelerra-CV has also received <a href="https://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git;a=summary">a steady stream</a> of bugfixes and compiler updates.</li>
</ul>
<h3>CINELIVE</h3>
<ul>
<li>Shortly after the release of Cinelerra-HV 7.0, we've also put out a new build of our <a href="https://cinelerra-cv.org/cinelive.php">LiveDVD/LiveUSB distribution</a>.
This enables you to test all of the new features and different variants of Cinelerra.</li>
<li>The script that generates a bootable USB drive now also works on more Linux distributions. Thanks to Eric Hameleers.</li>
<li>Since Johannes Sixt has <a href="http://lists.cinelerra-cv.org/pipermail/cinelerra/2017q3/006529.html">retired from his merge-4 project</a>, the "j6t" variant of Cinelerra has been removed from the LiveDVD.</li>
</ul>
</div>

<div class="news" style="margin-top:30px;">
  <div class="newsitem">Cinelerra-HV 7 released</div>
  <div class="datebubble">October 10, 2017</div>
</div>
<div class="newscontent">
<p>Another new release has been made by Adam Williams <a href="https://sourceforge.net/projects/heroines/">on sourceforge.net</a>: Cinelerra(-HV) 7.</p>
<ul>
<li>Optimized playback of large format video.</li>
<li>H.265 decoding.</li>
<li>Optimized screen capturing.</li>
<li>Spherical camera blending.</li>
<li>Eyedropper can show the maximum value.</li>
<li>Interpolating CR2 images always white balances.</li>
</ul>
There also is <a href="https://www.youtube.com/watch?v=zEQ4Cve3_-M" target="_blank"> a video where the new features are summarized</a>.
</p>
</div>

<div class="news" style="margin-top:30px;">
  <div class="newsitem">Revised download page</div>
  <div class="datebubble">December 10, 2016</div>
</div>
<div class="newscontent">
<p><a href="/download.php">Our download page</a> has been revised to display the most important variants of Cinelerra, including their benefits and weakpoints: CV, GG and HV.</p>
<p>All references to Cinelerra 5.1 have been changed to Cinelerra-<u>GG</u> 5.1, to prevent users confusing it with Adam Williams' Cinelerra(-HV) 6.</p>
</div>

<div class="news" style="margin-top:30px;">
  <div class="newsitem">Cinelerra-HV 6 released</div>
  <div class="datebubble">November 9, 2016</div>
</div>
<div class="newscontent">
<p>Not to be confused with goodguy's Cinelerra 5.1, a new release of the original Cinelerra(-HV) by Adam Williams has <a href="https://sourceforge.net/projects/heroines/">arrived at sourceforge.net</a>: Cinelerra(-HV) 6.</p>
<p>The reason behind the major jump from 4.6.1 to version 6 is yet unclear, but there certainly are improvements (<a href="http://www.heroinewarrior.com/cinelerra.php">quoted from the official website</a>):</p>
<ul>
<li>Updated the h264 decoding.</li>
<li>There are no longer picons in the asset window.</li>
<li>Motion tracking got major optimizations.</li>
<li>Resampling effects got new interfaces. Titler can load subtitle files.</li>
</ul>
</p>
</div>

<div class="news" style="margin-top:30px;">
  <div class="newsitem">Stable LiveDVD, 5.1 + CVE development, more packages</div>
  <div class="datebubble">August 6, 2016</div>
</div>
<div class="newscontent">
<p>Today we've released the first stable version of CINELIVE, based on the long awaited Slackware 14.2. <a href="/cinelive.php">More information here.</a></p>
<p>Good Guy has constantly improved Cinelerra 5.1 with new features and bugfixes. You can see a list of the major improvements of <a href="https://cinelerra-cv.org/five/releasenotes.pdf">the last two months here</a>.</p>
<p>He is even <a href="https://cinelerra-cv.org/five/">building packages for a lot of major distributions</a> like Arch, CentOS, Debian, Fedora, Ubuntu, Suse and many more. We'll probably have to revise our download page very soon to keep up with that. 😉</p>
<p>But let's not forget that other people are putting work into Cinelerra, too. Einar has written <a href="https://git.cinelerra-cv.org/gitweb?p=einar/cinelerra.git;a=summary">a lot of code</a> for Cinelerra-CVE since our last news bulletin. You can find a build of it on our LiveDVD for testing.</p>
</div>

<div class="news" style="margin-top:30px;">
  <div class="newsitem">Cinelerra-CV LiveDVD Beta release</div>
  <div class="datebubble">April 11, 2016</div>
</div>
<div class="newscontent">
The latest beta release of CINELIVE - our very own LiveDVD including all variants of Cinelerra - <a href="/cinelive.php">is now available for testing</a>. It is based on the upcoming Slackware 14.2 and can be run from a DVD or installed on a USB stick.
</div>

<div class="news">
  <div class="newsitem">New version of Cinelerra 5</div>
  <div class="datebubble">March 21, 2016</div>
</div>
<div class="newscontent">
Good Guy has released the next version of his own branch - Cinelerra 5.1 Beta.
<ul><li>Merged in operators and methods from Adam's HV version</li>
<li>Merged in user interface characteristics from CV - <u>where possible</u></li>
<li>Many bug fixes and code improvements from the stable CV version are included</li></ul>
A more detailed description and packages for Ubuntu <a href="http://lists.cinelerra-cv.org/pipermail/cinelerra/2016q1/004236.html">can be found here.</a>
Please test the code and report bugs.
</div>

<div class="news">
  <div class="newsitem">English manual updated</div>
  <div class="datebubble">February 6, 2016</div>
</div>
<div class="newscontent">
We are in the process of updating our english manual. Helping hands for bringing <a href="https://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git;a=history;f=doc;hb=HEAD">all of the updates</a> into the <a href="docs.php">French, Portuguese, Spanish or Basque manuals</a> are very welcome.
</div>

<div class="news">
  <div class="newsitem">"Mergelerra 4.1" is ready for beta-testing</div>
  <div class="datebubble">January 19, 2016</div>
</div>
<div class="newscontent">
Happy New Year! Johannes Sixt has <a href="http://lists.cinelerra-cv.org/pipermail/cinelerra/2016q1/003761.html">merged Cinelerra-HV 4.1 into the CV codebase</a>. This is still experimental - please test the code and report bugs. <a href="https://launchpad.net/~cinelerra-ppa/+archive/ubuntu/cinelerra-beta">Packages for Ubuntu are here</a>, thanks to Nicola Ferralis. </a>
</div>

<div class="news">
  <div class="newsitem">New Cinelerra-HV release by Adam Williams</div>
  <div class="datebubble">December 28, 2015</div>
</div>
<div class="newscontent">
Heroine Virtual has released Cinelerra-HV 4.6.1 in November - now, three different versions of Cinelerra are existing. <a href="/about.php">We've cleared up some of the confusion here.</a>
</div>

<div class="news">
  <div class="newsitem">Workaround: H.264 rendering with YUV4MPEG</div>
  <div class="datebubble">October 21, 2015</div>
</div>
<div class="newscontent">
Rendering H.264 directly is broken with a recent version of libx264. We are aware of that - but fear not! <a href="/render-h264.php">Follow these instructions</a> and you can render H.264 with the YUV4MPEG pipe.
</div>

<div class="news">
  <div class="newsitem">Updated code documentation is online</div>
  <div class="datebubble">October 9, 2015</div>
</div>
<div class="newscontent">
We have documented our latest codebase with <a href="/doxygen">doxygen</a> - thanks to Johannes Sixt for providing a template configuration file.
</div>

<div class="news">
  <div class="newsitem">New mobile-friendly website</div>
  <div class="datebubble">September 26, 2015</div>
</div>
<div class="newscontent">
Our new website has launched. It can now be browsed with tablets and smartphones. We also added language icons to our <a href="/docs.php">documentation section</a>, making it easier to find useful content in your native tongue.
</div>

<div class="news">
  <div class="newsitem">Updates to gitweb and website</div>
  <div class="datebubble">September 5, 2015</div>
</div>
<div class="newscontent">
We've switched over to a new machine to host our repositories and the website. As a result, our <a href="https://git.cinelerra-cv.org/gitweb">gitweb</a> received a facelift. You can browse the repositories faster and also download snapshots from it. Additionally, the code of this website is <a href="https://git.cinelerra-cv.org/gitweb?p=www/cinelerra-site.git;a=summary">now accessible to the public</a>. If you want to help us fixing it, please leave a message on the mailing list.
</div>

<div class="news">
  <div class="newsitem">Cinelerra-CV release 2.3</div>
  <div class="datebubble">August 10, 2015</div>
</div>
<div class="newscontent">
Cinelerra-CV 2.3 has been released!
Changes in version 2.3:
<ul><li>Full UTF-8 support</li>
<li>Complete new overlay engine and resampler</li>
<li>New graphics: About panel, some icons</li>
<li>New plugins: GreyCStoration, C41, Bluebanana, color3way, findobject, lens</li>
<li>Some translations have been updated (German, Italian, French, Norwegian, Portugese)</li>
<li>Lots of small bugfixes</li>
<li>Changes in build system:
  <ul>
    <li>Automated creation of header files for png in plugins.</li>
    <li>Updated debian build files</li>
    <li>Renamed project to Cinelerra-cv</li>
  </ul>
</li>
</ul>
Full changelog can be browsed through <a href="https://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git;a=log;h=58ef118e63bf2fac8c99add372c584e93b008bae">gitweb</a>.
</div>

<hr>

<p><a href="archive/oldnews.php">Older news...</a></p>
<br />
<div class="lastmodified">Last modified on October 16, 2017</div>
</div>

<?php include "footer.php"; ?>
</body>
</html>
