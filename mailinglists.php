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
   features, submitting patches, and resolving build problems. <BR>
   We offer some handholding to newcomers with build problems and weird bugs, too.
   For real-time handholding, we recommend IRC.
  </p>

  <p>There is a web interface for
  <a href="https://init.linpro.no/mailman/skolelinux.no/listinfo/cinelerra">
  subscribing</a>, and a
  <a href="https://init.linpro.no/pipermail/skolelinux.no/cinelerra/">Web
  archive</a> that anybody can browse.
  <br>
  Kevin Brosius maintains
  <a href="http://e.kevb.net/lurker/list/cinelerra.en.html">
  a nicer looking archive</a>, using
  <a href="http://lurker.sourceforge.net/">Lurker</a>.
  It has a search function.
  </p>

   <h4>Cinelerra SVN commits</h4>

  <p>As a convenience to the developers, there is a SVN commits mailing list.
   Every SVN commit triggers a mail to this
   mailing list. <BR>
   (Beware: This can generate rather extreme bursts of e-mail!)
  </p>
   
  <P>It has the same <a
href="https://init.linpro.no/mailman/skolelinux.no/listinfo/cinelerra-commits">
  subscription</a> and <a href="https://init.linpro.no/pipermail/skolelinux.no/cinelerra-commits/">
   web archive</a> interfaces as the developer mailing list.  A Lurker archive is 
   <a href="http://e.kevb.net/lurker/list/cinelerra-commits.en.html">
   here</a>.</p>

   <h2>Our IRC channels</h2>

We use the IRC network <a href="http://freenode.net/">Freenode</a>. If you don't know which server to connect to, try <code>irc.freenode.net</code>, port 6667 
    <h4>#cinelerra</h4>
   <p>For development discussion and users support.<br>
   The channel is logged into a <a href="http://cvs.cinelerra.org/irclog/">web archive</a>.
   </p>
 <h4>#openvideo</h4>
   <p>For general discussion on open source video development and use.<br>
 </p> </div> 

<address>Last modified on 8 August 2008</address>

<?php include "footer.php"; ?>
   </body> </html>
