<?php 

include "header.php";
include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>


<div class="content">
 <h1>The features, the manual, the tutorials</h1>
 <h2>Cinelerra's features</h2>
 Linux Media Arts has an <a href="http://www.lmahd.com/cinelerra.html">impressive listing of Cinelerra's features</a>.  6-channel sound, HDTV,
  multiple effects, built-in videoscope and more.  With screenshots.
<h2>Cinelerra CV manual</h2>
  <ul>
<li>
<B>English:</B> 
<a href="docs/cinelerra_cv_manual_en.html">HTML</a> (A large page) |  
<a href="docs/split_manual_en/cinelerra_cv_manual_en.html">HTML</a> (One page per chapter)  |  
<a href="docs/cinelerra_cv_manual_en.pdf">PDF</a> (6 Mb)  |  
<a href="docs/cinelerra_cv_manual_en.txt">TXT</a> (500 Kb) </li>
<li>
<B>Francais:</B>
<a href="docs/cinelerra_cv_manual_fr.html">HTML</a> (Une grande page) | 
<a href="docs/split_manual_fr/cinelerra_cv_manual_fr.html">HTML</a> (Une page par chapitre) | 
<a href="docs/cinelerra_cv_manual_fr.pdf">PDF</a> (6 Mb) |
<a href="docs/cinelerra_cv_manual_fr.txt">TXT</a> (500 Kb) </li>
<li>
<B>Português do Brasil:</B>
<a href="docs/cinelerra_cv_manual_pt_BR.html">HTML</a> (Uma página gigante) | 
<a href="docs/split_manual_pt_BR/cinelerra_cv_manual_pt_BR.html">HTML</a> (Uma
página por capítulo) | 
<a href="docs/cinelerra_cv_manual_pt_BR.pdf">PDF</a> (6 Mb) |
<a href="docs/cinelerra_cv_manual_pt_BR.txt">TXT</a> (500 Kb) </li>
<li>
<B>Spanish:</B>
<a href="docs/cinelerra_cv_manual_es.html">HTML</a> (A large page) |
<a href="docs/split_manual_es/cinelerra_cv_manual_es.html">HTML</a> (One page per chapter) |
<a href="docs/cinelerra_cv_manual_es.pdf">PDF</a> (6 Mb) |    
<a href="docs/cinelerra_cv_manual_es.txt">TXT</a> (500 Kb) </li>
<li>
<B>Basque:</B> 
<a href="docs/cinelerra_cv_manual_eu.html">HTML</a> (A large page) |  
<a href="docs/split_manual_en/cinelerra_cv_manual_eu.html">HTML</a> (One page per chapter)  |  
<a href="docs/cinelerra_cv_manual_eu.txt">TXT</a> (500 Kb) </li>
 </ul>

Improve the Cinelerra CV manual by editing its pages in the <a
href="docs/wiki/doku.php">Cinelerra CV Wiki</a> 

  <h2><a name="video-tutorials">Cinelerra video tutorials</a></h2>
Some video tutorials (talk and screencast) are available on the internet:
 <ul>
 <li><a href="http://www.thesourceshow.org/node/11">Cinelerra tutorials</a>, by The Source - tutorials inside The Source Show.<BR>
<ul>
  <li>#1 is in <i>Episode 6 "The Return Of The Pixel"</i> from min 45 to min 60 <BR>
 (Introduction to Cinelerra and non linear editing, the 4 windows interface, project attributes, 
  loading files).</li>
<li>  #2 is in <i>Episode 1 "The Filesystem Menace"</i> from min 32 to min 54 <BR>
 (Arming tracks, sample zoom, selection boxes, two screen editing, cut and paste editing, adding 
  and moving tracks, drag and drop editing, trimming, transitions).</li>
<li>  #3 is in <i>Episode 2 "Attack Of The Elephants (Dream)"</i> from min 45 to 1:12 <BR>
 (Keyframes, camera and projector, masks, titles, effects). </li>
<li>  #4 is in <i>Episode 3 "Revenge of Cinelerra"</i> from min 10 to min 36 <BR>
 (Rendering for DVD, rendering for the web, transcoding with ffmpeg). </li>
