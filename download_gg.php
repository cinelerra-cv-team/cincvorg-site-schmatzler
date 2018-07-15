<?php
$title="Get Cinelerra-GG";
include "header.php";
?>

<div class="content">
<div class="header">
    <h1>Get Cinelerra-GG</h1>
    <h2>Use <a href="#packages">Repositories</a>, download <a href="#subuilds">Builds</a> or look at <a href="#source">Code &amp; Docs.</a></h2> 
</div>

<div class="hint">
<h3 class="hint">Note:</h3>
<div class="hintcontent">
<p>This page is only for Cinelerra-<u>GG</u>. Packages and code for all other versions <a href="/download.php">can be found here.</a></p>
</div></div>

<div style="clear:both;"></div>

<h2><a name="packages">Packages</a></h2>

<h4 class="download">Select Your Operating System</h4>
<div id="distros">
  <div id="distro-archlinux" class="button">
    <img src="/images/website/distro-logos/arch.png" alt="ArchLinux Logo" title="Download Cinelerra-GG for ArchLinux" />
    <h4>Arch Linux</h4>
    <div class="details">
      <p>To install Cinelerra-GG on Arch, first edit the file <i>/etc/pacman.conf</i>, to include the following:</p>
<pre>[cincv]
SigLevel = Optional TrustAll
Server = https://cinelerra-cv.org/five/pkgs/arch
# end of cincv</pre>
      <p>Afterwards, run these commands to install it:</p>
<pre>pacman -Sy
pacman -S cin</pre>
      <p>You can uninstall Cinelerra-GG by running:</p>
<pre>pacman -R cin</pre>
    </div>
  </div>

  <div id="distro-centos" class="button">
    <img src="/images/website/distro-logos/centos.png" alt="CentOS Logo" title="Download Cinelerra-GG for CentOS" />
    <h4>CentOS</h4>
    <div class="details">
      <p>To install Cinelerra-GG on CentOS, first create the file <i>/etc/yum.repos.d/cincv</i>, with the following contents:</p>
