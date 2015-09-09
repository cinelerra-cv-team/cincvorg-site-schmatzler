<?php
$title="Source Code";
include "header.php";

include "sidemenu.php"; 
?>

<div class="content">
 <h1>Get Cinelerra-CV source code</h1>

<p>Release tarballs are available on our <a href=/releases/>releases page</a>.</p>
<p>The source code of Cinelerra-CV is available from a git repository. To get it you need to have git-core installed.<p>

<h2>Stable code</h2>

<p>If you want to compile CinelerraCV for normal use we recommend you get the stable code. </p>

<p> To get a copy for compilation use the following command:</p>
  <blockquote>
    <code>git clone git://git.cinelerra-cv.org/CinelerraCV.git cinelerra-cv</code>
 </blockquote>

<p>The stable repo is maintained by a small group of core developers. You can browse the <a href="http://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git;a=summary">CinelerraCV repository</a> on-line, thanks to Gitweb.</p>

<h2>Experimental code</h2>

<p>Some developers are working around specific issues on experimental repos. You are welcome to test the application and report back to the <a href="mailinglists.php">mailing list</a>.</p>

<h3>einar - core</h3>
<blockquote>
<p>
Einar Rünkaru is working with the long-term goal of improving the core fixing bugs and design flaws to get a stronger code, better designed to fit a community development. It's a quite invasive work, that needs a lot of debugging.</p>
<p><a href="http://git.cinelerra-cv.org/gitweb?p=einar/cinelerra.git;a=summary">einar&#039;s repo</a></p>
</blockquote>

<h3>j6t - </h3>
<blockquote>
<p>Johannes Sixt. TODO</p>
<p><a href="http://git.cinelerra-cv.org/gitweb?p=j6t/cinelerra.git;a=summary">j6t&#039;s repo</a></p>
</blockquote>

<h3>akirad - </h3>
<blockquote>
<p>Paolo Rampino. TODO</p>
<p><a href="http://git.cinelerra-cv.org/gitweb?p=akirad/cinelerra.git;a=summary">akirad&#039;s repo</a></p>
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

<h3>SimAV - merges from HV</h3>
<blockquote>
<p>Simeon Voelkel is working on merging the code from Cinelerra 4 (HV)</p>
<p><a href="http://git.cinelerra-cv.org/gitweb?p=c4/cinelerra.git;a=summary">SimAV's repo</a></p>
 </div>
 
<address> Last modified on Sep 9, 2015 </address>

<?php include "footer.php"; ?>
 </body>

</html>
