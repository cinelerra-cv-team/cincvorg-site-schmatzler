<?php 

include "header.php";
include "sidemenu.php"; 
?>


<div class='content'>
<h2>Shape Wipe transition</h2>

The <em>Shape Wipe</em> transition is based on gray-scale PNG images. Only 5 images are included by default in Cinelerra. <br>
You can extend the plugin by adding your own images. <!--Paolo Rampino wrote a HOWTO <a href="http://akiradproject.net/your_own_transition">Make your own video transition with Cinelerra and Inkscape--></a>

<p>
Some ready to use images are available for download:
<ul>
<li>
<p><b>Jean-Sebastien Tarot</b> contributed images that can be used by the <em>Shape Wipe</em> video transition.<br>
</p>

<div id="shapewipes">
<blockquote>
<a href="images/shapewipe/join.png"><img src="images/shapewipe/join.png" alt="join.png"></a>
<a href="images/shapewipe/demi-circle-verticale.png"><img src="images/shapewipe/demi-circle-verticale.png" alt="demi-circle-verticale.png"></a>
<a href="images/shapewipe/demi-circle-together.png"><img src="images/shapewipe/demi-circle-together.png" alt="demi-circle-together.png"></a>
<a href="images/shapewipe/demi-circle-horizontal-haut.png"><img src="images/shapewipe/demi-circle-horizontal-haut.png" alt="demi-circle-horizontal-haut.png"></a>
<a href="images/shapewipe/demi-circle-opposite.png"><img src="images/shapewipe/demi-circle-opposite.png" alt="demi-circle-opposite.png"></a>
<a href="images/shapewipe/demi-circle-non-opposite.png"><img src="images/shapewipe/demi-circle-non-opposite.png" alt="demi-circle-non-opposite.png"></a>
<br>
<a href="images/shapewipe/demi-circle-opposite-invert.png"><img src="images/shapewipe/demi-circle-opposite-invert.png" alt="demi-circle-opposite-invert.png"></a>
<a href="images/shapewipe/tile-circle.png"><img src="images/shapewipe/tile-circle.png" alt="tile-circle.png"></a>
<a href="images/multiple-circle.png"><img src="images/multiple-circle.png" alt="multiple-circle.png"></a>
<a href="images/quadrillage.png"><img src="images/quadrillage.png" alt="quadrillage.png"></a>
<a href="images/shapewipe/quadrillage1.png"><img src="images/shapewipe/quadrillage1.png" alt="quadrillage1.png"></a>
<a href="images/spiral.png"><img src="images/spiral.png" alt="spiral.png"></a>
<br>
<a href="images/shapewipe/circle-vertical.png"><img src="images/shapewipe/circle-vertical.png" alt="circle-vertical.png"></a>
<a href="images/shapewipe/cicle-vertical-invert.png"><img src="images/shapewipe/cicle-vertical-invert.png" alt="cicle-vertical-invert.png"></a>
<a href="images/shapewipe/quadri-circle.png"><img src="images/shapewipe/quadri-circle.png" alt="quadri-circle.png"></a>
<a href="images/shapewipe/demi-cercle.png"><img src="images/shapewipe/demi-cercle.png" alt="demi-cercle.png"></a>
<a href="images/shapewipe/triangle.png"><img src="images/shapewipe/triangle.png" alt="triangle.png"></a>
<a href="images/shapewipe/profondeur.png"><img src="images/shapewipe/profondeur.png" alt="profondeur.png"></a><br>
To preview those transitions watch this <a href="footage/test-shapewipe.mpeg">demo video</a>  (6.1 MB).
</blockquote>
</div>
</li>
<!--<li>A collection of images for the <em>Shape Wipe</em> transition is available at <a href="http://repository.akirad.net/pool/main-hardy/cinelerra-swtc_0.1akirad1.tar.gz">akiradproject</a>, also as a <a href="http://repository.akirad.net/pool/main-hardy/cinelerra-swtc_0.1akirad1_all.deb">deb file</a> that works on on all Debian based distros.
</li>-->
<li>
 <p>
  <a href="http://kdenlive.org">Kdenlive</a> has a lot of images that can be used also for the Cinelerra <em>Shape Wipe</em> video transition. They can be found at 
  <a href="http://www.kde-files.org/index.php?xsortmode=new&amp;page=0&amp;xcontentmode=683">KDE-files.org</a>
 </p>
</li>
<li>
  <p>
Nice 16:9 HD images suitable for the <em>Shape Wipe</em> transition in Cinelerra are available at <a href="http://www.assistcg.com/index.php/video/transitions.html">assistcg.com</a>. <br>
HD images can be downloaded only after registration. Scaled-down images (50 %) are available without registration. 
    <br>
    All images are royalty-free and can be freely downloaded and used.
    </p></li>
    <li>
    <p>
    You can find many SD and HD <em>Free Alpha Wipes</em> also at <a href="http://effectswiz.com/index.php">effectsWIZ</a>.
</li>
</ul>   
<br>

    <h3>How to include new images in the Shape Wipe Transition</h3>
    
<p>By default Cinelerra stores Shape wipe images in <code>$prefix/lib/cinelerra/shapewipe</code> (<code>$prefix</code> is the location of your Cinelerra, that is usually <code>/usr</code> for precompiled packages and <code>/usr/local</code> for a compiled program).<br>
The transition must be configurated to use a specific image.
To specify the image to use right-click on the transition icon in the timeline and select <em>Show</em> from the popup menu to open the <em>Shape Wipe</em> dialog. To change the shape in the <em>Shape</em> text field, click on <em>Browse</em> and select a new image. The last image specified will be the default one for the next transition.<br>
New images can be placed in any location. Use the <em>Browse</em> button to browse your files and specify the new location. <br>
</p>
<h2>New themes</h2>

Here you can find extra themes for Cinelerra interface.<br>
<ul>
<li><a href="http://blenderartists.org/forum/showthread.php?t=37452">Monkey</a> - an elegant dark grey theme, by <b>Fweeb</b></li>
<li><a href="http://fr.lprod.org/wiki/doku.php?id=video:cinelerra:pluginlprod" >
lprod</a> - a light colour theme. </li>
<li><a href="http://placide.home.sapo.pt/cinelerra01.html"> Greenelerra</a> - a
dark green theme, with light green and red used for emphasis, by
<b>Placido Andre Sousa</b>. (work in progress)</li>
<li><a href="http://francoiacomella.org/proyectos/tangolerra/doku.php?id=start"
>Tangolerra</a> - a light colour theme, with
<a href="http://tango.freedesktop.org/Tango_Desktop_Project" > Tango</a> artwork, by <b>Franco Iacomella</b>. (work in progress)</li>
</ul>
</div>


<address>Last modified on Nov 20 2011</address>

<?php include "footer.php"; ?>
</body> </html>
