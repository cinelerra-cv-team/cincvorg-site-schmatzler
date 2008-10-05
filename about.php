<?php

include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">

<h1>Why two versions of Cinelerra?</h1>

<h2>About Cinelerra</h2>

<p>Cinelerra is the most advanced non-linear video editor and compositor for Linux. It is developed by Adam Williams (formerly known as Jack Crossfire) at <a href="http://www.heroinewarrior.com/index.php3">Heroine Virtual Ltd.</a>. 
<br>
To know more see the <a href=" http://www.heroinewarrior.com/cinelerra.php3">official Cinelerra home page</a> and the <a href="http://sourceforge.net/projects/heroines/">SourceForge project page</a>.
</p>
<p>Cinelerra's source code is available under the <a href="http://www.gnu.org/copyleft/gpl.html">GNU General Public License (GPL)</a>.
<br>
However, unlike most large Free Open Source projects, the development of Cinelerra is not open to distributed collaboration and there is no support for the software.
</p>
<p>Cinelerra is tested on Fedora. Cinelerra4 is available also as Ubuntu packages.</p>

<h2>About Cinelerra-CV</h2>

<p> 
<b>CV</b> stands for Community Version. This website is meant to be a community home page for Cinelerra.<br>
We try to complete the amazing work of Heroine Virtual Ltd. (HV) offering also a place for collaborative development and community help.
</p>
<p> This website is primarily focussed on the Cinelerra version that is downloaded via our repository.</p>

<h3>Collaborative development</h3>
<p>
We set up an <a href="http://localhost/cvs/devcorner.php">unofficial git repository</a>, intended for developers and adventurous Linux users who want to contribute to the development of Cinelerra.
</p>
<p>We set up also a <a href="http://localhost/cvs/mailinglists.php">Mailing List</a> where we can share development ideas, comment on each other's implementation of new features, submit patches and resolve build problems.
</p>
<p> Cinelerra-CV is not a fork. We develop it in a direction not diverging from the original and we merge with all the new releases from Heroine Virtual. <br>
We apply our bug fixes, compiler compliance fixes, and enhancements to the git repository. Thus the CV has a number of features that the official version does not have.<br>
Cinelerra CV can be defined as the community's attempt to stabilise HV's release and to add enhancement in a community fashion. </p>
<p>
When there is a new official release, few members (usually just Johannes Sixt) merge HV's code with our code taking the new enhancements from HV, and re-arranging our version to be more similar to the original (whitespace, function naming, directory naming, slight changes in implementations etc).</p>
<p>
New HV releases have often issues in the forms of bugs or usability issues since HV only builds for few distros. After the merge, also the CV version is possibly a little unstable until all the issues with HV's newly added code are fixed (as users find bugs and as time permits to fix them).
</p>
<p>
Adam Williams is a subscriber of our Mailing List and at times he say a few words here or there about our implementations. He picks up some of our patches but not all of the enhancements we develop make it upstream (e.g. render to YUV pipe). In some cases he fixes bugs that we point out and don't get around to fixing. 
</p>



<h3>Community help</h3>

<p>We set up a mailing list and an IRC channel for the community to meet and share tips and help.</p>

This website offers:
<ul> 
<li>a community maintained Manual, translated to many languages</li>
<li>a collection of user contributed tutorials and HOWTOs</li>
<li>a list of useful links for audio/video production</li>
</ul>

<p>The community translated the interface to many languages.</p>

<p>We also like sharing our productions in the Community.</p>

<h2>To know more...</h2>

<p>
<ul>
<li>Talk by Andraz Tori at Pixel5 - Download the video by Herman Robak in  <a
href='http://www.nuug.no/pub/herman/piksel5/andraz_tori_cinelerra_2005.10.21.avi'>High Resolution</a> (368MB) or just the <a
href='media/andraz_tori_cinelerra_2005.10.21.ogg'>Audio Extracted</a>
(11MB).</li>
<li>An <a href='http://www.linuxdevcenter.com/pub/a/linux/2003/12/30/cinelerra.html'>interview with Jack Crossfire </a> (2003).</li>
<li>Mailing list messages: 
<a href='https://init.linpro.no/pipermail/skolelinux.no/cinelerra/2006-April/006012.html'>[1]</a>
<a href='https://init.linpro.no/pipermail/skolelinux.no/cinelerra/2006-January/005042.html'>[2]</a></li>
</ul>
</p>

</div>

<address>Last modified on 20 August 2008</address>
<?php include "footer.php"; ?>
</body>
</html>

