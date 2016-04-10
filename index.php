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
    a.button-cta, a.button-secondary {
        margin: 0.25em;
    }
    a.button-secondary {
       background: #fff;
       color: #666;
       border: 1px solid #ddd;
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

<p>
<strong>April 11, 2016</strong><br>
* The latest beta release of CINELIVE - our very own LiveDVD including all variants of Cinelerra - <a href="/cinelive.php">is now available for testing</a>. It is based on the upcoming Slackware 14.2 and can be run from a DVD or installed on a USB stick.
</p>

<p>
<strong>March 21, 2016</strong><br>
* Good Guy has released the next version of his own branch - Cinelerra 5.1 Beta.
<ul><li>Merged in operators and methods from Adam's HV version</li>
<li>Merged in user interface characteristics from CV - <u>where possible</u></li>
<li>Many bug fixes and code improvements from the stable CV version are included</li></ul>
A more detailed description and packages for Ubuntu <a href="http://lists.cinelerra-cv.org/pipermail/cinelerra/2016q1/004236.html">can be found here.</a>
Please test the code and report bugs.
</p>

<p>
<strong>February 6, 2016</strong><br>
* We are in the process of updating our english manual. Helping hands for bringing <a href="https://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git;a=history;f=doc;hb=HEAD">all of the updates</a> into the <a href="docs.php">French, Portuguese, Spanish or Basque manuals</a> are very welcome.
</p>

<p>
<strong>January 19, 2016</strong><br>
* Happy New Year! Johannes Sixt has <a href="http://lists.cinelerra-cv.org/pipermail/cinelerra/2016q1/003761.html">merged Cinelerra-HV 4.1 into the CV codebase</a>. This is still experimental - please test the code and report bugs. <a href="https://launchpad.net/~cinelerra-ppa/+archive/ubuntu/cinelerra-beta">Packages for Ubuntu are here</a>, thanks to Nicola Ferralis. </a>
</p>

<p>
<strong>December 28, 2015</strong><br>
* Heroine Virtual has released Cinelerra-HV 4.6.1 in November - now, three different versions of Cinelerra are existing. <a href="/about.php">We've cleared up some of the confusion here.</a>
</p>

<p>
<strong>October 21, 2015</strong><br>
* Rendering H.264 directly is broken with a recent version of libx264. We are aware of that - but fear not! <a href="/render-h264.php">Follow these instructions</a> and you can render H.264 with the YUV4MPEG pipe.
</p>

<p>
<strong>October 9, 2015</strong><br>
* We have documented our latest codebase with <a href="/doxygen">doxygen</a> - thanks to Johannes Sixt for providing a template configuration file.
</p>

<p>
<strong>September 26, 2015</strong><br>
* Our new website has launched. It can now be browsed with tablets and smartphones. We also added language icons to our <a href="/docs.php">documentation section</a>, making it easier to find useful content in your native tongue.
</p>

<p>
<strong>September 5, 2015</strong><br>
* We've switched over to a new machine to host our repositories and the website. As a result, our <a href="https://git.cinelerra-cv.org/gitweb">gitweb</a> received a facelift. You can browse the repositories faster and also download snapshots from it. Additionally, the code of this website is <a href="https://git.cinelerra-cv.org/gitweb?p=www/cinelerra-site.git;a=summary">now accessible to the public</a>. If you want to help us fixing it, please leave a message on the mailing list.
</p>

<p>
<strong>August 10, 2015</strong><br>
* Cinelerra-CV 2.3 has been released!
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
</p>

<p>
<strong>June, 2014</strong><br>
* The development of the next release of cinelerra-cv has been very active in the last few months. Some notable changes already included in the development branch: massive bug fixing (memory leaks, seg faults), revised and more robust plugin infrastructure, new plugins (Bluebanana, C41, color3way, findobject), new graphics, support for UTF-8 text and much more. These are available now in the  <a href="https://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git">git repository</a>(or in <a href="https://launchpad.net/%7Ecinelerra-ppa/+archive/ppa">precompiled binaries</a>). Check back here for more updates.
</p>

<p>
<strong>Mar 7, 2014</strong><br>
* Our Bugtracker on <a href="https://bugs.cinelerra-cv.org/">bugs.cinelerra-cv.org</a> and gitweb on <a href="https://git.cinelerra-cv.org/gitweb">git.cinelerra-cv.org/gitweb</a> are back. Mind the <strong>-cv</strong> in the domain name! All git users should update their remote URL to the new domain git.cinelerra-cv.org.
</p>

<p>
<strong>Feb 23, 2014</strong><br>
* Our obsolete domain cinelerra.org was reregistered by someone else and currently shows an outdated and modified, static website copy. 
For verifying future news statements, please refer to our mailing list <a href="http://www.mail-archive.com/cinelerra@skolelinux.no/">cinelerra@skolelinux.no</a>.
</p>

<p>
<strong>Jan 20, 2014</strong><br>
* Cinelerra-CV has moved to <a href="https://cinelerra-cv.org/">cinelerra-cv.org</a>. Our new domain name reflects how cinelerra is named in several popular distributions and clarifies that it is the home of the community version of cinelerra. 
</p>

<hr>

<p><a href="archive/oldnews.php">Older news...</a></p>
<br />
<div class="lastmodified">Last modified on April 11, 2016</div>
</div>

<?php include "footer.php"; ?>
</body>
</html>
