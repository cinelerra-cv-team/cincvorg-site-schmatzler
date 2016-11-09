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
            <a class="button-cta pure-button" href="/getting_cinelerra.php">Get Started</a>
            <a class="button-secondary pure-button" href="https://git.cinelerra-cv.org/gitweb">Browse code</a>
        </div>
        </div>

<h2>News</h2>

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
<div class="lastmodified">Last modified on November 9, 2016</div>
</div>

<?php include "footer.php"; ?>
</body>
</html>
