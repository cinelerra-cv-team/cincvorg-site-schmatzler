<?php
$title="LiveDVD";
include "header.php";
?>

<div class="content">
<div class="header">
    <img style="width:100%;max-width:480px;" src="/images/website/livecd-logos/cinelive-light.png" alt="cinelive-logo"/>
    <h2>A Linux distribution for video production</h2> 
</div>

<p><a href="/images/website/cinelive-screenshot.png"><img style="float: left;padding-right:20px;width:100%;max-width:200px;" src="/images/website/cinelive-screenshot-thumb.png"/></a></p>
<p>Our very own LiveDVD (based on <a href="http://slackware.com">Slackware 14.2</a>) comes with all branches of Cinelerra - CV, HV, 5.1, merge-4, CVA, CVE.</p>
<p>It also includes various other tools for video production and conversion to make editing easier:
<ul>
<li>Seven Gnomes (drag-and-drop indexer and converter)</li>
<li>FFMultiplex (multiplex audio and video streams)</li>
<li>ffDiaporama (slideshow video creator)</li>
<li>tragtor (conversion tool for ffmpeg)</li>
<li>Audacity and LADSPA (alter soundfiles in various ways)</li>
</ul>
</p>

<p>All packages are updated regularly and can also be kept up to date on a DVD (until a reboot).</p>

<br/>

<h2>DOWNLOAD</h2>

<p>This is the latest beta release of CINELIVE. It will become final with the release of Slackware 14.2.</p>
<div>
   <a class="pure-button pure-button-primary" href="/cinelive-xfce-beta4.iso">Download Beta4</a>
   <a class="pure-button pure-button-secondary" href="https://schmatzler.de/tmp/cinelive-xfce-beta4.iso">Mirror</a>
</div>
<p>Build date: <b>April 24, 2016</b></p>
<p>MD5SUM: <b>12ec948d02647b018d109de0874de001</b></p>
<p>Username/Password: <b>live</b></p>

<br/>

<h2>INSTALL ON USB</h2>
<p>The USB version has a major advantage to the DVD variant: It is "persistent" - meaning that the OS stores your updates on the USB stick.</p>
<p>In order to protect your sensitive private data in case you lose your USB stick (or in case it gets stolen) you can enhance your persistent USB Live OS with an encrypted homedirectory and/or an encrypted persistence file, to be unlocked on boot with a passphrase that only you know.</p>
 <div class="alert">
   <h3 class="alert">Attention:</h3>
   <div class="hintcontent">
     <p>While you can use tools like Rufus or UNetbootin to install the ISO to a USB stick, it will behave like a DVD and will not be writeable afterwards!</p>
 </div></div>
<p><a href="https://git.cinelerra-cv.org/gitweb?p=schmatzler/cinelive.git;a=blob_plain;f=iso2usb.sh;hb=HEAD">A script is available</a> which allows you to transfer the ISO image content to a USB stick, making some modifications depending on the script's parameters.</p>

 <div class="hint">
   <h3 class="hint">Note:</h3>
   <div class="hintcontent">
     <p>Ubuntu/Debian distributions need <i>squashfs-tools</i> and <i>libcdio-utils</i> to be installed for the script to work.</p>
 </div></div>

This script, called <a href="https://git.cinelerra-cv.org/gitweb?p=schmatzler/cinelive.git;a=blob_plain;f=iso2usb.sh;hb=HEAD">'iso2usb.sh'</a>, accepts the following parameters: <pre>
  -c|--crypt size|perc       Add a LUKS encrypted /home ; parameter is the
                             requested size of the container in kB, MB, GB,
                             or as a percentage of free space.
                             Examples: '-c 125M', '-c 1.3G', '-c 20%'.
  -f|--force                 Ignore most warnings (except the back-out).
  -h|--help                  This help.
  -i|--infile <b>&lt;filename&gt;</b>     Full path to the ISO image file.
  -o|--outdev <b>&lt;filename&gt;</b>     The device name of your USB drive.
  -p|--persistence <b>&lt;name&gt;</b>    Custom name of the 'persistence' directory/file.
  -u|--unattended            Do not ask any questions.
  -v|--verbose               Show verbose messages.
  -w|--wait<b>&lt;number&gt;</b>          Add <b>&lt;number&gt;</b> seconds wait time to initialize USB.
  -C|--cryptpersistfile size|perc
                             Use a LUKS-encrypted 'persistence' file instead
                             of a directory (for use on FAT filesystem).
  -P|--persistfile           Use an unencrypted 'persistence' file instead
                             of a directory (for use on FAT filesystem).
</pre>

<p><b>Examples:</b></p>
<ul>
<li>Create a USB version of CINELIVE, where the USB stick is known to the system as /dev/sdX. Note - the value for the output parameter is the device name of the stick and not one of its partitions!
    <pre>./iso2usb.sh -i cinelive.iso -o /dev/sdX</pre>
</li>
<li>Create a USB Live like above, but this time adding an encrypted /home filesystem with 750 MB of space, and at the same time increase the wait time on boot to 15 seconds (useful for slow USB media that fail to start the Live OS otherwise):
    <pre>./iso2usb.sh -i cinelive.iso -o /dev/sdX -c 750M -w 15</pre>
</li>
<li>Create a USB Live with an encrypted /home (allocating 30% of the stick's free space for /home) and where the persistent data will be stored in a container file instead of a directory:
    <pre>./iso2usb.sh -i cinelive.iso -o /dev/sdX -c 30% -P</pre>
</li>
<li>Create a USB Live with both the /home and the persistent data encrypted (the persistence filesystem will be 300 MB in size):
    <pre>./iso2usb.sh -i cinelive.iso -o /dev/sdX -c 30% -C 300M</pre>
</li>
</ul>

<br/>

<h2>INSTALL ON HDD</h2>
<p>Since Beta3, we have included an installer called 'setup2hd' that can be run directly from the running LiveDVD.</p>
<p>Open a terminal and run the script as root to install and configure everything needed:</p>
<pre>su -c setup2hd</pre>

 <div class="hint">
   <h3 class="hint">Note:</h3>
   <div class="hintcontent">
     <p>You must have an existing <u>ext4</u> partition (>=4GB) and a <u>swap</u> partition on your drive.</p>
     <p>Newer machines may also need an EFI partition (setup2hd will tell you if it needs one).</p>
     <p>All of these partitions can be created with gparted, which is accessible from the "System" menu.</p>
 </div></div>
 
<br/>
 
<h2>INSTALL ON SLACKWARE64</h2>

<p>All of our packages can be used on Slackware64-current (soon to be 14.2).</p>
<p>Configure it to use our repository to get the latest packages:</p>
<ul>
<li>1. Install <a href="http://slakfinder.org/slackpkg+.html">slackpkg+</a></li>
<li>2. Edit <i>/etc/slackpkg/slackpkgplus.conf</i> and make sure you <u>alter</u> <b>REPOPLUS</b> and <u>add</u> <b>MIRRORPLUS</b> to create a new repository 'cinelerracv':
<pre>
# List repositories you want to use (defined below)
REPOPLUS=( slackpkgplus cinelerracv )

# Repository for Cinelerra-CV
MIRRORPLUS['cinelerracv']=https://cinelerra-cv.org/repo/
</pre></li>
<li>3. Fetch our GPG key and install the packages:
<pre>
slackpkg update gpg
slackpkg install cinelerracv
</pre></li>

<div class="lastmodified">Last modified on April 24, 2016</div>
</div> 

<?php include "footer.php"; ?>

     </body> </html>
