<?php

include "header.php";


include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">

<h1>Why two versions of Cinelerra?</h1>

<p>Cinelerra is one of the most advanced, open-source non-linear video editors and compositors for Linux.</p>
<p>Users are frequently confused about the fact that two separately maintained versions of this software exist.</p>
<p><b>We are not affiliated with cinelerra.org.</b> If you're interested - here's why:</p>
<br />

<h2>About Cinelerra-HV and cinelerra.org</h2>

<p>Cinelerra was originally developed by Adam Williams (formerly known as Jack Crossfire) at <a href="http://www.heroinewarrior.com/index.php">Heroine Virtual Ltd.</a> This is what the HV stands for.</p>
<p>Unlike most of the free Open Source projects, the development of Cinelerra-HV wasn't open to distributed collaboration and there was no support for the software.</p>
<p>Every few months a release was made on <a href="http://sourceforge.net/projects/heroines/">SourceForge</a> and occasionally, Adam Williams stopped by at our mailing list.</p>
<p>This slightly changed around March 2014 when we overlooked the renewal of <a href="cinelerra.org">cinelerra.org</a>. The domain was then taken over by Michael Collins, who started working on his own version of Cinelerra. Unlike us, cinelerra.org is following commercial interests. Little to no effort has been made to contact our community in a friendly way.</p>
<br />

<h2>About Cinelerra-CV</h2>

<p><b>CV</b> stands for <b>C</b>ommunity <b>V</b>ersion. This website was originally meant to be a community for Cinelerra-HV, where users could come together to get help or work on improving the original software.</p>
<p>As time passed by, we've implemented features on our own that are not yet present in the original version.</p>
<p>Cinelerra-CV primarily focusses on stability of the software. Rather than implementing the latest cutting-edge technology, new features of the software are tested for a while.</p>
<p>Patches from the community have to be a approved by a core developer.</p>
<br />

<h2>To know more...</h2>

<p>
<ul>
<li>An <a href='http://www.linuxdevcenter.com/pub/a/linux/2003/12/30/cinelerra.html'>interview with Jack Crossfire </a> (2003).</li>
<li>Mailing list messages:
  <ul>
    <li><a href="https://lists.skolelinux.org/pipermail/cinelerra/2006-April/006012.html">[1] Heroine Virtual getting in touch with the CV community</a></li>
    <li><a href="https://lists.skolelinux.org/pipermail/cinelerra/2014-March/019473.html">[2] Michael Collins announcing the relaunch of cinelerra.org</a></li>
    <li><a href="http://lists.cinelerra-cv.org/pipermail/cinelerra/2014q2/000044.html">[3] The history of Cinelerra development</a></li>
  </ul>
</ul>
</p>

</div>

<address>Last modified on Sep 5, 2015</address>
<?php include "footer.php"; ?>
</body>
</html>

