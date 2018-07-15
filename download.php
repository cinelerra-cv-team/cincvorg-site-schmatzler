<?php
$title="Get Cinelerra";
//We need the grid system
$grid=1;

include "header.php";
?>

<script type='text/javascript'>
function init() {
	new Effect.Tooltip('annot1', 'Formats might be any supported by an <b>earlier</b> ffmpeg version and include:<br>Quicktime H264 Video and NTSC Video, AVI, FLAC, WAV, MPEG, MP3, MP4 H264, PNG, JPEG, and OGG.', {className: 'tip'});
	new Effect.Tooltip('annot2', 'Formats supported can be all of those supported by a <b>very recent</b> version of ffmpeg and include:<br>mp4, pro, m2ts, dvd, qt, f4v, flv, mp3, mkv, webm, xvid, bmp, mpeg, pam, pbm, pcx, pgm, pgmyuv, png, ppm, sgi, tiff, AVI, FLAC, Video FLASH, GIF, Quicktime DV/H264/H264 NTSC/H264 1080P Video, WMV, Real Media, MXF, OGG, WAV, MP4 H264, and JPEG.', {className: 'tip'});
	new Effect.Tooltip('annot3', 'Formats supported might be any supported by a <b>previous</b> ffmpeg version and include:<br>Quicktime H264 Video and NTSC Video, Video FLASH, FLAC, WMV, WAV, MPEG, MP3, MP4 H264, PNG, and JPEG.', {className: 'tip'});
	new Effect.Tooltip('annot4', 'Tested by active members of the community, found bugs are usually fixed within a few days.', {className: 'tip'});
	new Effect.Tooltip('annot5', 'International Language support, major Zoom Bar enhancements, apply masks before plugins, Asset Interlace, Manual GoTo, Export EDL, free movement of fragments, Titler Bbox, Titler Color, Reel number, Timecode support, Label Anchor/Folder/Info Edit support, lock labels from moving, Preview Slider, Find Object, and XML tag closer present.', {className: 'tip'});
	new Effect.Tooltip('annot6', 'Subtitle Track, Subtitle Script, more Alpha blending and PorterDuff operators, Capture and Recording, libmpeg and libzmpeg support, Edit_Keyframe built, 16-bit Hi Color Depth, Crash dump capture, Playback 5.1→2 driver downmix, Resizable fonts, Icons support, Asset program selection, Updatable Icon image, Toolset Visibility, Multi-screen / playback config support, Audio H/W gain and many more...', {className: 'tip'});
	new Effect.Tooltip('annot7', 'Nested assets, Align edits, Reverse edits, Multi-view window, Multi-pane, Titler font kerning, Playback speed automation,specify edit time in seconds, Realtime priority audio, and Filescene / Festival simple animation.', {className: 'tip'});
	new Effect.Tooltip('annot8', 'Standards are followed closely by anyone in the community who submits mods, improvements, bug fixes, and suggestions to ensure continuous stability with review completed by knowledgeable experts.', {className: 'tip'});
	new Effect.Tooltip('annot9', 'Incorporates all mods, enhancements, features, and fixes from the latest versions of CV, HV, patches located on the web, and some individual user repositories (where possible).<br>No strict requirements for providing patches - accepts coding help from anywhere.', {className: 'tip'});
	new Effect.Tooltip('distro-cinelive', '<b>All variants</b> | Based on Slackware 14.2. Our very own LiveDVD, regularly updated. This is the best choice for trying out different editions of Cinelerra and finding the one that suits you best.', {className: 'tip'});
	new Effect.Tooltip('distro-avlinux', '<b>CVA (akirad) + 5.0 (goodguy)</b> | Distribution designed to turn a regular old PC or Intel Mac into an Audio/Graphics/Video workstation.', {className: 'tip'});

	h.init();
}
Event.observe(window, 'load', init, false);
</script>

<div class="content">
<div class="header">
    <h1>Get Cinelerra</h1>
    <h2>Choose your version.</h2> 
</div>


