<?php 
include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">
 <h1>Get old Cinelerra packages on old distro</h1>

<h3>
<a href="#apt">Debian</a> |
<a href="#ubuntu">Ubuntu</a> 
</h3>

<p>More detailed instructions for every distrubution can be found in the <a href="http://cv.cinelerra.org/docs/wiki/doku.php?id=english_manual:cinelerra_cv_en_2">Manual</a>.
<br>
</p>

<h3><a name="apt">Debian</a></h3>

<h4>
<a href="#apt-x86">x86</a> |
<a href="#apt-AMD64">Athlon64</a> |
<a href="#apt-ppc">PowerPC</a> 
</h4>

<h4><a name="apt-x86">x86 (Intel, AMD, PC compatibles)</a></h4>

<blockquote>
<p>
To install the package add one of the following lines to your sources list:<br><br>
For i386 processors, by Valentina Messeri:<br>
<code>deb http://giss.tv:8000/debian32 ./</code><br><br>
For i386 processors, by Andraz Tori:<br>
  <code>deb http://www.kiberpipa.org/~minmax/cinelerra/builds/sid/ ./</code><br><br>
  For Pentium4 processors, by Andraz Tori:<br>
  <code>deb http://www.kiberpipa.org/~minmax/cinelerra/builds/pentium4/ ./</code><br><br>
  For Athlon processors, by Andraz Tori:<br>
  <code>deb http://www.kiberpipa.org/~minmax/cinelerra/builds/athlonxp/ ./</code><br><br>
   Apt-source, by Andraz Tori:<br>
   <code>deb-src http://www.kiberpipa.org/~minmax/cinelerra/builds/sid/ ./</code><br><br>
  You will need some additional packages not found in Debian's official
  repositories, provided by Christian Marillat: <br>
  <code>deb http://www.debian-multimedia.org/ sid main</code><br><br>
  In order to use the mirror you need to add in your gpg keyring marillat's
gpg-key <br> 
  <code>gpg --keyserver hkp://wwwkeys.eu.pgp.net --recv-keys 1F41B907</code><br>
  <code> gpg --armor --export 1F41B907 | sudo apt-key add - </code><br><br>
  If you don't use sudo, do the following under root :<br>
  <code>gpg --armor --export 1F41B907 | apt-key add -</code>
</p>
</blockquote>

 <h4><a name="apt-AMD64"> For athlon64 processors</a></h4>

<blockquote>
AMD64 Debian packages are built by Valentina Messeri. <br>
To install the package add this line to your sources list: <br>
  <code>deb http://giss.tv/~vale/debian64 ./</code><br><br>
Apt-source:<br>
  <code>deb-src http://giss.tv/~vale/debian64 ./</code>

</blockquote>

 <H4><a name="apt-ppc">PowerPC (e.g. Macintosh)</a></h4>

<blockquote>
 <p>
   PowerPC Debian packages are built from CVS by <a href="http://www.lamenagerie.com/">La Ménagerie</a>.<br>

   You can add this line to your sources list:<br><br>
   PowerPC:<br>
   <code>deb http://garbure.org/debian/ ./</code><br><br>
   PowerPC with AltiVec or Power4 optimisations:<br>
   <i>Not yet</i><br>
   Yes, we are searching people who can build cinelerra-cv on g4/g5. If you want
to contribute but you cannot provide debian packages feel free to mail us/join
irc channel. <br><br>
   Apt-source:<br>
   <code>deb-src http://garbure.org/debian/ ./</code><br><br>
  You will need some additional packages not found in Debian's official
   repositories, compiled from Christian Marillat sources repository for PowerPC:
  <br>
   <code>deb http://honk.physik.uni-konstanz.de/~agx/linux-ppc/debian/ mplayer/</code>
  </p>
</blockquote>

<h3><a name="ubuntu">Ubuntu</a></h3>

<H4>giss.tv</a></h4>
<p><em>Cinelerra CV for 8.04 Hardy Heron, for i386 (not working on amd 32 bits), maintained by by Valentina Messeri</em></p>
<blockquote>
<code>deb http://giss.tv/~vale/ubuntu32/hardy ./</code>
</blockquote>

 </div>
 
<address> Last modified on Apr 2, 2011 </address>

<?php include "footer.php"; ?>
 </body>

</html>
