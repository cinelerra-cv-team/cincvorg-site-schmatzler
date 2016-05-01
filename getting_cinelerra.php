<?php
$title="Get Cinelerra-CV";
include "header.php";
?>

<div class="content">
<div class="header">
    <h1>Get Cinelerra-CV</h1>
    <h2>Download <a href="#livecd">Live Media</a> | <a href="#packages">Packages</a> | <a href="#source">Source code</a></h2> 
</div>

<div class="hint">
<h3 class="hint">Note:</h3>
<div class="hintcontent">
<p>This page is only for Cinelerra-<u>CV</u>. Packages and code for experimental versions (CVE, CVA, 5.1, merge-4) <a href="main_repo.php#experimental">can be found here.</a></p>
</div></div>

<h2><a name="livecd">Live Media</a></h2>

<p>You can try out Cinelerra-CV without modifying your computer, thanks to Live DVDs that contain it.<br/>
Just download the .iso file, burn it on a DVD, insert it in the drive and restart your machine.</br>
Or put in on a USB stick with <a href="https://rufus.akeo.ie/" target="_blank">Rufus</a> or <a href="https://unetbootin.github.io/" target="_blank">UNetbootin</a>.</p>

<script type='text/javascript'>
function init() {
	new Effect.Tooltip('distro-cinelive', '<b>All variants</b> | Based on Slackware 14.2. Our very own LiveDVD, regularly updated. This is the best choice for trying out different editions of Cinelerra and finding the one that suits you best.', {className: 'tip'});
	new Effect.Tooltip('distro-avlinux', '<b>CVA (akirad) + 5.0 (goodguy)</b> | Distribution designed to turn a regular old PC or Intel Mac into an Audio/Graphics/Video workstation.', {className: 'tip'});
	h.init();
}
Event.observe(window, 'load', init, false);
</script>

<div style="width:100%;height:100px;">
  <div id="distro-cinelive" class="livecd">
    <a href="/cinelive.php" ><img src="images/website/livecd-logos/cinelive.png" alt="CINELIVE Logo" /></a>
      <h4>CINELIVE</h4>
  </div>
  <div id="distro-avlinux" class="livecd">
    <a href="http://www.bandshed.net/avlinux/" target="_blank" ><img src="/images/website/livecd-logos/avlinux.png" alt="AVLinux Logo" /></a>
      <h4>AVLinux</h4>
  </div>
</div>

<div style="clear:both;"></div>

<h2><a name="packages">Packages</a></h2>

<h4 class="download">Select Your Operating System</h4>
<div id="distros">
  <div id="distro-archlinux" class="button">
    <img src="/images/website/distro-logos/arch.png" alt="ArchLinux Logo" title="Download Cinelerra-CV for ArchLinux" />
    <h4>Arch Linux</h4>
    <div class="details">
      <p> 
Cinelerra-CV is included in the Arch Linux community repository. To install 
the "cinelerra" package enable the community repository first (See the <a
href='http://wiki.archlinux.org/index.php/AUR_User_Guidelines'>User
Guidelines</a> for more info), then run the following command from the command line: <BR>
<pre>pacman -Sy cinelerra-cv</pre> 
      </p>
    </div>
  </div>

  <div id="distro-debian" class="button">
    <img src="/images/website/distro-logos/debian.png" alt="Debian Logo" title="Download Cinelerra-CV for Debian" />
    <h4>Debian</h4>
    <div class="details">
      <p>
<p>For Debian, packages are available through <a href="http://deb-multimedia.org/">Deb-Multimedia</a>.</p>
<p>Stable (Jessie) comes with Cinelerra-CV 2.2.</p>
<div class="alert">
<h3 class="alert">Attention:</h3>
<div class="hintcontent">
<p>Deb-Multimedia stopped building Cinelerra-CV after 2.2 and switched to Cinelerra-HV. If you want the latest version 2.3, your only option is to build it from source.</p>
</div></div>
      </p>
    </div>
  </div>

  <div id="distro-fedora" class="button">
    <img src="/images/website/distro-logos/fedora.png" alt="Fedora Logo" title="Download Cinelerra-CV for Fedora" />
    <h4>Fedora</h4>
    <div class="details">
      <p>      
