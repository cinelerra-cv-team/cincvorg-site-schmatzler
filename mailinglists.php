<?php


include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>


<div class="content">
 <h1 id="page-heading">Mailing lists and IRC</h1>

  <h2>Our mailing lists</h2>

   <h4>Cinelerra CV</h4>

  <p>We have a mailing list dedicated to development and testing of new
   features, submitting patches, and resolving build problems. <br>
   We offer some handholding to newcomers with build problems and weird bugs, too.
   For real-time handholding, we recommend IRC.
  </p>

  <p>For attachments there is a size limit of 400KB. Messages with bigger attachments will be held waiting for moderator approval.</p>

  <p>
  <em>March 2014: We're moving to a new mailing list, hosted at 
  cinelerra-cv.org: cinelerra@lists.cinelerra-cv.org</em><br>

  There is a web interface for 
  <a href="http://lists.cinelerra-cv.org/cgi-bin/mailman/listinfo/cinelerra">
  subscribing</a>, and a 
  <a href"http://lists.cinelerra-cv.org/pipermail/cinelerra/">
  Web archive</a> that anybody can browse.
  </p>

  <p>
  There is a 
  <a href="https://lists.skolelinux.org/pipermail/cinelerra/">
  web archive of the old mailing list</a> which is being phased out.
  <br>
  The old archives are also avaialble on:  </p>
<ul>
<li><a href="http://e.kevb.net/lurker/list/cinelerra.en.html">Lurker</a>, maintained by Kevin Brosius</li>
<li><a href="http://www.mail-archive.com/cinelerra@skolelinux.no/">The Mail Archive</a></li>
<li><a href="http://dir.gmane.org/gmane.comp.video.cinelerra-cv.general">GMANE</a></li>
</ul>

   <h2>Our IRC channels</h2>

We use the IRC network <a href="http://freenode.net/">Freenode</a>. If you don't know which server to connect to, try <code>irc.freenode.net</code>, port 6667 

    <h4>#cinelerra</h4>
   <p>For development discussion and users support.<br>
    It hosts a mothly meeting every first sunday of the month at 16.00 UTC.<br>
   The channel is logged into a <a href="http://cvs.cinelerra-cv.org/irclog/">web archive</a>.
   </p>

    <h4>#openvideo</h4>
   <p>For general discussion on open source video development and use.<br>
 </p> </div> 

<address>Last modified on Ago 10 2011</address>

<?php include "footer.php"; ?>
   </body> 
</html>
