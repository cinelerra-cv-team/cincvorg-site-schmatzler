<?php
function pmd_getlang($availlangs) {
  global $HTTP_ACCEPT_LANGUAGE;
  // Determine the language
  $l3 = array();
  $l1 = explode(";",$HTTP_ACCEPT_LANGUAGE);
  for ($i = 0; $i < sizeof($l1); $i++) {
    $l3 = array_merge($l3,explode(",",$l1[$i]));
  }
  while (list($k,$v) = each($l3))
    if(in_array(strtoupper($v),$availlangs)) {
      $foundlang = strtoupper($v); 
      return(array("lang"=>$foundlang,"found"=>1));
    }

  return(array("lang"=>$availlangs[0],"found"=>0));
}

