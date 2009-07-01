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
<a href="#livecd">Live CD's</a> |
<a href="#packages">Packages</a> |
<a href="#source">Source code</a>
</h3>

<h2><a name="livecd">Live CD's</a></h2>

<p>Before we scare you away by saying cinelerra only runs on X-based
operating systems only (i.e. NOT MS Windows), it is possible to try
cinelerra out without modifying your computer. This is possible
through the use of Live CDs. Here are some of the Live CD's known to
contain cinelerra</p>

<ul>
<li><a href='http://www.knoppix.org'>Knoppix</a> - the "original" Debian-based LiveDistro</li>
<li><a href='http://www.dynebolic.org'>dyne:bolic</a> -  for multimedia production -uses Window Maker window manager</li>
<li><a href='http://www.elivecd.org/'>Elive</a> -  debian based live CD using Enlightenment window manager</li>
<li><a href='http://http://x-evian.org'>x-evian</a> - Debian based live CD for multimedia creations</li>
<li><a href='http://www.mediainlinux.org'>MediainLinux</a> - Knoppix based live CD</li>
<li><a href='http://musix.org.ar'>Musix</a> - Knoppix based - for audio production, graphic design and video editing</li>
<li><a href='http://garbure.org/pho/'>pho (garbure)</a> - dedicated to video editing</li>
<li><a href='http://linux.slo-tech.com'>Slo-Tech</a> - based on Debian and Morphix</li>
<li><a href='http://artistx.org'>ArtistX</a> - based on Debian, Gnome or KDE,
for multimedia</li>
<li><a href='http://dl.getdropbox.com/u/331020/Mindmap/index.html'>openArtist</a> - based on Ubuntu Hardy, for artists</li>
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


<h3><a name="gentoo">Gentoo</a></h3>

