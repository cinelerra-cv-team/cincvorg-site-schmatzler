<?php


include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>


<div class='content'>
<!--
<p style="background-color: #EBEBEB; border-style: solid; border-width: 1px; text-align: center; font-size: larger; padding: 20px">
<strong>SITE</strong> <strong style="color: red">ADMIN</strong> <strong>WANTED</strong><br>
Volunteers, please contact the <a href="https://init.linpro.no/mailman/skolelinux.no/listinfo/cinelerra">Cinelerra mailing list</a>.
<br>
</p>
-->
<br>

<h2><a name="news">News</a></h2>

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

<p>
<strong>October 1-2, 2010</strong><br>
* The CinelerraCV community is at the <a href="http://openvideoconference.org/">Openvideo Conference</a> in New York.
</p>

<p>
<strong>April 19, 2010</strong><br>
* CinelerraCV will be at the <a href="http://ctfilmfest.com/">Connecticut Film Festival</a> - Danbury CT on May 7 2010. The festival will pay a special attention to Free Software with dedicate talks and workshops. Scott Frase will represent the community doing a <a href="http://ctfilmfest.com/site/node/43">presentation on Video production using Free Software tools</a>.
</p>

<p>
<strong>Dec 6, 2009</strong><br>
* The migration of our bugtracker from skolelinux.no to cinelerra.org is completed, thanks to the precious help of Cillian De Roiste. We moved also from Bugzilla to Trac. 
The bugtracker address is still <a href="http://bugs.cinelerra.org/">http://bugs.cinelerra.org/</a>; log-in details are unchanged.
</p>

<hr>

<p><a href="oldnews.php">Older news...</a></p>
</div>

<address>Last modified on 22 November 2010</address>

<?php include "footer.php"; ?>
</body>
</html>