<div class="alert">
<h3 class="alert">Attention:</h3>
<div class="hintcontent">
<p>Cinelerra-CV is <u>not</u> available in Fedora by default. It's also <u>not</u> in the RPM Fusion repository.</p>
</div></div>
<p>If you want to compile CinelerraCV from source you can find detailed instructions here:</p>
<ul>
<li><a href="http://blog.rabin.io/447/building-cinelerracv-for-fedora-22-under-docker">Build Cinelerra-CV for Fedora 22 under Docker</a></li>
<li><a href="http://crazedmuleproductions.blogspot.com/2011/05/fedora-15-cinelerra-install-works.html">Build Cinelerra-CV for Fedora 15, x86-64</a></li>
</ul>
      </p>
    </div>
  </div>

  <div id="distro-freebsd" class="button">
    <img src="/images/website/distro-logos/freebsd.png" alt="FreeBSD Logo" title="Download Cinelerra-CV for FreeBSD" />
    <h4>FreeBSD</h4>
    <div class="details">
      <p>
<p>A WIP (work in progress) port of Cinelerra-CV 2.3 for FreeBSD has been created <a href="https://github.com/decke/ports.git">by Bernhard Fröhlich</a>.</p>
<div class="alert">
<h3 class="alert">Attention:</h3>
<div class="hintcontent">
<p>It is <u>not</u> fully working yet and can't be built completely from source.
Please help him out, if you can.</p>
</div></div>
<p><b><i>Prerequisites</i></b>
<ul>
<li>1. <a href="http://ftp.freebsd.org/pub/FreeBSD/releases/amd64/amd64/ISO-IMAGES/10.3/FreeBSD-10.3-RELEASE-amd64-dvd1.iso">FreeBSD-10.3-RELEASE-amd64-dvd1.iso</a> was installed with default settings.</li>
<li>2. We added a new user <i>cinelerra</i> at the end of the installation.</li>
<li>3. Added user to the wheel group (so we can run commands as root):
   <pre>pw groupmod wheel -m cinelerra</pre></li>
<li>4. bsdconfig is broken, to install packages from the DVD we ran:
   <pre>mkdir -p /dist
mount -t cd9660 /dev/cd0 /dist
   
env REPOS_DIR=/dist/packages/repos \
pkg bootstrap</pre></li>
<li>5. Installed the graphical environment:
   <pre>env REPOS_DIR=/dist/packages/repos \
pkg install kde xorg</pre></li>
<li>6. Made KDM start at boot:
   <pre>echo 'kdm4_enable="YES"' >> /etc/rc.conf
echo 'dbus_enable="YES"' >> /etc/rc.conf</pre></li>
<li>7. VirtualBox (optional)
   <pre>pkg install virtualbox-ose-additions
echo 'vboxguest_enable="YES"' >> /etc/rc.conf
echo 'vboxservice_enable="YES"' >> /etc/rc.conf</pre></li>
</ul>
</p>  
This gives us a basic graphical system with X.Org and KDE4 installed.</p>

<p><b><i>Install Cinelerra-CV</i></b>
  
<ul>
<li>1. Install dependencies:
   <pre>pkg install tiff fftw3 mjpegtools jpeg liba52 png libsndfile x264 libtheora libvorbis ffmpeg libdv e2fsprogs-libuuid OpenEXR esound</pre></li>
<li>2. Clone the build scripts and change into their directory:
   <pre>pkg install git
git clone https://github.com/decke/ports.git
cd ports/multimedia/cinelerra</pre></li>
<li>3. Build the program and install it:
   <pre>make install</pre></li>
   
