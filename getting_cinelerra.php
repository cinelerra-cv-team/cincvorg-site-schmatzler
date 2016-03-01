<?php
$title="Get Cinelerra-CV";
include "header.php";
?>

<div class="content">
<div class="header">
    <h1>Get Cinelerra-CV</h1>
    <h2>Download <a href="#livecd">Live Media</a> | <a href="#packages">Packages</a> | <a href="#source">Source code</a></h2> 
</div>

<h2><a name="livecd">Live Media</a></h2>

<p>You can try out Cinelerra-CV without modifying your computer, thanks to Live DVDs that contain it.<br/>
Just download the .iso file, burn it on a DVD, insert it in the drive and restart your machine.</br>
Or put in on a USB stick with <a href="https://rufus.akeo.ie/" target="_blank">Rufus</a> or <a href="https://unetbootin.github.io/" target="_blank">UNetbootin</a>.</p>

<script type='text/javascript'>
function init() {
	new Effect.Tooltip('distro-apodio', '<b>Cinelerra-CV 2.2</b> | Based on Xubuntu 14.04. A GNU/Linux operating system containing audio, text-friendly, graphic and video tools', {className: 'tip'});
	new Effect.Tooltip('distro-artistx', '<b>Cinelerra-CV 2.2</b> | ArtistX is a free DVD which turns a computer into a full multimedia production studio', {className: 'tip'});
	new Effect.Tooltip('distro-avlinux', '<b>Cinelerra-CV 2.2</b> | 32bit+PAE OS, designed to turn a regular old PC or Intel Mac into an Audio/Graphics/Video workstation', {className: 'tip'});
	new Effect.Tooltip('distro-dyne', '<b>Outdated!</b> | 100% free OS for multimedia production, uses Window Maker window manager', {className: 'tip'});
	h.init();
}
Event.observe(window, 'load', init, false);
</script>

<div style="width:100%;height:100px;">
  <div id="distro-apodio" class="livecd">
    <a href="http://www.apodio.org/" target="_blank" ><img src="/images/website/livecd-logos/apodio.png" alt="Apodio Logo" /></a>
      <h4>Apodio</h4>
  </div>
  <div id="distro-artistx" class="livecd">
    <a href="http://sourceforge.net/projects/archiveos/files/artistx/" target="_blank" ><img src="/images/website/livecd-logos/artistx.png" alt="ArtistX Logo" /></a>
      <h4>ArtistX</h4>
  </div>
  <div id="distro-avlinux" class="livecd">
    <a href="http://iso.linuxquestions.org/av-linux/av-linux-6.0.4/" target="_blank" ><img src="/images/website/livecd-logos/avlinux.png" alt="AVLinux Logo" /></a>
      <h4>AVLinux</h4>
  </div>
  <div id="distro-dyne" class="livecd">
    <a href="https://www.dyne.org/software/dynebolic/" target="_blank" ><img src="/images/website/livecd-logos/dyne.png" alt="dyne:bolic Logo" /></a>
      <h4>dyne:bolic</h4>
  </div>
</div>

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
<code>pacman -Sy cinelerra-cv</code> 
      </p>
    </div>
  </div>

  <div id="distro-debian" class="button">
    <img src="/images/website/distro-logos/debian.png" alt="Debian Logo" title="Download Cinelerra-CV for Debian" />
    <h4>Debian</h4>
    <div class="details">
      <p> 
<p>For Debian, packages are available through <a href="http://deb-multimedia.org/">Deb Multimedia</a>.</p>
<p>Stable (Jessie) comes with Cinelerra-CV 2.2, Testing (Stretch) and Unstable (Sid) already have the latest version 2.3.</p>
      </p>
    </div>
  </div>

  <div id="distro-fedora" class="button">
    <img src="/images/website/distro-logos/fedora.png" alt="Fedora Logo" title="Download Cinelerra-CV for Fedora" />
    <h4>Fedora</h4>
    <div class="details">
      <p> 
<p>Cinelerra-CV is <u>not</u> available in Fedora by default. It's also <u>not</u> in the RPM Fusion repository.</p>
<p>The <a href="http://packages.atrpms.net/name/cinelerra/">ATrpms repository</a> offers the old version 2.1 for Fedora 20.
<p>If you want to compile CinelerraCV from source you can find detailed instructions here:</p>
<ul>
<li><a href="http://blog.rabin.io/447/building-cinelerracv-for-fedora-22-under-docker">Build Cinelerra-CV for Fedora 22 under Docker</a></li>
<li><a href="http://crazedmuleproductions.blogspot.com/2011/05/fedora-15-cinelerra-install-works.html">Build Cinelerra-CV for Fedora 15, x86-64</a></li>
</ul>
      </p>
    </div>
  </div>
  
  <div id="distro-gentoo" class="button">
    <img src="/images/website/distro-logos/gentoo.png" alt="Gentoo Logo" title="Download Cinelerra-CV for Gentoo" />
    <h4>Gentoo</h4>
    <div class="details">
      <p> 
<p>Installation for Gentoo GNU/Linux is very straight forward. Simply type:</p>
<p><code>emerge cinelerra</code></p>
<p>as root and it should install and run without any problems.</p>
<p>Note that you may need to put cinelerra in your <i>/etc/portage/package.keywords</i>
file in order to unmask it:</p>
<p><code>echo "media-video/cinelerra ~x86" >> /etc/portage/package.keywords </code></p>
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
<p><b>Note:</b> cinelerra doesn't show up in the "programs with GUI" list. You have to show the complete list to install it.</p>
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
    <code>urpmi.update -a</code></li>
    <li>Install cinelerra-cv rpm package:<br/>
    <code>urpmi cinelerra-cv</code></li>
    </div>
  </div>

  <div id="distro-slackware" class="button">
    <img src="/images/website/distro-logos/slackware.png" alt="Slackware Logo" title="Download Cinelerra-CV for Slackware" />
    <h4>Slackware</h4>
    <div class="details">
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
<ul>
  <li><code>sudo add-apt-repository ppa:cinelerra-ppa/ppa</code></li>
  <li><code>sudo apt-get update</code></li>
</ul>
<p>Once the the PPA has been enabled you can install the package with the command:</p>
<code>sudo apt-get install cinelerra-cv</code>
<br/>
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
<p><a href="http://www.cinelerra-cv.org/releases/">Browse releases</a></p>
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

<div class="lastmodified">Last modified on Mar 1, 2016</div>
</div>

<?php include "footer.php"; ?>
 </body>

</html>