</ul></li>
<li><a href="http://www.facilware.com/?page_id=1384">Video manuales de Cinelerra</a> - by FacilWare, in Spanish.</li>
<li><a href="http://www.assistcg.com/attachments/063_VideoTutorial.mov.zip">
Cinelerra: The Use of Transitions</a> - by <a href="http://www.assistcg.com">assistcg.com</a> (drag and drop mode, cut and paste mode, video transitions) - downloadable .zip file.</li>
</ul>
 <h2><a name="tutorials">Cinelerra tutorials</a></h2>
 <ul>
  <li><a href="http://www.robfisher.net/video/cinelerra1.html">Cinelerra Tutorial - Getting Started</a>, by Rob Fisher.
  </li>
  <li><a href="http://www.g-raffa.eu/Cinelerra/HOWTO">Cinelerra for Grandma </a>, Basic HOWTOs for very beginners, by Raffaella Traniello.
  </li>
     <li><a href="http://kutxa.homeunix.org/cinelerra">Edición de video bajo GNU/Linux (Cinelerra)</a>, in Spanish, by Gustavo Iñiguez Goya
  </li>
  <li><a href="http://www.funix.org/fr/linux/cinelerra.htm">Guide d'utilisation
de Cinelerra</a>, in French, by funix.org.
  </li> 
  <li><a href="http://laurent.bellegarde.free.fr/lprod/tutoriels/tutoriel_cinelerra_niv1_debutant.pdf">Faire un montage video</a>, French tutorial for beginners on Cinelerra HV,
by Laurent Bellegarde.
  </li>
  <li><a href="https://docs.indymedia.org/view/Sysadmin/Cinelerra">Capturando e editando video usando Software Livre</a>, in Portuguese, by Rafael Diniz
  </li>
  <li><a href="http://www.estudiolivre.org/tiki-index.php?page=Cinelerra">Tutorial Cinelerra</a>, in Portuguese, by Leo Germani
  </li>
  <li><a href="http://akiradproject.net/tutorial">Cinelerra is very easy</a> - in English and Italian - Introduction to Cinelerra, for beginners, by Paolo Rampino. 
  </li>
  <li><a href="http://www.billauer.co.il/cinelerra-video-edit-quickstart.html">Cinelerra quick start summary</a>, by Eli Billauer.</li>
</ul>
<h2><a name="links">HOWTOs</a></h2>
Some HOWTOs for specific needs are available on the internet:
<ul>
  <li><a href="http://crazedmuleproductions.blogspot.com/2007/06/beginners-guide-to-exporting-video-from.html">Beginner's Guide to Exporting Video from Cinelerra</a>, by Scott Frase
  </li>
  <li><a href="http://www.youtube.com/watch?v=MhaOgNQ0Bbc">Capturing desktop screens in Cinelerra</a>, screencast by Scott Frase
  </li>
  <li><a href="http://jcornet.free.fr/linux/chromakey.html">HOWTO use theChromakey (HSV) plugin</a>, by Jerome Cornet
  </li>
<li><a href="http://crazedmuleproductions.blogspot.com/2009/03/motion-stabilization-tutorial.html">Motion Stabilization Tutorial</a>, by Scott Frase
  </li>
  <li><a href="http://www.freenet.org.nz/misc/cintitles/">HOWTO make professional looking Scrolled Credits in Cinelerra</a>, by David McNab
  </li>
  <li><a href="http://makefx.wordpress.com/2008/10/13/how-to-pan-in-an-image-ken-burns-effect/">How to pan in an image (Ken Burns effect)</a>, by Roland C.</li>
  <li><a href="http://makefx.wordpress.com/2008/10/07/how-to-load-images-to-make-a-simple-presentation-slideshow/">How to load images to make a simple presentation (slideshow)</a>, by Roland C.</li>
  <li><a href="http://kutxa.homeunix.org/bloga/2007/08/13/crear-titulos-diferentes-con-cinelerra/#more-246">Crear títulos diferentes con Cinelerra</a>, in Spanish, by Gustavo Iñiguez Goya  - how to add effects to titles. With downloadable sample
