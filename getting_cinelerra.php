<?php
$title="Get Cinelerra";
include "header.php";

include "sidemenu.php"; 
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
<li><a href="https://www.dyne.org/software/dynebolic/">dyne:bolic</a> - For multimedia production, uses Window Maker window manager</li> 
<li><a href="http://www.bandshed.net/AVLinux.html">AVLinux</a> - A content-creation focused OS</li> 
<li><a href="http://www.elivecd.org/">Elive</a> - Debian-based live CD using Enlightenment window manager</li> 
<li><a href="https://musixdistro.wordpress.com">Musix</a> - For audio production, graphic design and video editing</li> 
<li><a href="http://openartisthq.org/">openArtist</a> - Ubuntu-based, for artists</li> 
<li><a href="https://juntadados.org/">junta Dados</a> - Debian-based Brazilian multimedia distribution</li> 
<li><a href="http://www.apodio.org/">Apodio</a> - A GNU/Linux multimedia distribution</li> 
<li><a href="http://www.celeum.com/dreamstudio/">Dream Studio</a> - A full-featured Multimedia creation project</li> 
</ul> 

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
For Debian Stable (Jessie) both CinelerraCV 2.2 and CinelerraHV 4.5 packages are available from <a href="http://deb-multimedia.org/">Deb-multimedia</a>.
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
<p>More informations can be found in the <a href="cinelerra-cv.org/docs/cinelerra_cv_manual_en_2.html">Manual</a>.</p>
      </p>
    </div>
  </div>

  <div id="distro-openmandriva" class="button">
    <img src="/images/website/distro-logos/openmandriva.png" alt="OpenMandriva Logo" title="Download Cinelerra-CV for OpenMandriva" />
    <h4>Mandriva</h4>
    <div class="details">
      <p> 
CinelerraCV 2.2 is officially available in OpenMandriva 2014.1.
      </p>
    </div>
  </div>

  <div id="distro-opensuse" class="button">
    <img src="/images/website/distro-logos/opensuse.png" alt="OpenSUSE Logo" title="Download Cinelerra-CV for OpenSUSE" />
    <h4>openSUSE</h4>
    <div class="details"> 
<p>RPMs for openSUSE are in the <a href="http://packman.links2linux.org/package/cinelerra">Packman</a> repositories.</p>
<p>You can install directly with Yast if you have Packman configured as a Yast install source.</p>
    </div>
  </div>

  <div id="distro-slackware" class="button">
    <img src="/images/website/distro-logos/slackware.png" alt="Slackware Logo" title="Download Cinelerra-CV for Slackware" />
    <h4>Slackware</h4>
    <div class="details">
      <p> 
You can find prebuilt CinelerraCV packages in the <em>multimedia</em> section of the <a href="http://repository.slacky.eu/">Slacky.eu</a> repository.<br>
If you want to build CinelerraCV from scratch, SlackBuilds are available <a href="http://slackbuilds.org/repository/14.1/multimedia/cinelerra/">at the usual location</a>.
      </p>
    </div>
  </div>

  <div id="distro-ubuntu" class="button">
    <img src="/images/website/distro-logos/ubuntu.png" alt="Ubuntu Logo" title="Download Cinelerra-CV for Ubuntu" />
    <h4>Ubuntu</h4>
    <div class="details">
<p>Latest CinelerraCV 2.3 for Ubuntu (from 12.04 Precise Pangolin to the current beta release) is available from a Launchpad repo maintained by Nicola Ferralis:</p>
<code>https://launchpad.net/~cinelerra-ppa</code>
<p>To add the Cinelerra PPA to your source list follow the instructions on the <a href="https://launchpad.net/~cinelerra-ppa/+archive/ppa">Launchpad page</a>.</p>
<p>Once the the PPA has been enabled you can install the package with the command: </p>
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


</div>
 
<address> Last modified on Sep 8, 2015 </address>

<?php include "footer.php"; ?>
 </body>

</html>
