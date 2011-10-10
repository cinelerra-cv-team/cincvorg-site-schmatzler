<?php 

include "header.php";
include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class='content'>
<h1>Developer's corner</h1>

<h2>Cinelerra CV repo</h2>

<p>
The source code of the community Version of Cinelerra is available from a git repository. </p>
<p>To browse the repo just go to the official CinelerraCV <a href="http://git.cinelerra.org/gitweb?p=CinelerraCV.git;a=summary">Gitweb page</a>.</p>

<p>To know more and to get the code go to the <a href="main_repo.php">Main repo page</a>.</p>
<p>If you want to contribute, please read carefully the <a href="main_repo.php">Guidelines</a>. </p>

<h2>Experimental repositories</h2>

<p>Some developers maintain a personal repository. To browse the experimental repositories go to the project <a href="http://git.cinelerra.org/gitweb/">Gitweb page</a>. <br>
Have a look at the <a href="source_code.php">Source code</a> page for a brief description of some of them. </p>

<h2>A short introduction to Cinelerra's source layout</h2>

<p>For a very quick start:</p> 

 <p><strong>Directories:</strong></p>
<ul> 
 <li>guicast - low level gui - direct interaction with X</li>
 <li>cinelerra - the core parts of cinelerra</li>
 <li>plugins - plugins (mostly audio and video effects)</li>
 <li>quicktime, libmpeg3, mpeg2enc - encoders/decoders</li>
</ul>

 <p>The rest can be classified as supporting stuff.</p>

 <p><strong>Some files to start out with:</strong></p>
 <ul>
<li> guicast/{bcwindowbase, bcwindowdraw}.C - base class of all windows</li>
 <li>guicast/thread.C - base class of threads</li>
 <li>guicast/bcsignals.C - signals, debugging helpers</li>
 <li>cinelerra/mwindow{,gui}.C - main (program) window</li>
 <li>cinelerra/cwindow{,gui}.C - composer window</li>
 <li>cinelerra/awindow{,gui}.C - resources window</li>
 <li>cinelerra/vwindow{,gui}.C - viewer</li>
 <li>cnelerra/plugin{,a,v}client.C - base classes for a plugin</li>
</ul>
<p>
 Audio and video are kept in fully separated paths (classes, threads). </p>

<h2>Doxygen documentation</h2>

<p>The source code has been documented using Doxygen.</p>

<blockquote>

 <ul> <li>Cinelerra 2.1 svn repository:<br>
<a href="http://cinelerra.org/devcorner/doxy/svn_2.1_r1056/html/index.html">
revision 1056</a></li>
</ul>

<ul>
  <li>Cinelerra 2.0 svn repository:<br>
<a href="http://cinelerra.org/devcorner/doxy/svn_2.0-r707/guicast/html/">
guicast subdirectory</a> <br>
<a href="http://cinelerra.org/devcorner/doxy/svn_2.0-r707/cinelerra/html/">
cinelerra subdirectory</a>.</li>
</ul>

</blockquote>

<p>  Thanks to Jens Seidel for suggesting doxygen, and providing a template configuration file.</p>

<h2>Bounty</h2>

<p>Some users are so willing to have specific new features in CinelerraCV that they offer some money to developers that are willing to wotk for implementing them. We have summarized requests and offers into a <a href="bounty.php">table.</a></p>

<p>For more information write to the <a href="mailinglists.php">mailing list</a>.</p>

<h2>Google Summer of Code (SOC)</h2>
<p>
With the hope to get some nice work done, we tried to get into <a href="http://code.google.com/soc/2007">Google Summer of Code 2007</a>.<br>
The work planned was noted in a <a href="soc.php">SOC table</a>.
</p>

<h2>Merging in new releases from Heroines</h2>

<p>Johannes Sixt has written a thorough <a href="/~j6t/cinelerramerge/"> HOWTO</a> describing how he would import Heroines' next Cinelerra release as a "vendor branch" into the the CVS.</p>


</div> 

<address> Last modified on Oct 10 2011 </address>

<?php include "footer.php"; ?>
</body> </html>