<div class="l-content" style="margin-top: 15px;">
    <div class="cine-tables pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="cine-table cine-table-cv">
                <div class="cine-table-header">
                    <h2>Community</h2>

                    <span class="cine-table-edition">
                        CV <span>2.3</span>
                    </span>
                </div>

                <ul class="cine-table-list">
                    <li>Developed by users worldwide</li>
                    <li>Supported by the community</li>
                    <li>Slow code changes</li>
                    <li>Limited codec support<font id="annot1" class="annot">?</font></li>
                    <li>Well-tested and stable</li>
                    <li>Enhanced features not in HV<font id="annot5" class="annot">?</font></li>
                    <li>Includes changes after testing</li>
                    <li>Standards for new patches<font id="annot8" class="annot">?</font></li>
                </ul>

                <a href="/download_cv.php"><button class="button-choose pure-button">Choose</button></a>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="cine-table cine-table-gg cine-table-selected">
                <div class="cine-table-header">
                    <h2>Goodguy</h2>

                    <span class="cine-table-edition">
                        GG <span>5.1</span>
                    </span>
                </div>

                <ul class="cine-table-list">
                    <li>Own variant from Good Guy</li>
                    <li>Support by GG and the community</li>
                    <li>Quick enhancements</li>
                    <li>Extensive codec support<font id="annot2" class="annot">?</font></li>
                    <li>Tested<font id="annot4" class="annot">?</font></li>
                    <li>Features from CV, HV and own<font id="annot6" class="annot">?</font></li>
                    <li>Includes changes from all</li>
                    <li>No strict requirements for patches<font id="annot9" class="annot">?</font></li>
                    
                </ul>

                <a href="/download_gg.php"><button class="button-choose pure-button">Choose</button></a>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="cine-table cine-table-hv">
                <div class="cine-table-header">
                    <h2>Adam Williams</h2>

                    <span class="cine-table-edition">
                        HV <span>7.0</span>
                    </span>
                </div>

                <ul class="cine-table-list">
                    <li>Original author's version</li>
                    <li>No support offered</li>
                    <li>Annual updates (usually)</li>
                    <li>Limited codec support<font id="annot3" class="annot">?</font></li>
                    <li>Testing appears to be minimal</li>
                    <li>Some features not yet in CV<font id="annot7" class="annot">?</font></li>
                    <li>Rarely includes changes</li>
                    <li>No patch process documented</li>
                    
                </ul>

                <a href="http://www.heroinewarrior.com/cinelerra.php" target="_blank"><button class="button-choose pure-button">Choose</button></a>
            </div>
        </div>
    </div> <!-- end cine-tables -->

    <div class="information pure-g">
        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">More variants</h3>
                <p>These are not all variants of Cinelerra that currently exist, only the most important ones. There are even more experimental repositories available.</p>
                <p>We have summed up all of those <a href="/main_repo.php#experimental">on our repository page here</a>.
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Check out our LiveDVD</h3>
                <p>You can try out Cinelerra-CV without modifying your computer, thanks to Live DVDs that contain it.<br/>
		   Just download the .iso file, burn it on a DVD, insert it in the drive and restart your machine.</br>
		   Or put in on a USB stick with <a href="https://rufus.akeo.ie/" target="_blank">Rufus</a> or <a href="https://unetbootin.github.io/" target="_blank">UNetbootin</a>.</p>

		  <div id="distro-cinelive" class="livecd">
			<a href="/cinelive.php" ><img src="images/website/livecd-logos/cinelive.png" alt="CINELIVE Logo" /></a>
			<h4>CINELIVE</h4>
		  </div>
		  <div id="distro-avlinux" class="livecd">
			<a href="http://www.bandshed.net/avlinux/" target="_blank" ><img src="/images/website/livecd-logos/avlinux.png" alt="AVLinux Logo" /></a>
			<h4>AVLinux</h4>
		  </div>
	        </p>
            </div>
        </div>

    </div> <!-- end information -->
</div> <!-- end l-content -->

<div class="lastmodified">Last modified on July 15, 2018</div>
</div>

<?php include "footer.php"; ?>
 </body>

</html>
