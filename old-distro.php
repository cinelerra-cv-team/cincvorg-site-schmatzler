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
<a href="#fedora">Fedora</a> |
<a href="#suse">Suse</a> |
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

<h3><a name="fedora">Fedora</a></h3>

<blockquote>
<p>
Cinelerra is included in the <a href="http://freshrpms.net" >Freshrpms</a> repository but 
the package collection of Freshrpms may conflict with other third-party repositories such as Livna.<br>
Cinelerra is available also in the kwizart repository that, on the contrary, is compatible with Livna.</p>
</blockquote>

<h4>Fedora 10</h4>

<blockquote>
<p>You can find cinelerra packages in the kwizart repository.
</p>
<p> If you want to compile CinelerraCV from source you can find detailed instructions for Fedora 10, x86-64 on <a href="http://crazedmuleproductions.blogspot.com/2009/02/fedora-10-x86-64-cinelerra-build.html">Crazed Mule's blog</a>.</p>
</blockquote>

<h4>Fedora 9</h4>

<blockquote>
<p>To install Cinelerra from kwizart repository (x86 and x86_64) do: <br>
<code>
su -<br>
rpm -ivh http://rpm.livna.org/livna-release-9.rpm<br>
rpm -ivh http://rpms.kwizart.net/kwizart-release-9.rpm<br>
yum install cinelerra --enablerepo=kwizart<br>
</code></p>
</blockquote>
<blockquote>
<p>Tips:<br>
1 - This package tweaks the kernel.shmmax value in /etc/sysctl.conf so there is no need for you to modify it.<br>
2 - This version points to the system fonts path in
/usr/share/fonts (instead of /usr/lib(64)/cinelerra/fonts).<br>
This is needed for the title plugin. It needs fonts.dir (which is usually deprecated) to be regenerated. <br>
You can do:<br>
<code>
yum install ttmkfdir xorg-x11-font-utils </code><br>
and then in each subdirectories of /usr/share/fonts that you want
to be seen by the title plugin, so for example:<br>
<code>
cd /usr/share/fonts/<subdir><br>
ttmkfdir && mkfontdir
</code></p>
</blockquote>

<h4><a name="fedora8">Fedora 8</a></h4>

<blockquote>
<p>To install Cinelerra from kwizart repository (x86 and x86_64) do:<br>
<code>
su -<br>
rpm -ivh http://rpms.kwizart.net/kwizart-release-8.rpm<br>
yum install cinelerra --enablerepo=kwizart</code><br>.</p>
</blockquote>
<blockquote>
<p>Tips:<br>
1 - This package tweaks the kernel.shmmax value in /etc/sysctl.conf so there is no need for you to modify it.<br>
2 - The fonts tweak for Fedora 9 is not available for Fedora 8. You need
to copy your fonts to /usr/lib(64)/cinelerra/fonts and regenerate
fonts.dir.</p>
</blockquote>

<h4><a name="fedora567">Fedora 5, 6 and 7</a></h4>
<blockquote>
<p>The easiest way to
install packages from Freshrpms is to include the repository in the <B>yum</B>
configuration.<BR>
Also make sure that the Fedora Extras repository is enabled.  This is the case
by default on Fedora 5 and 6, and Core and Extras are merged into one since Fedora 7.<BR><BR>
On Fedora 6, as the user root do:<BR>
<code>rpm -ivh http://ftp.freshrpms.net/pub/freshrpms/fedora/linux/6/freshrpms-release/freshrpms-release-1.1-1.fc.noarch.rpm</code><BR><BR>
On Fedora 5, do:<BR>
<code>rpm -ivh http://ftp.freshrpms.net/pub/freshrpms/fedora/linux/5/freshrpms-release/freshrpms-release-1.1-1.fc.noarch.rpm</code><BR><BR>
Then type:<BR>
<code>yum -y install cinelerra</code><BR></p>
</blockquote>

<h3><a name="suse">Suse</a></h3>

<h4><a name="suse">Suse 9.0, 9.2 and SRPMs</a></h4>
<p>
<p>RPMs for SUSE 9 are built from CVS by Kevin Brosius, and hosted at
<a href="http://cin.kevb.net/files/RPM/">kevb.net</a>.
</p> 
</blockquote>

<h3><a name="ubuntu">Ubuntu</a></h3>

<p>Cinelerra CV for 8.04 Hardy Heron, for i386 (not working on amd 32 bits), maintained by by Valentina Messeri</p>
<blockquote>
<code>deb http://giss.tv/~vale/ubuntu32/hardy ./</code>
</blockquote>

 </div>
 
<address> Last modified on Apr 2, 2011 </address>

<?php include "footer.php"; ?>
 </body>

</html>
