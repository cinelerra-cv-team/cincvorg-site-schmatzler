<?php 
include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">
 <h1>Cinelerra SVN - accessing the SVN</h1>
  <p>
  The source code of Cinelerra-CV is available from a Subversion repository. 
  Subversion is available from subversion.tigris.org, but most likely your 
  distribution has prebuilt packages.
  Complete documentation of subversion is available at
  http://svnbook.red-bean.com/nightly/en/index.html.
  </p>

 <h2>Checking out a read-only working copy</h2>
  <p>
  To check out the most up-to-date version, use this command:<br><br>
  <code>svn checkout svn://svn.skolelinux.org/cinelerra/trunk/hvirtual</code><br><br>
  This will create a directory hvirtual that contains the working copy.
  It requires ~170MB disk space.<br>
  You can modify this working copy, if you want to (e.g. if you fix a problem), 
  but you cannot check your modifications back in. Developers, see below.
  </p>

<p>Once you have checked out, you probably will need to run
<code>./autogen.sh</code> in the hvirtual directory to generate the
<code>./configure</code> file and that sorta thing. Most of the
missing dependencies should be listed after running <code>./configure</code>, (and
the rest can be somewhat worked out from the compile error message you
get.)  </p>

<p>
  If you want to check out an older version, use this command:<br><br>

<code>svn checkout svn://svn.skolelinux.org/cinelerra/tags/r1_2_2-last/hvirtual</code><br><br>

You need to checkout only once. If you want to bring an outdated working copy 
  up-to-date, use this command:<br><br>
  <code>cd hvirtual</code><br>
  <code>svn update</code>
  </p>
 
 <h2>Web based views of SVN.</h2>
<p>I know, you're on holidays at a kiosk machine, and are amping to see if
any changes have occured in the community version of your favourite video editing software, but only wish you had console access to run 'svn log', No??
Well if so, then have we've got the tools for you! You can actually see a <a href='svn_log.php'>nicely integrated view of the commits</a> or 
<a href='http://svn.skolelinux.no/websvn/listing.php?repname=cinelerra&path=/trunk/hvirtual/'>the boring websvn</a> view to actually see the files themselves.
</p>

 <h2>Subversion for Developers</h2>
  <p>
  To get the head version use this:<br><br>
  <code>svn checkout svn+ssh://j6t@svn.skolelinux.org/repos/cinelerra/trunk/hvirtual</code><br>
  You need an <a href="svnwrite.php">ssh account on user.skolelinux.org</a> for this. Substitute your 
  login in place of j6t.

  <p>
  <strong>NOTE:</strong> You may have to type your password more than once,
  since svn+ssh opens more than one connection.  If you see the 
 <code>Password:</code> prompt again two times, it is <em>not necessarily</em>
 because you typed the wrong password.

  <p>
  In the following, it is assumed that you are inside the top-level directory of 
  the working copy (which is named hvirtual).<br>
  Now you can make modifications. When you are done, you first have to make sure 
  your working copy is up-to-date:<br><br>
  <code>svn update</code><br><br>
  This merges the latest version from the repository into your working copy.
  You will not be able to commit if there were conflicts. Resolve them first in 
  the code and notify subversion that you have done so:<br><br>
  <code>svn resolve foo.C</code>
  </p>
  <p>
  (Note that you have to explicitly name the files whose conflicts you have 
  resolved.)<br>
  Now do a final check that you are not going to commit unwanted remnants like 
  debugging printfs:<br><br>
  <code>svn diff</code><br><br>
  Now you are ready to commit:<br><br>
  <code>svn commit</code>
 
 <h2>A word about commits</h2>
  <p>
  Please solve only one problem per commit. Don't mix unrelated problems in one 
  commit, if possible. If you have solved more than one problem in your working 
  copy, you can create copies of your working copy, then revert some of the 
  changes in one of the copies and commit from there, then update the other 
  copies.
  </p>
  <p>
  Please make your commit messages descriptive.<br>
  Be verbose.<br>
  </p>
  <p>
  Please be careful that your commit covers everything that belongs to the 
  solution of the problem, if at all possible, so that you don't have to 
  follow-up another commit. Use svn diff.
  Please do not commit cleanups of any kind. (Since this makes merging upstream 
  versions much more difficult.)
  </p>
 </div>
<hr>
<address>Riccardo Setti, giskard at autistici.org</address>
</body>
</html>
