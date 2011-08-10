<?php 
include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">
 <h1>Get Cinelerra source code</h1>

<h2>Snapshots</h2>

<p>
<a href="http://git.cinelerra.org/gitweb?p=j6t/cinelerra.git;a=snapshot;h=01dc4375a0fb65d10dd95151473d0e195239175f;sf=tgz">cinelerra-cv 11.04</a> | 
<a href="http://git.cinelerra.org/gitweb?p=j6t/cinelerra.git;a=snapshot;h=5cc66405d21ba43846306d3b30cfbee3d6330826;sf=tgz">cinelerra-cv 10.10</a> | 
<a href="http://git.cinelerra.org/gitweb?p=j6t/cinelerra.git;a=snapshot;h=443a5c8c3565304ea542430a6eba9f76c619bc96;sf=tgz">cinelerra-cv 10.04</a> |
<a href="http://git.cinelerra.org/gitweb?p=j6t/cinelerra.git;a=snapshot;h=b628bff62ba92918d625c7d503681ba6ef1fb238;sf=tgz">cinelerra-cv 09.10</a> | 
<a href="http://git.cinelerra.org/gitweb?p=j6t/cinelerra.git;a=snapshot;h=954a91e72bba1ed1ce641b5faee7d4c5f318c074;sf=tgz">cinelerra-cv 09.04</a> | 
<a href="http://git.cinelerra.org/gitweb?p=j6t/cinelerra.git;a=snapshot;h=51a020685ef40489cdfdd16e7dcb9e7b5dbb64d5;sf=tgz">cinelerra-cv 08.10</a> | 
<a href="http://git.cinelerra.org/gitweb?p=j6t/cinelerra.git;a=snapshot;h=8eff31e1f8f3bcf3cd816239f6b3733f815588fd;sf=tgz">cinelerra-cv 08.04</a>
</p>

<h2>Main repository</h2>

<p>The source code of Cinelerra-CV is maintained by the community and made available from a git repository.</p>
<p>The main repo is maintained by Johannes Sixt and integrates stable changes by several developers.</p>

<blockquote>
<p><a href="http://git.cinelerra.org/gitweb?p=j6t/cinelerra.git;a=summary">cinelerra-cv main repo</a></p> 
</blockquote>

<p> To get a copy for compilation use the following command</p>
 <blockquote>
<em>git clone git://git.cinelerra.org/j6t/cinelerra.git cinelerra-cv</em>
 </blockquote>

<p>You can modify this working copy, and submit your patches to the mailing list, or ask for your own repo or for permission to push to one of the existing ones.</p>

<h2>Experimental repositories</h2>

<p>Several developers are working on improving CinelerraCV code. Each of them is working around a specific issue. You are welcome to test the application and report back.</p>

<h3>cinelerra-cv-bezier</h3>
<blockquote>
<p>
Hermann Vosseler (aka ichthyo) created a patch to get a usable bezier automation for Cinelerra 2.1CV fades, camera and projector. It retains backwards and (partially) upwards compatibility of session files. </p>
<blockquote>
<p><a href="http://ichthyostega.de/cinelerra/bezier-patch/">cinelerra-cv-bezier documentation</a>. </p>
</blockquote>
<p> To get a copy for compilation you can apply the patch yourself or you can download a <a href="http://git.cinelerra.org/gitweb?p=sv/cinelerra.git;a=snapshot;h=48fe05e20e4f9361cf74ac34b2f03405e6f9a969;sf=tgz">snapshot</a> of the patch merged by Simeon Voelkel</p>
 <p><em>We would like to integrate it in CinelerraCV soon. Please, help us with testing!</em></p>
</blockquote>

<h3>cinelerra-cv-core</h3>

<blockquote>
<p>
Einar Rünkaru (aka einarR1) is working with the long-term goal of improving the core fixing bugs and design flaws to get a stronger code, better designed to fit a community development. It's a quite invasive work, that needs a lot of debugging.</p>
	<blockquote>
	<p><a href="http://git.cinelerra.org/gitweb?p=einar/cinelerra.git;a=summary">cinelerra-cv-core repo</a></p>
	</blockquote>
<p> To get a copy for compilation use the following command</p>
 <blockquote>
 <em>git clone git://git.cinelerra.org/einar/cinelerra.git cinelerra-cv-core</em>
 </blockquote>
</blockquote>

<h3>cinelerra-cv-ffmpeg</h3>
<blockquote>
<p>Monty Montgomery (aka xiphmont) wrote an improved version of the FFMPEG-based file reader from CinHV 4.1 so that Cinelerra can read many more file formats. Main changes are:</p>
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
<blockquote>
<p><a href="http://git.xiph.org/?p=users/xiphmont/cinelerraCV.git;a=summary">cinelerra-cv-ffmpeg repo</a></p>
</blockquote>
</blockquote>

<h3>cinelerra-cv-4</h3>
<blockquote>
<p>Simeon Voelkel (aka SimAV) is working on merging the code from Cinelerra 4 (HV)</p>
<blockquote>
<p><a href="http://git.cinelerra.org/gitweb?p=c4/cinelerra.git;a=summary">cinelerra-cv-4 repo</a></p>
 </blockquote>
<p> To get a copy for compilation use the following command</p>
 <blockquote>
 <em>git clone git://git.cinelerra.org/c4/cinelerra.git cinelerra-cv-4</em>
 </blockquote>
 </blockquote>
<h3>cinelerra-cv-4.1</h3>
<blockquote>
<p>Agent Smith worked on merging the code from Cinelerra 4.1 (HV)</p>
<blockquote>
<p><a href="http://git.cinelerra.org/gitweb?p=c4/cinelerra.git;a=summary">cinelerra-cv-4.1 documentation and repo</a></p>
 </blockquote>
<blockquote>
 </div>
 
<address> Last modified on Apr 4, 2011 </address>

<?php include "footer.php"; ?>
 </body>

</html>
