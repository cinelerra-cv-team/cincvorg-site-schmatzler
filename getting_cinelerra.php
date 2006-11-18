<?php 
include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">
 <h1>Packages</h1>

<h3>
<a href="#livecds">Live CD's</a> |
<a href="#rpm-suse">Suse</a> |
<a href="#rpm-fedora">Fedora</a> |
<a href="#apt-x86">Debian-x86</a> |
<a href="#apt-AMD64">Debian-AMD64</a> |
<a href="#ubuntu">Ubuntu</a> |
<a href="#apt-ppc">Debian PowerPC(g3)</a> |
<a href="#slack">Slackware</a> |
<a href="#source">Source</a>
</h3>

<h2><a name="livecd">Live CD's</a></h2>

<p>Before we scare you away by saying cinelerra only runs on X-based
operating systems only (i.e. NOT MS Windows), it is possible to try
cinelerra out without modifying your computer. This is possible
through the use of Live CDs. Here are some of the Live CD's known to
contain cinelerra</p>

<ul>
<li><a href='http://www.elivecd.org/'>Elive</a> -  debian based live CD using Enlightenment window manager
<li><a href='http://www.dynebolic.org'>dyne:bolic</a> - uses Window Maker window manager.
<li><a href='http://www.mediainlinux.org'>MediainLinux</a> - knoppix based live CD.
<li><a href='http://garbure.org/pho/'>http://garbure.org/pho/</a> - (old??)

</ul>



  <h2><a name="apt">Debian apt sources (Sid)</a></h2>

  <h4><a name="apt-x86">x86 (Intel, AMD, PC compatibles)</a></h4>

<blockquote>
 
 <p>
 x86 Debian packages are built from CVS by Andraz Tori, and hosted at
 <a href="http://www.kiberpipa.org/~minmax/cinelerra/builds/">
 www.kiberpipa.org</a>.<br><br>

  You can add this line to your sources list:<br><br>
  For i386 processors:<br>
  <code>deb http://www.kiberpipa.org/~minmax/cinelerra/builds/sid/ ./</code><br><br>
  For Pentium4 processors:<br>
  <code>deb http://www.kiberpipa.org/~minmax/cinelerra/builds/pentium4/ ./</code><br><br>
  For Athlon processors:<br>
  <code>deb http://www.kiberpipa.org/~minmax/cinelerra/builds/athlonxp/ ./</code><br><br>
   Apt-source:<br>
   <code>deb-src http://www.kiberpipa.org/~minmax/cinelerra/builds/sid/ ./</code><br><br>
  <p>You will need some additional packages not found in Debian's official
   repositories, provided by Christian Marillat:
  <br><br>
  <code>deb http://www.debian-multimedia.org/ sid main</code>
  <p>In order to use the mirror you need to add in your gpg keyring marillat's gpg-key</p>
  <p><code>gpg --keyserver hkp://wwwkeys.eu.pgp.net --recv-keys 1F41B907</code></p>
  <p><code> gpg --armor --export 1F41B907 | sudo apt-key add - </code></p>
  <p>If you don't use sudo, do the following under root :</p>
  <p><code>gpg --armor --export 1F41B907 | apt-key add -</code></p>
  <p>
</blockquote>

 <h4 name="apt-AMD64"> For athlon64 processors</h4>

<blockquote>
  <code>http://labbs.net/~vale/debian</code><br>
  <code>deb http://labbs.net/~vale/debian ./</code><br>
  <code>(source repo coming later...)</code>
</blockquote>

<h4><a name="ubuntu">Ubuntu packages</a></h4>

<blockquote>
 <p>Look at the <a href="http://www.kiberpipa.org/~gandalf/ubuntu/README">
 ubuntu package README</a>.
 
</blockquote>
 
 <h4><a name="apt-ppc">PowerPC (e.g. Macintosh)</a></h4>

<blockquote>

 <p>
   PowerPC Debian packages are built from CVS by <a href="http://www.lamenagerie.com/">La Ménagerie</a>.<br><br>

   You can add this line to your sources list:<br><br>
   PowerPC:<br>
   <code>deb http://garbure.org/debian/ ./</code><br><br>
   PowerPC with AltiVec or Power4 optimisations:<br>
   <i>Not yet</i>
   <p>Yes, we are searching people who can build cinelerra-cv on g4/g5. If you want to contribute but you cannot provide debian packages feel free to mail us/join irc channel.</p>
   <br><br>
   Apt-source:<br>
   <code>deb-src http://garbure.org/debian/ ./</code><br><br>
  <p>You will need some additional packages not found in Debian's official
   repositories, compiled from Christian Marillat sources repository for PowerPC:
  <br>
   <code>deb http://honk.physik.uni-konstanz.de/~agx/linux-ppc/debian/ mplayer/</code>
  </p>

</blockquote>

  <hr>

<h2><a name="rpm">RPMs</a></h2>
<h4><a name="rpm-fedora"> Fedora</a></h4>
<blockquote>
<p>Supret Sethi provides <a href="http://supreetsethi.net/drupal/?q=node/19">redhat/fedora</a> packages 
for cinelerra-cv kudos to him (thanks also to jaromil (dyne:bolic) for hosting the packages)</p>
<p>
</blockquote>

<h4><a name="rpm-suse">Suse 9.0, 9.2 and SRPMs</a></h4>
<blockquote>
RPMs for SuSE 9 are built from CVS by Kevin Brosius, and hosted at
<a href="http://cin.kevb.net/files/RPM/">kevb.net</a>.
</blockquote>

<h2><a name="slack">Slackware</a></h2>

 Rafael Diniz  build slackware packages for cinelerra 2.1.

<h4>For x86</h4>

<a href="http://slack.sarava.org/packages/slackware/slackware-11.0/multimedia/">
http://slack.sarava.org/packages/slackware/slackware-11.0/multimedia/</a>

<h4>For slackintosh</h4>

<a href="http://slack.sarava.org/packages/slackintosh/slackintosh-11.0/multimedia/">
http://slack.sarava.org/packages/slackintosh/slackintosh-11.0/multimedia/</a>



<p>
<h2><a name="source">Source code</a></h2>

<p>Everybody can retrieve source code
from the SVN, and project members can check in changes into the SVN. If
you have code you want to contribute, you can get SVN write access.</p>
<p>You can use anonymous svn to retrieve
the source code. Just follow <a href="svnusage.php#anon">the
quick instructions</a>.
<p>If you want write access to the
Subversion, follow the <a href="svnwrite.html">instructions
for generating a password hash</a>,
and mail <em>herman at
skolelinux.no</em>, to tell us what
you'd like to contribute.</p>

 </div>
<hr>
<address>Riccardo Setti, giskard at autistici.org</address>
 
 </body>

</html>
