<?php 

include "header.php";
include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class='content'>
<h1>Developer's corner</h1>

<h2>The repositories</h2>

<h3>GIT</h3>
Please note: SVN is no longer being used for Cinelerra CV development.<br />
<p>A number of git repos can be browsed at <a href="http://git.cinelerra.org/gitweb/">http://git.cinelerra.org/gitweb/</a><br />
To get a copy of the latest version of the Cinelerra 2.1 CV:<br /> 
git clone git://git.cinelerra.org/j6t/cinelerra.git my_cinelerra</p>
Please write to the mailing list if you would like to get commit access to any of the repos or if you have patches you would like to submit.

<h2>Doxygen documentation</h2>

The source code has been documented using Doxygen.<br>
<blockquote>
<ul>
  <li>Cinelerra 2.0 svn repository:<br>
<a href="http://cinelerra.org/devcorner/doxy/svn_2.0-r707/guicast/html/">
guicast subdirectory</a> <br>
<a href="http://cinelerra.org/devcorner/doxy/svn_2.0-r707/cinelerra/html/">
cinelerra subdirectory</a>.</li></ul>
 <ul> <li>Cinelerra 2.1 svn repository:<br>
<a href="http://cinelerra.org/devcorner/doxy/svn_2.1_r1056/html/index.html">
revision 1056</a></li>
</ul>
</blockquote>

<p>  Thanks to Jens Seidel for suggesting
doxygen, and providing a template configuration file.</p>

<h2>Merging in new releases from Heroines</h2>

<p>Johannes Sixt has written a thorough <a href="/~j6t/cinelerramerge/">
HOWTO</a> describing how he would import Heroines' next Cinelerra release
as a "vendor branch" into the the CVS.</p>

<h2>Summer of code 2007</h2>
<p>
With the hope to get some nice work done, we tried to get into
<a href="http://code.google.com/soc/2007">Google Summer of
Code 2007</a>.<br>
The work planned was noted in a <a href="http://cinelerra.org/soc.php">SOC 2007
table</a>.
</p>
</div> 

<address> Last modified on 8 May 2008 </address>

<?php include "footer.php"; ?>
</body> </html>
