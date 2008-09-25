<?php 
include "header.php";

include "funcs.php";
include "newsidemenu.php"; 
?>

<div class="content">
<h1>Getting ssh write access</h1>

    <p>If you have several changes to Cinelerra's source code you want to
      contribute, we prefer that you check them in yourself.  You need
      write access to the Subversion to do that.</p>
     <p>To get write access, send an email to <tt>herman@skolelinux.no</tt>,
	including: 

	<ol>
	<li>Your full name</li>
	<li>your preferred contact mail address</li>
	<li>the user name you want</li>
	<li>a password hash (which may be created by for instance 
      <a href="/scripts/cryptit">cryptit</a>)</li>
	</ol>

</div>

<h2><a name="what">What do you get?</h2>

  <p>You get a shell account at <code>skolelinux.org</code>, also known as
  <code>cvs.cinelerra.org</code>.  The home directory shares a couple of
   gigabytes with the other Cinelerra SVN users.
   It'll be almost full most of the time, so be nice!</p>

   <p>You can put stuff on the Web by copying files to the public_html
   directory in your home directory.  The server supports PHP and Perl
   cgi.</p>

</div>


<address>herman at skolelinux no</address>
<?php include "footer.php"; ?>
</body> 
</html>
