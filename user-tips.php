<?php 
include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">
<h2>User Tips!</h2>
<p><a name="user_tips"></a>
Malefico Andauer wrote:<br>&lt;<br>
<tt><font color="#737373">I have updated my little script for
converting image</font></tt><tt><font color="#737373"> sequence to
Cinelerra lists, now with TIFF and PNG</font></tt><tt><font
 color="#737373"> support plus some minor changes (interface traslated</font></tt><tt><font
 color="#737373"> to english for your comfort).</font></tt>
<br>&gt;<br>
<br>
<a href="http://argoslabs.com/%7Emalefico/tutor/img2list-en.html">you can find it here.</a> (<a
 href="http://malefico3d.com.ar/tutor/img2list.html">spanish version</a>)<br>
</p>
<p><strong>Peter Semiletov,</strong><br> wrote a program called <em>
<a href="http://www.roxton.kiev.ua/sevengnomes.html ">Seven Gnomes</a></em>.
It is a simple GTK2-based utility
designed to simplify some tasks those useful when people work with
Cinelerra. Seven Gnomes UI is based on drag-and-drop, so to handle
files or directories you can just drop them at the Seven Gnomes
window. Seven Gnomes calls mpeg3toc to index MPEG1/2 files, mencoder
to convert video, and uses GTK functions to create Cinelerra-format
index/toc-files from the sequence of images. No open/save dialogs,
just "drag-and-drop" and few text entries with options. Any ideas
about improvements (about Seven Gnomes, not my English) are welcome! 
</p>
--
<p><strong>Dominic (Dom) C.,</strong><br> wrote an application called bin2cinelerra_header
that convert .png files in png.h (if you want to create new skin for cinelerra you need png.h and not png files). 
Now you can simply create your images and then covert it without problems. enjoy it. :)
</p>
</div>
<hr>
<address>Riccardo Setti, giskard@autistici.org</address>
</body>
</html>