<blockquote>
Installation for Gentoo GNU/Linux is very straight forward. Simply type: <BR>
<code>emerge cinelerra</code><BR>
as root and it should install and run without any problems. <BR>
Note that you may need to put cinelerra in your `/etc/portage/package.keywords'
file in order to unmask it:<BR>
<code>echo "media-video/cinelerra ~x86" >> /etc/portage/package.keywords </code><BR>
See the <a href='http://www.gentoo.org/doc/en/handbook/handbook-x86.xml?part=3&chap=3'>Handbook</a> 
for details. <BR>
More informations can be found in the <a
href='http://cvs.cinelerra.org/docs/split_manual_en/cinelerra_cv_manual_en_2.html#SEC25'>Manual</a>.
</blockquote>

<h3><a name="fedora">Fedora</a></h3>
<blockquote>
Cinelerra is not available in the default Fedora repositories.<br>
Cinelerra is included in the <a
href="http://freshrpms.net" >Freshrpms</a> repository but 
the package collection of Freshrpms may conflict with other third-party repositories such as Livna.<br>
Cinelerra is available also in the kwizart repository that, on the contrary, is compatible with Livna.<br></blockquote>
<h4><a name="fedora9">Fedora 9</a></h4>
<blockquote>
To install Cinelerra from kwizart repository (x86 and x86_64) do: <br>
<code>
su -<br>
rpm -ivh http://rpm.livna.org/livna-release-9.rpm<br>
rpm -ivh http://rpms.kwizart.net/kwizart-release-9.rpm<br>
yum install cinelerra --enablerepo=kwizart<br>
</code>
</blockquote>
<blockquote>
Tips:<br>
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
</code>
</blockquote>

<h4><a name="fedora8">Fedora 8</a></h4>

<blockquote>
To install Cinelerra from kwizart repository (x86 and x86_64) do:<br>
<code>
su -<br>
rpm -ivh http://rpms.kwizart.net/kwizart-release-8.rpm<br>
yum install cinelerra --enablerepo=kwizart</code><br>
</blockquote>
<blockquote>
Tips:<br>
1 - This package tweaks the kernel.shmmax value in /etc/sysctl.conf so there is no need for you to modify it.<br>
2 - The fonts tweak for Fedora 9 is not available for Fedora 8. You need
to copy your fonts to /usr/lib(64)/cinelerra/fonts and regenerate
fonts.dir.
</blockquote>

<h4><a name="fedora567">Fedora 5, 6 and 7</a></h4>
<blockquote>
The easiest way to
install packages from Freshrpms is to include the repository in the <B>yum</B>
configuration.<BR>
Also make sure that the Fedora Extras repository is enabled.  This is the case
by default on Fedora 5 and 6, and Core and Extras are merged into one since Fedora 7.<BR><BR>
On Fedora 6, as the user root do:<BR>
<code>rpm -ivh http://ftp.freshrpms.net/pub/freshrpms/fedora/linux/6/freshrpms-release/freshrpms-release-1.1-1.fc.noarch.rpm</code><BR><BR>
On Fedora 5, do:<BR>
<code>rpm -ivh http://ftp.freshrpms.net/pub/freshrpms/fedora/linux/5/freshrpms-release/freshrpms-release-1.1-1.fc.noarch.rpm</code><BR><BR>
Then type:<BR>
<code>yum -y install cinelerra</code><BR>
</blockquote>


<h3><a name="mandriva">Mandriva</a></h3>

<blockquote>
Cinelerra packages for Mandriva made by PLF are ready to install. See the <a
href='http://plf.zarb.org/packages.php'>PLF</a> site for more information.
</blockquote>


<h3><a name="slack">Slackware</a></h3>
<blockquote>
 Rafael Diniz  build slackware packages for cinelerra 2.1.
<h4>For x86</h4>
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

<h4>
<a href="#jaunty">Jaunty Jackalope</a> |
<a href="#intrepid">Intrepid Ibex</a> |
<a href="#hardy">Hardy Heron</a> |
<a href="#gutsy">Gutsy Gibbon</a> |
</h4>

<blockquote>
<p>Here are the Ubuntu packages repositories. Detailed instructions for
installation can be found in the <a href='http://cvs.cinelerra.org/docs/split_manual_en/cinelerra_cv_manual_en_2.html#SEC24'>Manual</a>.</p>
</blockquote>

<H4><a name="jaunty">9.04 Jaunty Jackalope</a></h4>
<blockquote>
for all x86 (full working on 32 and 64 bits), by Paolo Rampino:<br>
<code>deb http://akirad.cinelerra.org akirad-jaunty main </code>
<blockquote>
Installation notes:<br>
- For your convenience you can install a package for detecting your version of Ubuntu, installing akirad repository and keeping it updated. <br>
Just double click on the link <a href="http://akirad.cinelerra.org/pool/addakirad.deb">http://akirad.cinelerra.org/pool/addakirad.deb</a> and install it with GDebi Package Installer. <br>
Alternatively, use one of the following terminal commands:<br>
<code>
wget -q http://akirad.cinelerra.org/pool/addakirad.deb && sudo dpkg -i addakirad.deb && rm addakirad.deb && sudo apt-get update<br>
</code>
or<br>
<code>
echo deb http://akirad.cinelerra.org akirad-jaunty main | sudo tee /etc/apt/sources.list.d/akirad.list && wget -q http://akirad.cinelerra.org/dists/akirad.key -O- | sudo apt-key add - && sudo apt-get update<br>
</code>
- 4 are the packages available in the akirad repository:<br>
<blockquote>
cinelerracv (all computers)<br>
cinelerracv-gl (best on computer with opengl2.0 shader)<br>
cinelerracv-smp (best on multiprocessors computer, it allows also opengl2.0 shader)<br>
cinelerra-swtc (extra Shape Wipe Transitions)<br>
</blockquote>
- Ubuntu jaunty uses Pulse Audio as Sound driver. Since it comes with a PulseAudio ESD compatibility layer, Cinelerra can be set to work with PulseAudio. Simply open Cinelerra and go to <i>Settings->Preferences->Playback->Audio Driver</i>. Select <i>ESound</i> and set the following parameters:<br>
Server: <br>
Port: 7007 <br>
- These packages set shmmax to 0x7fffffff and add non-English language support for Cinelerra.<br>
- Please, report any package bug to <em>akir4d at gmail dot com </em>
</blockquote>
</blockquote>

<H4><a name="intrepid">8.10 Intrepid Ibex</a></h4>

<blockquote>
for all x86 (full working on 32 and 64 bits), by Paolo Rampino:<br>
<code>deb http://akirad.cinelerra.org akirad-intrepid main</code>
<blockquote>
Installation notes:<br>
- For your convenience you can install a package for detecting your version of Ubuntu, installing akirad repository and keeping it updated. <br>
Just double click on the link <a href="http://akirad.cinelerra.org/pool/addakirad.deb">http://akirad.cinelerra.org/pool/addakirad.deb</a> and install it with GDebi Package Installer. <br>
Alternatively, use one of the following terminal commands:<br>
<code>
wget -q http://akirad.cinelerra.org/pool/addakirad.deb && sudo dpkg -i 
addakirad.deb && rm addakirad.deb && sudo apt-get update<br>
</code>
or<br>
<code>
echo deb http://akirad.cinelerra.org akirad-intrepid main | sudo tee 
/etc/apt/sources.list.d/akirad.list && wget -q 
http://akirad.cinelerra.org/dists/akirad.key -O- | sudo apt-key add - && 
sudo apt-get update<br>
</code>
- 4 are the packages available in the akirad repository:<br>
<blockquote>
cinelerra (all computers)<br>
cinelerra-gl (best on computer with opengl2.0 shader)<br>
cinelerra-smp (best on multiprocessors computer, it allows also opengl2.0 shader)<br>
cinelerra-swtc (extra Shape Wipe Transitions)<br>
</blockquote>
- Ubuntu Intrepid uses Pulse Audio as Sound driver. Since it comes with a PulseAudio ESD compatibility layer, Cinelerra can be set to work with PulseAudio. Simply open Cinelerra and go to <i>Settings->Preferences->Playback->Audio Driver</i>. Select <i>ESound</i> and set the following parameters:<br>
Server:  <br>
Port: 7007 <br>
- These packages set shmmax to 0x7fffffff and add non-English language
support for Cinelerra.<br>
- Please, report any package bug to <em>akir4d at gmail dot com</em>
</blockquote>
</blockquote>

<H4><a name="hardy">8.04 Hardy Heron</a></h4>

<blockquote>
for all x86 (full working on 32 and 64 bits), by Paolo Rampino:<br>
<code>deb http://akirad.cinelerra.org akirad-hardy main</code>
<blockquote>
Installation notes:<br>
- For your convenience you can install a package for detecting your version of Ubuntu, installing akirad repository and keeping it updated. <br>
Just double click on the link <a href="http://akirad.cinelerra.org/pool/addakirad.deb">http://akirad.cinelerra.org/pool/addakirad.deb</a> and install it with GDebi Package Installer. <br>
Alternatively, use the following terminal command:<br>
<code>wget -c http://akirad.cinelerra.org/pool/addakirad.deb && sudo dpkg -i
addakirad.deb</code><br>
- To update the repository information press <i>Reload</i> in Synaptic Package Manager (Adept for Kubuntu) or use the following terminal command: <br>
<code>sudo apt-get update</code><br>
- 7 are the packages available in the akirad repository:<br>
<blockquote>
cinelerra (x86 and x86_64 without opengl 2.0 video card)<br>
cinelerra4-repack (Heroine Virtual version)<br>
cinelerra-generic (all x86 and x86_64 with opengl 2.0 video card)<br>
cinelerra-k7 (amd32 without opengl 2.0 video card)<br>
cinelerra-k7gl (amd32 with opengl 2.0 video card)<br>
cinelerra-k8 (amd k8 optimized with opengl 2.0 video card)<br>
cinelerra-swtc (extra Shape Wipe Transitions)<br>
</blockquote>
- Ubuntu Hardy moved to Pulse Audio Sound driver. Since it comes with a PulseAudio ESD compatibility layer, Cinelerra can be set to work with PulseAudio. Simply open Cinelerra and go to <i>Settings->Preferences->Playback->Audio Driver</i>. Select <i>ESound</i> and set the following parameters:<br>
Server:  <br>
Port: 7007 <br>
- These packages set shmmax to 0x7fffffff and add non-English language 
support for Cinelerra.<br>
- Please, report any package bug to <em>akir4d at gmail dot com</em>
</blockquote>
</blockquote>
<blockquote>
for i386 (not working on amd 32 bits), by Valentina Messeri:<br>
<code>deb http://giss.tv/~vale/ubuntu32/hardy ./</code><br><br>
</blockquote>
<H4><a name="gutsy">7.10 Gutsy Gibbon</a></h4>

<blockquote>
for all x86 (full working on 32 and 64 bits), by Paolo Rampino:<br>
<code>deb http://akirad.cinelerra.org akirad-gutsy main</code>
<blockquote>
Installation notes:<br>
- To add this repository in your sources list use the following terminal command:<br>
<code>sudo wget http://akirad.cinelerra.org/dists/gutsy.list -O
/etc/apt/sources.list.d/akirad.list</code><br>
- Installations from this repository need an authentication key. Add it by 
  typing in your terminal the following command: <br>
<code>wget -q http://akirad.cinelerra.org/dists/akirad.key -O- | sudo apt-key 
add - && sudo apt-get update</code><br>
- Cinelerra package is available in 5 variants:<br>
<blockquote>
cinelerra (all x86 and x86_64 without opengl 2.0 video card)<br>
cinelerra-generic (all x86 and x86_64 with opengl 2.0 video card)<br>
cinelerra-k7 (all amd32 without opengl 2.0 video card)<br>
cinelerra-k7gl (all amd32 with opengl 2.0 video card)<br>
cinelerra-k8 (all amd64 with opengl 2.0 video card)
</blockquote>
- These packages set shmmax to 0x7fffffff and add non-English language 
support for Cinelerra.<br>
- Please, report any package bug to <em>akir4d at gmail dot com</em>
</blockquote>
for i386 (not working on amd 32 bits), by Valentina Messeri:<br>
<code>deb http://giss.tv/~vale/ubuntu32/gutsy ./</code><br><br>
for AMD64 (and also Core Duo Intel64), by Valentina Messeri:<br>
<code>deb http://giss.tv/~vale/ubuntu64 ./</code><br>
<blockquote>
Installation note:<br>
- If your package manager complains that it does not have the right version of
libfaac (1.25) you can try installing <a
href='http://www.debian-multimedia.org/dists/stable/main/binary-amd64/package/libfaac0.php'>libfaac0</a>.
</blockquote>
</blockquote>

<h2><a name="source">Source code</a></h2>

<p>The source code of Cinelerra-CV is available from a git repository. 
 To get a copy for compilation use the following command</p>
 <blockquote>
git clone git://git.cinelerra.org/j6t/cinelerra.git my_cinelerra
 </blockquote>
<p>You can modify this working copy, and submit your patches to the mailing list, or ask for your own repo or for permission to push to one of the existing ones.</p>

 </div>
 
<address> Last modified on Feb 11 2009 </address>

<?php include "footer.php"; ?>
 </body>

</html>
