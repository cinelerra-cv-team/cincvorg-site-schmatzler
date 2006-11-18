<?php

include "header.php";

include "funcs.php";

$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);

include "newsidemenu.php";

if (!$linfo["found"]) {
  $footer = "I noticed that your desired language isn't available. you could offer to translate";
  echo $footer;
}

echo "<div class='content'>";
switch($linfo["lang"]) {
  default:
  case "EN":
    include("index_text.en.htmli");
  break;
  case "ES":
    include("index_text.es.htmli");
  break;
  case "EU":
    include("index_text.eu.htmli");
  break;
}
?>
</div>
<!-- End body. -->
<hr>
<address><strong><strong><strong><strong>Riccardo Setti
, giskard at
autistici.org</strong></strong></strong></strong></address>
</body>
</html>
