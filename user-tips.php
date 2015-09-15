<?php
$title="Tools";
include "header.php";
include "sidemenu.php"; 
?>

<div class="content">
<h2>Patches</h2>
<h3>Cinelerra Bezier Patch</h3>
<blockquote>
<p><strong>Hermann Vosseler</strong> created this patch to get a usable bezier automation for Cinelerra 2.1CV fades, camera and projector. It retains backwards and (partially) upwards compatibility of session files. To know more read its <a href="http://ichthyostega.de/cinelerra/bezier-patch/">nice documentation</a>.
<p><b>Note: This has since been included in CinelerraCV</b></p>
</p>
</blockquote>

<h3>ffmpeg-2.x patches</h3>
<blockquote>
<p><strong>Sérgio Basto</strong> has created two patches for recent ffmpeg versions (using the --with-external-ffmpeg flag).</p>
<p>You can find the patches <a href="https://raw.githubusercontent.com/sergiomb2/cinelerra-cv/master/cinelerra-cv-ffmpeg_api2.2.patch">here</a> and <a href="https://raw.githubusercontent.com/sergiomb2/cinelerra-cv/master/cinelerra-cv-ffmpeg2.0.patch">here</a>.</p>
<p><b>Note:</b> These patches may be unstable. Use them at your own risk.</p>
</p>
</blockquote>
<h2>Tools</h2>

<h3>IMG2LIST - Cinelerra List Generator</h3>
<blockquote>
<p><strong>Claudio "Malefico" Andaur</strong> wrote a little application called <a
href="http://web.archive.org/web/20100612161802/http://www.malefico3d.org/blog-en/?page_id=224">IMG2LIST
0.1.5</a>, that is a Cinelerra List Generator for converting an image sequence to a single list file. This script generates a list 
out a frame of an images sequence and autodetects all related parameters with it, including number of frames, file format and image 
resolution. TIFF and PNG are now supported. Download it <a
href="http://web.archive.org/web/20100612161802/http://www.malefico3d.org/download/img2list-0.1.5.tar.gz" > here</a>. <br> 
(<a href="http://web.archive.org/web/20100419014438/http://www.malefico3d.org/blog/?page_id=333">Spanish version</a>)<br>
</p>
</blockquote>

<h3>Seven Gnomes</h3>
<blockquote>
<p><strong>Peter Semiletov</strong> wrote a program called 
<a href="http://semiletov.org/sevengnomes.html">Seven Gnomes</a>.
It is a simple GTK2-based utility
designed to simplify some tasks those useful when people work with
Cinelerra. Seven Gnomes UI is based on drag-and-drop, so to handle
files or directories you can just drop them at the Seven Gnomes
window. Seven Gnomes calls mpeg3toc to index MPEG1/2 files, mencoder
to convert video, and uses GTK functions to create Cinelerra-format
index/toc-files from the sequence of images. No open/save dialogs,
just "drag-and-drop" and few text entries with options. Any ideas
about improvements are welcome! 
</p>
</blockquote>

<h3>pngtoc.py</h3>
<blockquote>
<p><b>Доброслав Дичев</b> has created a workaround for <i>Seven Gnomes</i>:<br/>
"I used Seven Gnomes but it won't run when the name of the folder contains cyrillic characters.<br/>
That's why I made a little script which indexes a series of png files and creates a toc file.<br/>
Just copy it in the folder where the png series of files are and run it.<br/>
The script will ask you to give a name for the toc file, height and width of png images in pixels and fps (frames per second) and then creates the toc file."
</p>
<p><a href="/scripts/pngtoc.py">Download the script</a></p>
</blockquote>

<h3>mkframelist</h3>
<blockquote>
<p><strong>IL'dar "AkhIL" AKHmetgaleev</strong> wrote a program called <a href="http://akhilman.googlepages.com/mkframelist">mkframelist</a>, that is a command line tool for creating image lists. It supports every file format, EXR included. It autodetects image size and format. Optionally, framerate, size and format can be set.</p>
</blockquote>

