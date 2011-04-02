<?php 
include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">
 <h1>Get Cinelerra</h1>
<h3>
<a href="#livecd">Live CDs</a> |
<a href="#packages">Packages</a> |
<a href="source_code.php">Source code</a>
</h3>

<h2><a name="livecd">Live CDs</a></h2>

<p>You can try Cinelerra out without modifying your computer, thanks to Live DVDs that contain Cinelerra. <br />
You just need to download the .iso file, burn it on a DVD, inser it in the drive and restart your machine.</p> 
 
<ul> 
<li><a href='http://www.dynebolic.org'>dyne:bolic</a> -  for multimedia production -uses Window Maker window manager</li> 
<li><a href='http://www.bandshed.net/AVLinux.html'>AVLinux</a> - based on Debian, with LXDE by default and an optional XFCE - contains Cinelerra 4.2HV</li> 
<li><a href='http://artistx.org'>ArtistX</a> - based on Ubuntu 10.04, Gnome or KDE, for multimedia</li> 
<li><a href='http://venenux.org/'>Venenux 0.8 RC2</a> - Debian based - (note: version EC 0.8.2 has not CinelerraCV in it)</li> 
<li><a href='http://www.elivecd.org/'>Elive</a> -  debian based live CD using Enlightenment window manager</li> 
<li><a href='http://musix.org.ar'>Musix</a> (2009) - Knoppix based - for audio production, graphic design and video editing</li> 
<li><a href='http://dl.getdropbox.com/u/331020/Mindmap/index.html'>openArtist</a> (2009) - based on Ubuntu Hardy, for artists</li> 
<li><a href='http://garbure.org/pho/'>pho (garbure)</a> (2004) - dedicated to video editing</li> 
</ul> 

 <h2><a name="packages">Packages</a></h2>

<h3>
<a href="#arch">Arch Linux</a> |
<a href="#ark">Ark Linux</a> |
<a href="#apt">Debian</a> |
<a href="#fedora">Fedora</a> |
<a href="#gentoo">Gentoo</a> |
<a href="#mandriva">Mandriva</a> |
<a href="#slack">Slackware</a> |
<a href="#suse">Suse</a> |
<a href="#ubuntu">Ubuntu</a> 
</h3>

<p>More detailed instructions for every distrubution can be found in the <a href="http://cv.cinelerra.org/docs/wiki/doku.php?id=english_manual:cinelerra_cv_en_2">Manual</a>.
<br>
</p>

<h3><a name="arch">Arch Linux</a></h3>

<blockquote>
<p> 
Cinelerra CV is included in the Arch Linux community repository. To install 
the "cinelerra" package enable the community repository first (See the <a
href='http://wiki.archlinux.org/index.php/AUR_User_Guidelines'>User
Guidelines</a> for more info), then run the following command from the command line: <BR>
<code>pacman -Sy cinelerra-cv</code> 
</p>
</blockquote>

<h3><a name="ark">Ark Linux</a></h3>

<blockquote>
<p> 
Cinelerra CV is included in the Ark Linux package repository. Install 
the "cinelerra" package using the "Install Software" tool in Mission Control, 
or run the following commands from a command line: <BR>
<code>apt-get update <BR>
apt-get install cinelerra</code> .
</p>
</blockquote>

  <h3><a name="apt">Debian</a></h3>

<blockquote>
<p>Both CinelerraCV 2.1.0 and CinelerraHV 4.2 packages are available from <a href="http://debian-multimedia.org/">Debian-multimedia</a>.<br />
Older packages are available too. See the <a href="old-distro.php">old packages</a> page.</p>
</blockquote>

<h3><a name="gentoo">Gentoo</a></h3>

<blockquote>
<p>Installation for Gentoo GNU/Linux is very straight forward. Simply type: <BR>
<code>emerge cinelerra</code><BR>
as root and it should install and run without any problems. <BR>
Note that you may need to put cinelerra in your `/etc/portage/package.keywords'
file in order to unmask it:<BR>
<code>echo "media-video/cinelerra ~x86" >> /etc/portage/package.keywords </code><BR>
See the <a href='http://www.gentoo.org/doc/en/handbook/handbook-x86.xml?part=3&chap=3'>Handbook</a> 
for details. <BR>
More informations can be found in the <a
href='http://cvs.cinelerra.org/docs/split_manual_en/cinelerra_cv_manual_en_2.html#SEC25'>Manual</a>.</p>
</blockquote>

<h3><a name="fedora">Fedora</a></h3>
<p>
<p>Cinelerra is not available in the default Fedora repositories.<br>
Cinelerra is included in the <a
href="http://freshrpms.net" >Freshrpms</a> repository but 
the package collection of Freshrpms may conflict with other third-party repositories such as Livna.<br>
Cinelerra is available also in the kwizart repository that, on the contrary, is compatible with Livna.<br></p>
</blockquote>

<h4><a name="fedora9">Fedora 9</a></h4>

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


<h3><a name="mandriva">Mandriva</a></h3>
<p>
<blockquote>
Cinelerra packages for Mandriva made by PLF are ready to install. See the <a
href='http://plf.zarb.org/packages.php'>PLF</a> site for more information.
</blockquote>
</p>

<h3><a name="slack">Slackware</a></h3>
<blockquote>
 Rafael Diniz  build slackware packages for cinelerra 2.1.
<h4>For x86</h4>

<strong>(Broken link)</strong>
<a href="http://slack.sarava.org/packages/slackware/slackware-11.0/media/video/">
http://slack.sarava.org/packages/slackware/slackware-11.0/media/video/
</a>
<h4>For slackintosh</h4>
<a href="http://slack.sarava.org/packages/slackintosh/slackintosh-11.0/multimedia/">
http://slack.sarava.org/packages/slackintosh/slackintosh-11.0/multimedia/</a>
</blockquote>


<h3><a name="suse">Suse</a></h3>
<h4>Suse 10.1 & 10.2</h4>
<blockquote>
RPMs for openSUSE 10.1 and 10.2 are now in the
<a href="http://packman.links2linux.org/package/cinelerra">Packman</a>
repositories.  You can install directly with Yast if you have Packman
configured as a Yast install source.
</blockquote>

<h4><a name="suse">Suse 9.0, 9.2 and SRPMs</a></h4>
<blockquote>
RPMs for SuSE 9 are built from CVS by Kevin Brosius, and hosted at
<a href="http://cin.kevb.net/files/RPM/">kevb.net</a>. 
</blockquote>

<h3><a name="ubuntu">Ubuntu</a></h3>

<blockquote>
<p>Latest Cinelerra CV 2.1.5 for 10.10 Maverick Meerkat, 10.04 Lucid Lynx, 9.10 Karmic Koala, 8.04 Hardy Heron, are available from a Launchpad repo maintained by Nicola Ferralis</p>
<blockquote>
<code>https://launchpad.net/~cinelerra-ppa</code>
</blockquote>
<p>To add the Cinelerra PPA to your source list follow the instructions on the <a href="https://launchpad.net/~cinelerra-ppa/+archive/ppa">Launchpad page</a>.</p>
<p>Older packages are available too. See the <a href="old-distro.php">old packages</a> page.</p>
<p> If you want to compile CinelerraCV from source you can find detailed instructions on the <a href="http://www.g-raffa.eu/Cinelerra/HOWTO/compilation.html">Cinelerra for Grandma</a> tutorial.</p>
</blockquote>

 </div>
 
<address> Last modified on Apr 2, 2011 </address>

<?php include "footer.php"; ?>
 </body>

</html>
