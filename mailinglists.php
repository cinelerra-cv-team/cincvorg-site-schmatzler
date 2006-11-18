<?php


include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>


<div class="content">
 <h1>Mailing lists, IRC, and user forums</h1>

  <p>The official Cinelerra project page at Sourceforge has its web-based
   forums, and the unofficial Cinelerra CVS (you are here) has a mailing
   list.</p>

  <h2>Sourceforge forums</h2>

 <p>There are two <a href="http://sourceforge.net/forum/?group_id=13554">
   user forums</a> on Cinelerra's <a href="http://sourceforge.net/projects/heroines/">
   Sourceforge project page</a>.  If you used the official releases from
   <a href="http://heroinewarrior.com/">Heroine Virtual Ltd.</a>, those
   were the appropriate forums.  <em>However, they have been removed from
the Sourceforge project page, so the traffic there has dropped.</em></p>

  <h2>Our mailing lists</h2>

  <p>We have a mailing list dedicated to development and testing of new
   features, submitting patches, and resolving build problems.  We offer
   some handholding to newcomers with build problems and weird bugs, too.
   For real-time handholding, we recommend <a href="contact.html#irc">IRC</a>.
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


  <p>As a convenience to the developers, there is a
  <a href="https://init.linpro.no/pipermail/skolelinux.no/cinelerra-commits/">
   CVS commits mailing list</a>.  Every CVS commit triggers a mail to this
   mailing list.  (Beware: This can generate rather extreme bursts of e-mail!)
   It has the same subscription and web archive interfaces as the developer
   mailing list.  A lurker archive is 
   <a href="http://e.kevb.net/lurker/list/cinelerra-commits.en.html">
   here</a>.</p>

 </div> <!-- end body -->

   <hr>
<address>Kevin Brosius, cobra at compuserve.com</address>
<!-- hhmts start --> Last modified: Sun Jul  30 2006 - update archive links <!-- hhmts end -->

   </body> </html>
