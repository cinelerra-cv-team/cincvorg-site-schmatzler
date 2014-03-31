<?php 
include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">
<h2>E-mail</h2>
 <ul>
    <li>
     The Cinelerra CV mailing list has moved from skolelinux.no! <br>
     The new e-mail address is: 
     &lt;cinelerra <strong>at</strong> lists.cinelerra-cv.org&gt;
    </li>
   </ul>
 <h2><a name="irc">Internet Relay Chat (IRC)</a></h2>
   <p>We are on the channel <code>cinelerra</code> on <strong>Freenode</strong>.
   If you don't know which server to connect to, try irc.freenode.net, port 6667.
   <br>
   The channel is logged into a <a href="http://irclog.cinelerra-cv.org/">
   web archive</a>.
   </p>
  </div>
 <address> Last modified on March 31st 2014 </address>
<?php include "footer.php"; ?>
 </body>
</html>
