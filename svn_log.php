<?php 
include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 

echo "<div class='content'>";

/* possibly server crahing code!
if (isset($_GET["viewpatch"])) {
  $pn = intval($_GET["viewpatch"]);

	echo "
<a href='svn_log.php?viewpatch=".($pn-1)."'>".($pn-1)."</a>
<a href='svn_log.php?viewpatch=".($pn+1)."'>".($pn+1)."</a>
";
   $svncommand = "svn diff -r ".($pn-1).":".($pn)." svn://svn.skolelinux.org/cinelerra/trunk/hvirtual; ";
  echo "<h2>patch #$pn</h2>";
echo "<pre>";
 passthru("svn log -r ".$pn." svn://svn.skolelinux.org/cinelerra/trunk/hvirtual;");
	
echo "</pre>";
echo "<p><b>Note:</b> this page displays the result of executing the command:<p><p style='font-family:courier'>$svncommand</p>

<p>Which you can execute from your command line.  Also, you can perform many more functions, using svn from the command line. Certain keywords $hkeywords are also underlined to possibly give an indication to what each commit is about.</p>
";
echo "<pre>";
passthru($svncommand);
echo "</pre>";
  exit();
}
*/
?>

<h1>SVN Commit History</h1>
<?php
echo "<b>Select:</b> "
 ."<a href='?rev=2_1'>[2.1CV]</a> "
 ."<a href='?rev=2_0merge2_1'>[2.1 merge]</a> "
 ."<a href='?rev=2_0until2_1'>[2.0 to 2.1]</a> "
 ."<a href='?rev=1_2_2until2_0'  >[1.2.2 - 2.0]</a> "
 ."<a href='?rev=1_2_1until1_2_2'>[1.2.1 - 1.2.2]</a> "
 ."<a href='?rev=1_1_9until1_2_1'>[1.1.9 - 1.2.1]</a> "
 ."<a href='?rev=1_1_8until1_1_9'>[1.1.8 - 1.1.9]</a> "
 ."<a href='?rev=until1_1_8'>[start - 1.1.8]</a> "
 ."<a href='?rev=all'>[All]</a> "
 ."";

  switch ($_GET["rev"]) {
    case "all":
      $rstring = "";
      $titletext = "<h2>All SVN entries</h2>";
    break;
    case "until1_1_8":
      $rstring = "-r 137:1"; 
      $titletext = "<h2>Start of SVN repository to 1.1.8 merger.</h2>";
    break;
    case "1_1_8until1_1_9":
      $rstring = "-r 200:137"; 
      $titletext = "<h2>1.1.8 to 1.1.9 merger.</h2>";
    break;
    case "1_1_9until1_2_1":
      $rstring = "-r 373:200"; 
      $titletext = "<h2>1.1.9 to 1.2.1 merger.</h2>";
    break;
    case "1_2_1until1_2_2":
      $rstring = "-r 507:373"; 
      $titletext = "<h2>1.2.1 to 1.2.2 merger.</h2>";
    break;
    case "1_2_2until2_0":
      $rstring = "-r 665:507"; 
      $titletext = "<h2>1.2.2 Community Version Commits.</h2>";
    break;
    case "2_0until2_1":
      $rstring = "-r 836:665"; 
      $titletext = "<h2>2.0 Community Version Commits.</h2>";
    break;	
    case "2_0merge2_1":
      $rstring = "-r 871:837"; 
      $titletext = "<h2>2.1 Merger.</h2>";
    break;
    case "2_0CV":
    default:
      $rstring = "-r HEAD:872"; 
      $titletext = "<h2>2.1 Community Version Log</h2>";
    break;
  }

  $svncommand = "svn log $rstring svn://svn.skolelinux.org/cinelerra/trunk/hvirtual";

$hkeywords = "(Fix|Add|Merge|remove|nice|Clear|Clean|drop|replace|convert|reverse|patch)";

echo "<p><b>Note:</b> this page displays the result of executing the command:<p><p style='font-family:courier'>$svncommand</p><p>Which you can execute from your command line.  Also, you can perform many more functions, using svn from the command line. Certain keywords $hkeywords are also underlined to possibly give an indication to what each commit is about.</p>

<p>The SVN repository is also mirrored in a git repository that has a git-web front end that can be viewed at <a href='http://www.pipapo.org/gitweb?p=cinelerra/svn;a=log'>http://www.pipapo.org/gitweb?p=cinelerra/svn;a=log</a>.

";
?>
<pre style='font-size:12;margin-left:2em'>
<?php

  echo $titletext;

//  passthru($svncommand);
  $fh = popen($svncommand,'r');
  while(!feof($fh)) {
    $line = fgets($fh,4096);

    $line = preg_replace("/(Bugs) *(|#) *(\d+) (&|and) *(|#) *(\d+)/i","\\1 "
."<a href='http://bugs.cinelerra-cv.org/show_bug.cgi?id=\\3'> \\2 \\3</a> \\4 "
."<a href='http://bugs.cinelerra-cv.org/show_bug.cgi?id=\\6'> \\5 \\6</a>"
,$line);
    $line = preg_replace("/(Bug |Bug #)(\d+)/i","<a href='http://bugs.cinelerra-cv.org/show_bug.cgi?id=\\2'>\\1 \\2</a>",$line);
    $line = eregi_replace($hkeywords,"<b><u>\\1</u></b>",$line);	
    if (preg_match("/----+/i",$line,$m))
      echo "<hr/>";
    else 
    {	
      $line = wordwrap($line,100,"\n");
//	$line = preg_replace("/r(\d+) \|/","<a href='svn_log.php?viewpatch=\\1'>[view patch]</a> r\\1 |",$line);

      echo $line;
    }
  }
  pclose($fh);
?>
</pre>
</div>