</ul>   
</p>
      </p>
    </div>
  </div>
  
  <div id="distro-gentoo" class="button">
    <img src="/images/website/distro-logos/gentoo.png" alt="Gentoo Logo" title="Download Cinelerra-CV for Gentoo" />
    <h4>Gentoo</h4>
    <div class="details">
      <p>
<!--TODO: Add tutorial for building from source on Gentoo-->
<div class="alert">
<h3 class="alert">Attention:</h3>
<div class="hintcontent">
<p>Gentoo's packages for Cinelerra-CV are 4 years old (testing: 2 years) and <font style="color:red;">severely outdated</font>. Please try building Cinelerra-CV from source or if you're skilled enough, <a href="https://bugs.gentoo.org/show_bug.cgi?id=539174">become a maintainer</a> for the package.</p>
</div></div>
<p>Installation for Gentoo GNU/Linux is very straight forward. Simply type:</p>
<pre>emerge cinelerra</pre>
<p>as root and it should install and run without any problems.</p>
<p>Note that you may need to put cinelerra in your <i>/etc/portage/package.keywords</i>
file in order to unmask it:</p>
<pre>echo "media-video/cinelerra ~x86" >> /etc/portage/package.keywords</pre>
<p>See the <a href='http://www.gentoo.org/doc/en/handbook/handbook-x86.xml?part=3&chap=3'>Handbook</a> 
for details.</p>
      </p>
    </div>
  </div>

  <div id="distro-manjaro" class="button">
    <img src="/images/website/distro-logos/manjaro.png" alt="Manjaro Logo" title="Download Cinelerra-CV for Manjaro" />
    <h4>Manjaro</h4>
    <div class="details">
      <p> 
<p>Cinelerra-CV can be installed through the <i>Octopi</i> package manager.</p>
<p>Search for the following packages and install them:
<ul>
<li>libquicktime</li>
<li>mjpegtools</li>
<li>cinelerra-cv</li>
</ul></p>
      </p>
    </div>
  </div>

  <div id="distro-openmandriva" class="button">
    <img src="/images/website/distro-logos/openmandriva.png" alt="OpenMandriva Logo" title="Download Cinelerra-CV for OpenMandriva" />
    <h4>Mandriva</h4>
    <div class="details">
      <p> 
<p>CinelerraCV 2.2 is officially available in OpenMandriva 2014.2.</p>
<p>Make sure restricted packages are activated in the control center.</p>

<div class="hint">
<h3 class="hint">Note:</h3>
<div class="hintcontent">
<p>Cinelerra doesn't show up in the "programs with GUI" list. You have to show the complete list to install it.</p>
</div></div>
      </p>
    </div>
  </div>

  <div id="distro-opensuse" class="button">
    <img src="/images/website/distro-logos/opensuse.png" alt="OpenSUSE Logo" title="Download Cinelerra-CV for OpenSUSE" />
    <h4>openSUSE</h4>
    <div class="details"> 
<p>RPMs for openSUSE are in the <a href="http://packman.links2linux.org/package/cinelerra-cv">Packman</a> repositories.</p>
<p>You can install directly with Yast if you have Packman configured as a Yast install source.</p>
    </div>
  </div>

  <div id="distro-rosalinux" class="button">
    <img src="/images/website/distro-logos/rosalinux.png" alt="ROSA Logo" title="Download Cinelerra-CV for ROSA" />
    <h4>ROSA</h4>
    <div class="details"> 