<pre>[[cincv]
name=cincv
baseurl=https://cinelerra-cv.org/five/pkgs/centos
gpgcheck=0
# end of cincv</pre>
      <p>Afterwards, run this command to install it:</p>
<pre>yum install cinelerra</pre>
      <p>You can uninstall Cinelerra-GG by running:</p>
<pre>yum erase cinelerra</pre>
    </div>
  </div>

  <div id="distro-debian" class="button">
    <img src="/images/website/distro-logos/debian.png" alt="Debian Logo" title="Download Cinelerra-GG for Debian" />
    <h4>Debian</h4>
    <div class="details">
      <p>To install Cinelerra-GG on Debian, run the following commands in a terminal:</p>
<pre>apt install software-properties-common apt-transport-https</pre>
For Debian 8 (Jessie):
<pre>apt-add-repository https://cinelerra-cv.org/five/pkgs/debian8</pre>
For Debian 9 (Stretch):
<pre>apt-add-repository https://cinelerra-cv.org/five/pkgs/debian</pre>
Then run:
<pre>apt update
apt install cin</pre>
<br/>
<div class="hint">
<h3 class="hint">Note for Debian 8 and 9</h3>
<div class="hintcontent">
Just like Ubuntu, Debian is more strict for licensing now. You will have to edit <i>/etc/apt/sources.list</i> so the added line contains <b>[trusted=yes]</b>.
The line for Debian 8 should be:
<pre>deb [trusted=yes] https://cinelerra-cv.org/five/pkgs/debian8 jessie main</pre>
or for Debian 9:
<pre>deb [trusted=yes] https://cinelerra-cv.org/five/pkgs/debian stretch main</pre>
</div></div>
      <p>If you want to update a previous install, run:</p>
<pre>apt update
apt upgrade cin</pre>
      <p>You can uninstall Cinelerra-GG by running:</p>
<pre>apt remove cin</pre>
    </div>
  </div>

  <div id="distro-fedora" class="button">
    <img src="/images/website/distro-logos/fedora.png" alt="Fedora Logo" title="Download Cinelerra-GG for Fedora" />
    <h4>Fedora</h4>
    <div class="details">
      <p>To install Cinelerra-GG on Fedora, run the following command in a terminal:</p>
<pre>dnf install cinelerra --repofrompath cincv,https://cinelerra-cv.org/five/pkgs/fedora/</pre>
      <p>You can uninstall Cinelerra-GG by running:</p>
<pre>dnf erase cinelerra</pre>
    </div>
  </div>

  <div id="distro-freebsd" class="button">
    <img src="/images/website/distro-logos/freebsd.png" alt="FreeBSD Logo" title="Download Cinelerra-GG for FreeBSD" />
    <h4>FreeBSD</h4>
    <div class="details">
      <p>We are excited that a FreeBSD port of Cinelerra-GG is now available for you.</p>
      <p>You can install a precompiled package with this command:</p>
      <pre>pkg install cinelerra-gg</pre>
      <p>Cinelerra-GG is also available by using a port:</p>
      <pre>cd /usr/ports/multimedia/cinelerra-gg && make install clean</pre>
      <p>Link to the port: <a href="https://www.freshports.org/multimedia/cinelerra-gg/">https://www.freshports.org/multimedia/cinelerra-gg/</a></p>
    </div>
  </div>

  <div id="distro-mint" class="button">
    <img src="/images/website/distro-logos/mint.png" alt="Linux Mint Logo" title="Download Cinelerra-GG for Linux Mint" />
    <h4>Linux Mint</h4>
    <div class="details">
      <p>To install Cinelerra-GG on Linux Mint 18, go to:<br>
      <b>System->Software Sources->Additional Repositories->Add a new repository</b>
      <br/>
      and enter the following line:</p>
<pre>deb [trusted=yes] https://cinelerra-cv.org/five/pkgs/mint xenial main</pre>
      <p>Afterwards, install it by entering the following commands into a terminal:</p>
<pre>apt update
apt install cin</pre>
      <p>If you want to update a previous install, run:</p>
<pre>apt update
apt upgrade cin</pre>
      <p>You can uninstall Cinelerra-GG by running:</p>
<pre>apt remove cin</pre>
    </div>
  </div>

  <div id="distro-opensuse" class="button">
    <img src="/images/website/distro-logos/opensuse.png" alt="OpenSUSE Logo" title="Download Cinelerra-GG for OpenSUSE" />
    <h4>openSUSE</h4>
    <div class="details"> 
<p>To install Cinelerra-GG on <b>openSUSE Leap 42.3</b>, run the following commands in a terminal:</p>
<pre>zypper ar -f https://cinelerra-cv.org/five/pkgs/leap/ cincv
zypper install -r cincv cinelerra</pre>
      <p>If you want to update a previous install, run:</p>
<pre>zypper refresh cinelerra
zypper up cinelerra</pre>
      <p>You can uninstall Cinelerra-GG by running:</p>
<pre>zypper remove cinelerra</pre>
<br/>

<div class="alert">
<h3 class="alert">Attention:</h3>
<div class="hintcontent">
<p>A special version with 10bit color support is also available. This can not be used with 8bit color files!</p>
<p>To install Cinelerra-GG <u>10bit</u> on <b>openSUSE Leap 42.3</b>, run the following commands in a terminal:</p>
<pre>zypper ar -f https://cinelerra-cv.org/five/pkgs/leap/ cincv
zypper install -r cincv cinelerra10bit</pre>
<p>If you want to update a previous install, run:</p>
<pre>zypper refresh cinelerra10bit
zypper up cinelerra10bit</pre>
      <p>You can uninstall Cinelerra-GG <u>10bit</u> by running:</p>
<pre>zypper remove cinelerra10bit</pre>
</div></div>
    </div>
  </div>

  <div id="distro-slackware" class="button">
    <img src="/images/website/distro-logos/slackware.png" alt="Slackware Logo" title="Download Cinelerra-GG for Slackware" />
    <h4>Slackware</h4>
    <div class="details">
    <div class="hint">
      <h3 class="hint">Note:</h3>
      <div class="hintcontent">
        <p>We're putting up 64bit packages as part of our Live Edition. Those are based on the very latest code and can be used on a regular Slackware installation, too. See our <a href="/cinelive.php/#slackinstall">CINELIVE page</a> for details.</p>
      </div></div>
      <p>After you've configured slackpkg to use our repository, install Cinelerra-GG with:</p>
<pre>slackpkg install cinelerra-goodguy</pre>
      <p>You can update Cinelerra-GG by running:</p>
<pre>slackpkg update
slackpkg install cinelerra-goodguy</pre>
<p>Remove it with:</p>
<pre>slackpkg remove cinelerra-goodguy</pre>
      <h4>Slackware32 builds</h4>
      <p>For the 32bit edition of Slackware, Good Guy is putting up builds by himself <a href="https://cinelerra-cv.org/five/tars/">here</a>.</p>
      <p>Look for a file with the syntax <i>cinelerra-5.1-<b>slk32</b>-14.2-i686-DATE.txz</i>. Extract it and run the binary "cin".</p>
      
      <p>If you want to build Cinelerra-GG from scratch, a SlackBuild is available <a href="https://git.cinelerra-cv.org/gitweb?p=schmatzler/cinelive.git;a=tree;f=SlackBuilds/cinelerra-goodguy">on our GIT repository</a>.</p>
    </div>
  </div>

  <div id="distro-ubuntu" class="button">
    <img src="/images/website/distro-logos/ubuntu.png" alt="Ubuntu Logo" title="Download Cinelerra-GG for Ubuntu" />
    <h4>Ubuntu</h4>
    <div class="details">
      <p>To install Cinelerra-GG, run the following commands in a terminal:</p>
<pre>apt install software-properties-common apt-transport-https</pre>
<p>For Ubuntu 14.04 (Trusty Tahr), run:</p>
<pre>apt-add-repository https://cinelerra-cv.org/five/pkgs/ub14</pre>
<p>For Ubuntu 16.04 (Xenial Xerus), run:</p>
<pre>apt-add-repository https://cinelerra-cv.org/five/pkgs/ub16</pre>
<p>For Ubuntu 17.04 (Zesty Zapus), run:</p>
<pre>apt-add-repository https://cinelerra-cv.org/five/pkgs/ub17</pre>
<p>For Ubuntu 18.04 (Bionic Beaver), run:</p>
<pre>apt-add-repository https://cinelerra-cv.org/five/pkgs/ub18</pre>
<div class="hint">
<h3 class="hint">Note for Ubuntu 16 - 18</h3>
<div class="hintcontent">
Starting with version 16 Ubuntu is more strict for licensing so you will have to edit
the file <i>/etc/apt/sources.list</i> so the added line contains <b>[trusted=yes]</b>.
The line should be:
<pre>deb [trusted=yes] https://cinelerra-cv.org/five/pkgs/ub16 xenial main</pre>
or for Ubuntu 17:
<pre>deb [trusted=yes] https://cinelerra-cv.org/five/pkgs/ub17 zesty main</pre>
or for Ubuntu 18:
<pre>deb [trusted=yes] https://cinelerra-cv.org/five/pkgs/ub18 bionic main</pre>
</div></div>
<p>Afterwards, run:</p>
<pre>apt update
apt install cin</pre>
      <p>If you want to update a previous install, run:</p>
<pre>apt update
apt upgrade cin</pre>
      <p>You can uninstall Cinelerra-GG by running:</p>
<pre>apt remove cin</pre>
    </div>
  </div>
  
</div>

<div class="clear"></div>

<h3 id="distro-details-header" class="download"></h3>

<div id="distro-details">
</div>

<h2><a name="subuilds">Alternative: Single-user builds</a></h2>
<p>These only have to be extracted and can be run directly with the file "cin". Using this method, multiple versions of Cinelerra-GG can be tested without deleting previous ones. An example: If you run into problems, you can run the old version again until there is a fix available.</p>
<a href="https://cinelerra-cv.org/five/tars/">You can go to the current single-user builds</a> or the <a href="https://cinelerra-cv.org/five/old_tars/">previous versions of the single-user builds</a>.

<h2><a name="source">Documentation and Source Code</a></h2>

<p>The current source of Cinelerra-GG is available as a .tgz file here:</p>
<p><a href="https://cinelerra-cv.org/five/pkgs/src/">Cinelerra-GG Source code</a></p>
<p>You can also <a href="https://git.cinelerra-cv.org/gitweb?p=goodguy/cinelerra.git;a=summary">check out the code</a> Good Guy is currently working on.</p>
<p>All of the new features of Cinelerra-GG are documented in a separate <a href="/five/Features5.pdf">features manual</a>, which also includes instructions on compiling the source code into a useable program. You can also read the <a href="https://cinelerra-cv.org/five/changelog.pdf">Changelog.</a></p>

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

<div class="lastmodified">Last modified on July 15, 2018</div>
</div>

<?php include "footer.php"; ?>
 </body>

</html>
