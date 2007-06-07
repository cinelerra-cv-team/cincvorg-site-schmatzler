<?php 
include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">
 <h1>Cinelerra GIT - accessing the GIT</h1>
  <p>

  The source code of Cinelerra-CV, although having the primary branch
in a available in a Subversion repository is also available in a git
repository, (distributed SCM).  More information regarding the git repository is available <a href='http://www.pipapo.org/pipawiki/Cinelerra'>here</a>.
  </p>

</body>
</html>
