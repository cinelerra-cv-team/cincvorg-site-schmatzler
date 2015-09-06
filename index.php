<?php
include "header.php";

include "sidemenu.php"; 
?>


<div class='content'>
<br>

<h2><a name="news">News</a></h2>

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
<li>Changes in build system:</li>
  <ul>
    <li>Automated creation of header files for png in plugins.</li>
    <li>Updated debian build files</li>
    <li>Renamed project to Cinelerra-cv</li>
  </ul>
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

<p>
<strong>Jul 9, 2012</strong><br>
* <a href="http://heroinewarrior.com/index.php">Heroine Virtual LTD</a> releases <a href="http://heroinewarrior.com/cinelerra.php#download">Cinelerra 4.4</a>. Faster startup and responsiveness. Audio oscilloscope. Histogram updates. Audio gap removal. Better recording from webcams. Better live audio processing. Introducing the Bright theme for outdoor use.
</p>

<p>
<strong>Nov 13, 2011</strong><br>
* <em>CinelerraCV 2.2</em> is released. It includes Hermann Vosseler's Bezier Patch (bezier automation for Cinelerra-CV fades, camera and projector), improved default settings, extended audio range, support for multiline label and clips comments, autodetection of OpenGL in configure, detection of v4l2. For more details see the <a href="https://lists.skolelinux.org/pipermail/cinelerra/2011-November/018309.html">release announcement</a>.<br>
This release inaugurates the new <a href="http://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git;a=summary">community GIT repo</a> for Cinelerra. 
</p>
<p>
<strong>Aug 5, 2011</strong><br>
* <a href="http://heroinewarrior.com/index.php">Heroine Virtual LTD</a> releases <a href="http://heroinewarrior.com/cinelerra.php#download">Cinelerra 4.3</a>. Most notable feature is text to movie synthesis.
</p>

<p>
<strong>Nov 21, 2010</strong><br>
* <em>CinelerraCV 2.1.5</em> is out, with SOWT audio support, other improvements and bug fixes. For more details see the <a href="http://e.kevb.net/lurker/message/20101121.202538.c50bfa27.en.html">release announcement</a>.
</p>

<p>
<strong>Oct 15, 2010</strong><br>
* While we are working on CinelerraCV 2.1.5, <a href="http://heroinewarrior.com/index.php">Heroine Virtual LTD</a> releases <a href="http://heroinewarrior.com/cinelerra.php#download">Cinelerra 4.2</a>. Of main interest might be the "Edit->Align edits" feature, which aligns all the audio edits with the video.
Then there's the keyframe spanning feature, where highlighting a region with keyframe generation on causes effect tweeks to span all the keyframes.
Then there's the fact that all assets are opened in subprocesses so they don't bring down the entire program when they crash. featuring nested sequences. Only the source code is available, no packages.</a>
</p>

<hr>

<p><a href="oldnews.php">Older news...</a></p>
</div>

<address>Last modified on Sep 5, 2015</address>

<?php include "footer.php"; ?>
</body>
</html>
