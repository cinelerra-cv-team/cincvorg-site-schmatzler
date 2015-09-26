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

        <div style="text-align:center;margin-top:15px;padding-top:30px;"><img src="/cinelerra-orng.png" alt="Cinelerra-CV">
        <div class="hero-titles">Professional video editing and compositing environment for Linux.</div>
        
        <div>
            <a class="button-cta pure-button" href="/getting_cinelerra.php">Get Started</a>
            <a class="button-secondary pure-button" href="http://git.cinelerra-cv.org/gitweb">Browse code</a>
        </div>
        </div>

<h2>News</h2>

<p>
<strong>September 26, 2015</strong><br>
* Our new website has launched. It can now be browsed with tablets and smartphones. We also added language icons to our <a href="/docs.php">documentation section</a>, making it easier to find useful content in your native tongue.
</p>

<p>
<strong>September 5, 2015</strong><br>
* We've switched over to a new machine to host our repositories and the website. As a result, our <a href="http://git.cinelerra-cv.org/gitweb">gitweb</a> received a facelift. You can browse the repositories faster and also download snapshots from it. Additionally, the code of this website is <a href="http://git.cinelerra-cv.org/gitweb?p=www/cinelerra-site.git;a=summary">now accessible to the public</a>. If you want to help us fixing it, please leave a message on the mailing list.
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
Full changelog can be browsed through <a href="http://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git;a=log;h=58ef118e63bf2fac8c99add372c584e93b008bae">gitweb</a>.
</p>

<p>
<strong>June, 2014</strong><br>
* The development of the next release of cinelerra-cv has been very active in the last few months. Some notable changes already included in the development branch: massive bug fixing (memory leaks, seg faults), revised and more robust plugin infrastructure, new plugins (Bluebanana, C41, color3way, findobject), new graphics, support for UTF-8 text and much more. These are available now in the  <a href="http://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git">git repository</a>(or in <a href="https://launchpad.net/%7Ecinelerra-ppa/+archive/ppa">precompiled binaries</a>). Check back here for more updates.
</p>

<p>
<strong>Mar 7, 2014</strong><br>
* Our Bugtracker on <a href="http://bugs.cinelerra-cv.org/">bugs.cinelerra-cv.org</a> and gitweb on <a href="http://git.cinelerra-cv.org/gitweb">git.cinelerra-cv.org/gitweb</a> are back. Mind the <strong>-cv</strong> in the domain name! All git users should update their remote URL to the new domain git.cinelerra-cv.org.
</p>

<p>
<strong>Feb 23, 2014</strong><br>
* Our obsolete domain cinelerra.org was reregistered by someone else and currently shows an outdated and modified, static website copy. 
For verifying future news statements, please refer to our mailing list <a href="http://www.mail-archive.com/cinelerra@skolelinux.no/">cinelerra@skolelinux.no</a>.
</p>

<p>
<strong>Jan 20, 2014</strong><br>
* Cinelerra-CV has moved to <a href="http://cinelerra-cv.org/">cinelerra-cv.org</a>. Our new domain name reflects how cinelerra is named in several popular distributions and clarifies that it is the home of the community version of cinelerra. 
</p>

<hr>

<p><a href="archive/oldnews.php">Older news...</a></p>
<br />
<div class="lastmodified">Last modified on Sep 26, 2015</div>
</div>

<?php include "footer.php"; ?>
</body>
</html>
