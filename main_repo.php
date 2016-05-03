<?php 
$title="Repository";
include "header.php";
?>

<div class='content'>
<div class="header">
    <h1>Repository</h1>
    <h2>Who works on what? Where?</h2> 
</div>

<h1>Get Cinelerra-CV source code</h1>
<p>The source code of of Cinelerra-CV is available from a git repository.<br/>
Additionally, release tarballs are available on our <a href=/releases/>releases page</a>.<p>

<p>You can clone the repo of the last stable release (2.3) with:</p>
<pre>git clone git://git.cinelerra-cv.org/CinelerraCV.git -b rel2.3.0 cinelerra-cv-2.3</pre>

<p>Alternatively you can clone the ever growing git repository:</p>
<pre>git clone git://git.cinelerra-cv.org/CinelerraCV.git cinelerra-cv</pre>

<p>The stable repo is maintained by a small group of core developers. You can browse the <a href="https://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git;a=summary">CinelerraCV repository</a> on-line, thanks to Gitweb.</p>

<h2><a name="experimental">Experimental code</a></h2>

<p>Some developers are working around specific issues on experimental repos. You are welcome to test the application and report back to the <a href="contact.php">mailing list</a>.</p>

<h3>einar - core</h3>
<blockquote>
<p>
Einar Rünkaru is working with the long-term goal of improving the core fixing bugs and design flaws to get a stronger code, better designed to fit a community development. It's a quite invasive work, that needs a lot of debugging.</p>
<p><a href="https://git.cinelerra-cv.org/gitweb?p=einar/cinelerra.git;a=summary">einar&#039;s repo</a></p>
</blockquote>

<h3>j6t - merging Cinelerra-HV 4.x</h3>
<blockquote>
<p>Johannes Sixt' goal is to merge the Cinelerra-HV releases (4.x) with Cinelerra-CV. Since HV does not provide a GIT repository, this requires a lot of testing and debugging.</p>
<p><a href="https://git.cinelerra-cv.org/gitweb?p=j6t/cinelerra.git;a=summary">j6t&#039;s main repo</a></p>
<p>For the <i>merge-4</i> branch (combination of HV 4.1 + CV 2.3), see here:</p>
<p><a href="https://git.cinelerra-cv.org/gitweb?p=j6t/cinelerra.git;a=shortlog;h=refs/heads/merge-4">j6t&#039;s merge-4 repo</a> | <a href="https://launchpad.net/~cinelerra-ppa/+archive/ubuntu/cinelerra-beta">Ubuntu packages</a></p>
</blockquote>

<h3>goodguy - Cinelerra 5.x</h3>
<blockquote>
<p>This is essentially the codebase that was started on cinelerra.org a while back.</p>
<p>It is planned to merge this code with the j6t repository in the future.</p>
<p><a href="https://git.cinelerra-cv.org/gitweb?p=goodguy/cinelerra.git;a=summary">goodguy&#039;s repo</a> | <a href="https://cinelerra-cv.org/five">Packages for Ubuntu, openSUSE, Mint, CentOS</a></p>
</blockquote>

<h3>akirad - useful merges from all branches</h3>
<blockquote>
<p>This repository by Paolo Rampino has a blend of the HV-like extended ffmpeg decoding, many of the fixes found in CinCV 2.3 and much improved UI theming from the former Cinecutie project.</p>
<p>Unfortunately, this hasn't been updated in a while and may not compile with recent gcc versions.</p>
<p><a href="https://git.cinelerra-cv.org/gitweb?p=akirad/cinelerra.git;a=summary">akirad&#039;s repo</a></p>
</blockquote>

<h3>monty - FFMPEG-based loader</h3>
<blockquote>
<p>Monty Montgomery wrote an improved version of the FFMPEG-based file reader from CinHV 4.1 so that Cinelerra can read many more file formats. Main changes are:</p>
<ul>
<li>updates the internal ffmpeg version to ffmpeg-0.6.</li>
<li>disables the old libmpeg3 loader</li>
<li>properly handles odd-framerate HDV video (eg, the Canon 24F mode where a 24 fps
progressive scan stream is wrapped in a 30fps NTSC container with hard
telecine).</li>
<li>adds a minor autoconf fix for OpenGl detection.</li>
<li>strengthens pixel format handling (including adding JPEG-style
chroma sitings, used by DV, Theora, VPx and MJPEG, which cinelerra's
quicktime internals don't directly support)</li>
<li>corrects handling of audio formats that decode to othe than 16-bit
linear (eg, uncompressed 8 bit audio tracks)</li>
<li>adds a minor workaround to the seeking algo to try to handle AVCHD
files with partially incomplete initial open GOPs</li>
<li>fix latency calculation in the ALSA backend</li>
</ul>
<p>
<a href="http://git.xiph.org/?p=users/xiphmont/cinelerraCV.git;a=summary">monty's repo</a></p>
</blockquote>

<div class="lastmodified">Last modified on May 3, 2016</div>
</div> 

<?php include "footer.php"; ?>
</body> </html>