<h3>exr2toc</h3>
<blockquote>
<p><strong>Andrey Neskreba</strong> wrote a python script called <a
href="http://www.assistcg.com/index.php/component/content/article/62.html">exr2toc</a>, that is an utility for generation of index TOC files from EXR image sequences. 
<br>
</p>
</blockquote>

<h3>cinelerra-slideshow</h3>
<blockquote>
<p><strong>Alexandre "wacky" Bourget</strong> wrote a python script called <strike><a
href="https://svn.bourget.cc/svn/wackystuff/programs/cinelerra-slideshow/">cinelerra-slideshow</a></strike>, a script that creates a cinelerra .xml file with some already pre-built slideshow tracks. (a bit old)
<br>
</p>
<p><b>Note:</b> Link is dead. Author contacted.</p>
</blockquote>

<h3>bin2cinelerra_header</h3>
<blockquote>
<p><strong>Dominic (Dom) C.</strong> wrote an application called <a
href="http://baltimorebarcams.com/eb/demos/bin2cinelerra_header.c">bin2cinelerra_header</a> 
(version 1.1.) that converts .png files to png.h. This is very useful if you want to create a
new skin for Cinelerra and you need png.h files instead of png files. With
bin2cinelerra_header you can simply create your .png images and then convert
them.<br>
<strong>Franco Iacomella</strong> updated and improved bin2cinelerra_header,
releasing <a
href="http://web.archive.org/web/20111014054652/http://francoiacomella.org/proyectos/tangolerra/lib/exe/fetch.php?id=start&cache=cache&media=bin2cinelerra_header-1.2.tar.gz"
>bin2cinelerra_header version 1.2</a>.
</p>
</blockquote>

<h3>yuvmotionfps</h3>
<blockquote>
<p><strong>Jerome Cornet</strong> wrote a piece of software called <a
href="http://jcornet.free.fr/linux/yuvmotionfps.html" >yuvmotionfps</a> that converts
frame rates on progressive streams using the <a href="http://mjpeg.sf.net" >
mjpegtools</a>. Unlike yuvfps which simply replicates or eliminates frames, yuvmotionfps calculates intermediates 
frames by interpolating the motion between frames, using an MPEG-style motion compensation algorithm.
</p>
</blockquote>

<h3>framerate</h3>
<blockquote>
<p><strong>David McNab</strong> wrote a little utility called <a href="http://web.archive.org/web/20080101000000*/http://freenet.org.nz/misc/framerate.py">framerate</a> to convert a video to same or different format with different framerate, with motion interpolation, using the yuvmotionfps and ffmpeg utilities. <em>framerate</em> is pretty simple. It eliminates the need for typing manual commands and creating huge yuv files on your disk. Its input and/or output can be piped. 
</p>
</blockquote>

<h3>Paste, Turn, Copy!</h3>
<blockquote>
<p><strong>Guy Sheffer</strong> wrote this small tool for writing Hebrew text with the Titler. <em> Paste, Turn, Copy!</em> reverses Hebrew to Left-To-Righ text and reencodes it as cp1252 (instead of cp1255 ) producing text ready to be pasted in the Titler. The compositor will preview the text with the correct direction and caption. This tool can be easily extended for Arabic too. It is available as <a href="http://gnet.homelinux.com/files/paste-turn-copy_0.5-1_i386.deb">.deb package</a> for Debian and Ubuntu. Mail guysoft [at] ort.org.il for help.
</p>
</blockquote>

<h3>CreateCueSheet</h3>
<blockquote>
<p><strong>Alexandre "wacky" Bourget</strong> wrote a python script called <strike><a
href="https://svn.bourget.cc/svn/wackystuff/programs/CreateCueSheet/">CreateCueSheet</a></strike>, a script that creates a PDF Cue-Sheet, based on LABELS in a Cinelerra .xml file. Creates a kind of storyboard, with labels frames marked. Uses LaTeX.
<br></p>
<p><b>Note:</b> Link is dead. Author contacted.</p>
</blockquote>

</div>

<address>Last modified on Sep 8 2015</address>
<?php include "footer.php"; ?>

</body>
</html>
