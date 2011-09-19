<?php

include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>


<div class="content">
<h2>Google Summer of Code</h2>

<p>With the hope to get some nice work done, we tried to get into <a href="http://code.google.com/soc/">Google Summer of Code</a>. <br>
Here is the work planned:</p>

<table class="bounty">
    <tr>
      <th>Category</th>
      <th>Task</th>
      <th>Requirements</th>
      <th>Mentor</th>
	<th>Status</th>
    </tr>

    <tr class="odd">
     <td class="category">Driver</a></td>
     <td class="taskname">
	My favorite project is to make X11, X11-XV, and X11-GL drivers into a single 
	driver which decides at runtime which accelerations are available and 
	dynamically load GL libraries. That way it's not necessary to have separate 
	builds for OpenGL and non-OpenGL support. And it's also possible to make ATI 
	drivers work.</td>
     <td class="req">OpenGl X11 X11-XV X11-GL</td>
     <td class="bounty">Johannes Sixt</td>
     <td class="status">Open</td>
    </tr>  

     <tr class="even">
     <td class="category">Base</a></td>
     <td class="taskname">
	<a href="http://www.pipapo.org/pipawiki/Cinelerra/Developers/ct/MediaManager">
http://www.pipapo.org/pipawiki/Cinelerra/Developers/ct/MediaManager</a>
	</td>
     <td class="req"></td>
     <td class="bounty"></td>
     <td class="status">Open</td>
	</tr>

	<tr class="odd">
	<td class="category">GUI and media</td>
	<td class="taskname">Editing with proxies (low res or low quality
	 copies, to lower CPU load or I/O), transparently
	<td class="req">
	 <ul>
	  <li>GUI that offers re-encoding to a proxy format.
	  <li>GUI that enables switching between proxy and original
	  <li>(optional) re-calculating x,y values in effects that
	   depend on size and scale.
	 </ul>
	<td class="bounty">Herman Robak
	<td class="status">Open
	</tr>

	<tr class="even">
	 <td class="category">Losslees codecs</td>
	 <td class="taskname">Add support for the huffyuv codec, 
	  the ffmpeg ffv1 codec (optional) and the DV50 codec (optional)</td>
	 <td class="req">
	 <ul>
	   <li>The codec(s) must be fully integrated into 
	    Cinelerra's Render dialog, with single-pass rendering/muxing.
	   <li>Realtime playback performance and responsive seeking on
	    baseline hardware.
	 </ul>
	 </td>
	 <td class="bounty">Herman Robak</td>
	 <td class="status">Open</td>
	</tr>

	<tr class="odd">
	 <td class="category">Easy DVD-ready MPEG2 rendering</td>
	 <td class="taskname">Support for the MPEG container,
	   creating DVD-ready MPEG2 program streams in a single
	   operation.</td>
	 <td class="req">
	  <ul>
	   <li>Multiplexing must be automatic, not requiring manual intervention.
	   <li>The GUI must offer defaults suitable for VCD and DVD.
	   <li>The output MPEG2 files must work with dvdauthor without
	    modification.
	  </ul>
	 </td>
	 <td class="bounty">Herman Robak</td>
	 <td class="status">Open</td>
	</tr>

</table>
</div>

<address> Last modified on Sept 19 2011 </address>

<?php include "footer.php"; ?>
</body>
</html>
