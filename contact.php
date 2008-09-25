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
     The Cinelerra CV mailing list <br>
     &lt;cinelerra <strong>at</strong> skolelinux.no&gt;
    </li>
   </ul>
 <h2><a name="irc">Internet Relay Chat (IRC)</a></h2>
   <p>We are on the channel <code>cinelerra</code> on <strong>Freenode</strong>.
   If you don't know which server to connect to, try irc.freenode.net, port 6667.
   <br>
   The channel is logged into a <a href="http://cvs.cinelerra.org/irclog/">
   web archive</a>.
   </p>
  </div>
 <address> Last modified on 13 August 2008 </address>
<?php include "footer.php"; ?>
 </body>
</html>
