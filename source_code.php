<?php 
include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">
 <h1>Get Cinelerra source code</h1>

<p>
    The source code of Cinelerra-CV is maintained by the community and made available from a git repository.
  <p>

<h2>Stable code</h2>

<p>The stable repo is maintained by Johannes Sixt and integrates stable changes by several developers.</p><p>
<a href="http://git.cinelerra.org/gitweb?p=j6t/cinelerra.git;a=summary">stable repo</a></p>
<p> To get a copy for compilation use the following command</p>
 <blockquote>
git clone git://git.cinelerra.org/j6t/cinelerra.git cinelerra-cv
 </blockquote>

<p>You can modify this working copy, and submit your patches to the mailing list, or ask for your own repo or for permission to push to one of the existing ones.</p>

<h2>Experimental code</h2>

<p>Several developers are working on improving CinelerraCV code. Each of them is working around a specific issue. You are welcome to test the application and report back.</p>

<h3>ichthyo - bezier automation</h3>
<blockquote>
<p>
Hermann Vosseler created a patch to get a usable bezier automation for Cinelerra 2.1CV fades, camera and projector. It retains backwards and (partially) upwards compatibility of session files. To know more read its nice <a href="http://ichthyostega.de/cinelerra/bezier-patch/">documentation</a>. </p>
<p><em>We would like to integrate it in CinelerraCV soon. Please, help us with testing!</em></p>
</blockquote>

<h3>einar - core</h3>
<blockquote>
<p>
Einar Rünkaru is working with the long-term goal of improving the core fixing bugs and design flaws to get a stronger code, better designed to fit a community development. It's a quite invasive work, that needs a lot of debugging.</p>
<p><a href="http://git.cinelerra.org/gitweb?p=einar/cinelerra.git;a=summary">einar&#039;s repo</a></p>
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
<p><a href="http://git.cinelerra.org/gitweb?p=c4/cinelerra.git;a=summary">SimAV's repo</a></p>
 </div>
 
<address> Last modified on Apr 2, 2011 </address>

<?php include "footer.php"; ?>
 </body>

</html>
