<?php

switch ($linfo["lang"]) {
  default:
  case "EN":
    include("menus/sidemenu.en.htmli");
  break;
  case "ES":
    include("menus/sidemenu.es.htmli");
  break;
  case "EU":
    include("menus/sidemenu.eu.htmli");
  break;
}
?>
