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
<a href="#livecd">Live Media</a> |
<a href="#packages">Packages</a> |
<a href="source_code.php">Source code</a>
</h3>

<h2><a name="livecd">Live Media</a></h2>

<p>You can try Cinelerra out without modifying your computer, thanks to Live DVDs that contain Cinelerra. <br />
You just need to download the .iso file, burn it on a DVD, insert it in the drive and restart your machine.</p> 
 
<ul> 
<li><a href='http://www.dynebolic.org'>dyne:bolic</a> - For multimedia production, uses Window Maker window manager</li> 
<li><a href='http://www.bandshed.net/AVLinux.html'>AVLinux</a> - A content-creation focused OS</li> 
<li><a href='http://www.elivecd.org/'>Elive</a> - Debian-based live CD using Enlightenment window manager</li> 
<li><a href='https://musixdistro.wordpress.com'>Musix</a> - For audio production, graphic design and video editing</li> 
<li><a href='http://openartisthq.org/'>openArtist</a> - Ubuntu-based, for artists</li> 
<li><a href='https://juntadados.org/'>junta Dados</a> - Debian-based Brazilian multimedia distribution</li> 
<li><a href='http://www.apodio.org/'>Apodio</a> - A GNU/Linux multimedia distribution</li> 
<li><a href='http://www.celeum.com/about-dreamstudio/'>Dream Studio</a> - A full-featured Multimedia creation project</li> 
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

<p>More detailed instructions for every distrubution can be found in the <a href="http://cv.cinelerra-cv.org/docs/wiki/doku.php?id=english_manual:cinelerra_cv_en_2">Manual</a>.
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
<p>Both CinelerraCV 2.1.0 and CinelerraHV 4.2 packages are available from <a href="http://deb-multimedia.org/">Deb-multimedia</a>.<br />
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
href='http://cvs.cinelerra-cv.org/docs/split_manual_en/cinelerra_cv_manual_en_2.html#SEC25'>Manual</a>.</p>
</blockquote>

<h3><a name="fedora">Fedora</a></h3>

<blockquote>
<p>Cinelerra is not available in the default Fedora repositories, nor in the RPM Fusion and Livna repositories.<br>
The <a href="http://packages.atrpms.net/name/cinelerra/">ATrpms repository</a> offers Cinelerra packages 
<p>
If you want to compile CinelerraCV from source you can find detailed instructions on Crazed Mule's blog:</p>
<ul>
<li><a href="http://crazedmuleproductions.blogspot.com/2011/05/fedora-15-cinelerra-install-works.html">for Fedora 15, x86-64</a></li>
<li><a href="http://crazedmuleproductions.blogspot.com/2010/02/fedora-12-x86-64-cinelerra-install.html">for Fedora 12, x86-64</a></li>
</ul>
<p>Older packages are available. See the <a href="old-distro.php">old packages</a> page.</p>
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
You can find Cinelerra packages in the <em>multimedia</em> section of the <a href="http://repository.slacky.eu/">Slacky.eu</a> repository.
</blockquote>

<h3><a name="suse">Suse</a></h3>

<blockquote>
<p>RPMs for openSUSE are in the <a href="http://packman.links2linux.org/package/cinelerra">Packman</a> repositories.<br>
You can install directly with Yast if you have Packman configured as a Yast install source.</p>
</blockquote>

<h3><a name="ubuntu">Ubuntu</a></h3>

<blockquote>
<p>Latest Cinelerra CV 2.2 for Ubuntu (from 8.04 Hardy Heron to the current beta release) is available from a Launchpad repo maintained by Nicola Ferralis</p>
<blockquote>
<code>https://launchpad.net/~cinelerra-ppa</code>
</blockquote>
<p>To add the Cinelerra PPA to your source list follow the instructions on the <a href="https://launchpad.net/~cinelerra-ppa/+archive/ppa">Launchpad page</a>.</p>
<p>Once the the PPA has been enabled you can install the package with the command: </p>
<blockquote>
<code>sudo apt-get install cinelerra-cv</code>
</blockquote>

<p>Older packages are available too. See the <a href="old-distro.php">old packages</a> page.</p>
<p> If you want to compile CinelerraCV from source you can find detailed instructions on the <a href="http://www.g-raffa.eu/Cinelerra/HOWTO/compilation.html">Cinelerra for Grandma</a> tutorial.</p>
</blockquote>

 </div>
 
<address> Last modified on Nov 10, 2012 </address>

<?php include "footer.php"; ?>
 </body>

</html>
