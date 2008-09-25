<?php


include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>


<div class='content'>
<h2><a name="Migration">Migration Status</a></h2>

<p>
<i>Web pages</i> have moved to IP 78.47.64.243 (the new cinelerra.org). <br>
Logging in on user.skolelinux.no to edit the web site will no longer work
as the pages are no longer served from there.  <br> 
</p>
<p> 
The <i>SVN repository</i> is still hosted at svn.skolelinux.no.
</p>
<p>
The <i>IRC log</i> has moved to cinelerra.org. <br>
Thanks to Cillian De Roiste we have now a nice and working web archive.
</p>
<p>
<i>Dokuwiki</i> has moved to cinelerra.org. <br>
Registering of new user accounts is now active.
</p>
<p>
The <i>git repository</i> in 12 hour sync with the cinelerra svn, maintained at pipapo.org, is still stuck at revision 1053. A complete move from SVN to GIT is planned.
</p>
<p>
<i>Bugzilla</i> (bugs.cinelerra.org) will be moved later.
<p> 
</div>
<address>Last modified on 12 August 2008</address>

<!-- End body. -->
<?php include "footer.php"; ?>
</body>
</html>