<p>Packages for Cinelerra-CV are available in the <i>Restricted Updates Repository</i>, for <a href="http://mirror.rosalab.ru/rosa/red/repository/i586/restricted/updates/">i586</a> and <a href="http://mirror.rosalab.ru/rosa/red/repository/x86_64/restricted/updates/">x86_64</a>.</p>
<p><b>Install Howto</b></p>
<ul>
    <li>Enable ROSA Restricted Updates repository on <i>Install and Remove Software</i></li>
    <li>Update packages list:<br/>
    <pre>urpmi.update -a</pre></li>
    <li>Install cinelerra-cv rpm package:<br/>
    <pre>urpmi cinelerra-cv</pre></li>
    </div>
  </div>

  <div id="distro-slackware" class="button">
    <img src="/images/website/distro-logos/slackware.png" alt="Slackware Logo" title="Download Cinelerra-CV for Slackware" />
    <h4>Slackware</h4>
    <div class="details">
    
    <div class="hint">
      <h3 class="hint">Note:</h3>
      <div class="hintcontent">
        <p>We're putting up 64bit packages as part of our Live Edition. Those are based on the very latest code and can be used on a regular Slackware installation, too. See our <a href="/cinelive.php/#slackinstall">CINELIVE page</a> for details.</p>
      </div></div>
    
      <p>You can find prebuilt Cinelerra-CV packages at the following locations:</p>
      <ul>
      <li><a href="http://packages.slackonly.com/pub/packages/">Slackonly packages</a> (recommended, because it uses <a href="http://slackbuilds.org/">SBo SlackBuilds</a>)</li>
      <li><a href="http://ponce.cc/slackware/sources/repo/">Ponce's repository</a></li>
      <li><a href="http://studioware.org/packages">Studioware packages</a></li>
      </ul>
      <p>If you want to build CinelerraCV from scratch, SlackBuilds are available <a href="http://slackbuilds.org/repository/14.1/multimedia/cinelerra/">at the usual place</a>.</p>
    </div>
  </div>

  <div id="distro-ubuntu" class="button">
    <img src="/images/website/distro-logos/ubuntu.png" alt="Ubuntu Logo" title="Download Cinelerra-CV for Ubuntu" />
    <h4>Ubuntu</h4>
    <div class="details">
<p>Latest Cinelerra-CV 2.3 for Ubuntu (from 12.04 Precise Pangolin to the current beta release) is available from a Launchpad repo maintained by Nicola Ferralis:</p>
<a href="https://launchpad.net/~cinelerra-ppa">https://launchpad.net/~cinelerra-ppa</a>
<p>To add the Cinelerra PPA to your source list run these commands in a terminal:</p>

<pre>sudo add-apt-repository ppa:cinelerra-ppa/ppa</pre>
<pre>sudo apt-get update</pre>

<p>Once the the PPA has been enabled you can install the package with the command:</p>
<pre>sudo apt-get install cinelerra-cv</pre>
<p>If you want to compile CinelerraCV from source you can find detailed instructions on the <a href="http://www.g-raffa.eu/Cinelerra/HOWTO/compilation.html">Cinelerra for Grandma</a> tutorial.</p>
    </div>
  </div>
  
</div>

<div class="clear"></div>

<h3 id="distro-details-header" class="download"></h3>

<div id="distro-details">
</div>

<h2><a name="source">Source Code</a></h2>

<p>The sources of Cinelerra-CV are available as .tar.xz snapshots here:</p>
<p><a href="https://cinelerra-cv.org/releases/">Browse releases</a></p>
<p>You can also <a href="/main_repo.php">check out the code</a> we're currently working on.</p>

<!-- async js -->
<script type="text/javascript">

var download_action = "Install on";

function show_distro_details (button)
{
    var title = $$('#' + button.id + ' h4')[0].innerHTML;
    var content = $$('#' + button.id + ' div.details')[0].innerHTML;
    
    button.addClassName ('chosen');
    $$('#distros div.button').each (function (element, index) {
        if (element != button) {
            element.removeClassName ('chosen');
        }
    });
    
    $('distro-details').innerHTML = content;
    $('distro-details-header').innerHTML = download_action + ' ' + title;
}

function install_distro_button_actions ()
{
    $$('#distros div.button').each (function (button, index) {
        
        button.observe ('click', function () { show_distro_details (button); } );
    });
    
    $('distro-details').setStyle ("display: block");
}

Event.observe (window, 'load', install_distro_button_actions);
</script>

<div class="lastmodified">Last modified on May 1, 2016</div>
</div>

<?php include "footer.php"; ?>
 </body>

</html>