projects.
  </li>
  <li><a href="http://akiradproject.net/your_own_transition"> HOWTO make your
own video transition with Cinelerra and Inkscape</a> in English and Italian, by
Paolo Rampino
  </li>
  <li><a href="http://www.g-raffa.eu/SimAV/">SimAV HOWTOs</a> - How to create a picture in picture effect, How to create overlays, How to change theme, by Simeon Volkel
  </li> 
  <li><a
href="http://www.alexandergrundner.com/2007/07/19/tips-for-transcoding-cinelerra-compatible-video-with-ffmpeg-mencoder">Tips
for Transcoding Cinelerra Compatible Video with FFmpeg, MEncoder</a>, by by
Alexander Grundner
  </li> 
  <li><a href="http://ffmpeg.mplayerhq.hu/compat.html">FFMPEG Compatibility</a> - HOWTO produce videos that can be played in common proprietary multimedia players
  </li>
</ul>
<h2><a name="links">Various links</a></h2>
<ul>
  <li><a href="http://www.neuron2.net/LVG/interlacing.html">Interlacing</a>, an
easy introduction to Interlacing for beginners.
  </li>  
  <li><a href="http://www.100fps.com">What is Deinterlacing? Facts,solutions,examples</a>, in depth description of interlacing.
  </li>  
  <li> <a href="http://people.xiph.org/~greg/video/ytcompare/comparison.html">YouTube / Ogg/Theora comparison</a>, interesting read, with video examples by Gregory Maxwell from Wikipedia</li>
  <li><a href="http://bmrc.berkeley.edu/frame/research/mpeg/mpeg2faq.html">MPEG-2 FAQ</a>.
  </li>    
  <li><a href="http://dvinfo.net/conf/showthread.php?t=76674">Exporting edited HD content back to the camcorder</a> (HDV related).
  </li>      
  <li><a href="http://lipas.uwasa.fi/~f76998/video/conversion">A Quick Guide to Digital Video Resolution and Aspect Ratio Conversions</a>.
  </li>        
  <li><a href="http://www.poynton.com/notes/colour_and_gamma/ColorFAQ.html">Colour specification and image coding</a> describes luma, chroma, and different colour models in detail.
  </li>
  <li><a href="http://wlug.org.nz/DVDVideo">DVD-VIDEO</a> - about DVD structure.
  </li> 
  <li><a href="http://womble.decadent.org.uk/talks/dvd-ukuug06/dvd-talk-ukuug06-paper.html">Creating
DVD videos on Linux and Unix</a> - an excellent high level overview of DVD authoring in general on Linux 
  </li>    
  <li><a href="http://fr.lprod.org/wiki/doku.php">lprod - Libre Production</a> a French Wiki full of resources for Open
Source video editing, especially for Cinelerra HV (among them an Ubuntu package).
  </li>
  <li><a href="http://www.g-raffa.eu/Cinelerra/cin_glossary.html">Cinelera CV Glossary</a>, for newbies.
  </li>     
<li><a href="http://carlospineiro.site90.com/">Cinelerra.ES</a>, website dedicated to video editing in GNU/Linux (in Spanish).</li>
</ul>
<h2>Cinelerra CV Wiki</h2>
<p>  <B>DokuWiki</B><BR>
A copy of the Cinelerra CV manual is available on a wiki. Users that want to
improve the manual are welcome to edit its pages at <a
href="docs/wiki/doku.php">Cinelerra CV Wiki</a> <BR>  </p>
<p>  <B>TWiki</B><BR>
The first Cinelerra CV wiki was set up by Alex Ferrer. At present is available
only through the <a href="http://web.archive.org/web/20070205230110/ftconsult.taxnetusa.com/twiki/bin/view/Cinelerra/CinelerraManualTOC">Internet
Archive</a>. It contains Cinelerra documentation, users' tips and other useful
resources for your project. Most of its content is now in the Cinelerra CV
manual. It has been translated to Slovenian, Spanish, Italian (partially), French.
</p>
 </div>

<address> Last modified on 9 August 2009 </address>

<?php include "footer.php"; ?>
 </body>
</html>
