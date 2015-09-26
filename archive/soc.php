<?php
$title="GSoC 2007";
include "../header.php";
?>

<style type="text/css">
table.bounty {
    width: 99%;
    border: 0.2em solid black;
    margin-bottom: 1em;
}

/*Table title line*/
table.bounty th { 
    padding: 1ex; 
    background: rgb(54, 54, 54)/*(200, 150, 180)*/;
    text-align: center;
    color: white;
    font-size: 1.2em;
}

table.bounty td { margin: 1ex; }

table.bounty td.category { 
    border-right: 0.1em solid; 
    width: 15%;}

table.bounty td.taskname { 
    border-right: 0.1em solid; 
    width: 25%;}

table.bounty td.req { 
    border-right: 0.1em solid; 
    width: 40%;}

table.bounty td.bounty {
    border-right: 0.1em solid; 
    width: 8%;
    text-align: right;
    font-size: 1.2em;
    font-weight: bold;}
    table.bounty td.status { 
    width: 12%;
    text-align: left;}

    table.bounty tr { background: rgb(208,208,255); }
    table.bounty tr.odd { background: rgb(240,240,255); }
    table.bounty tr.completed { background: rgb(220,250,220); }

td { 
    padding: 8px;
    vertical-align: top;
}

Tr.header { 
    background: rgb(221, 221, 221) none repeat scroll 0% 50%;
    font-weight: bold;
       }

td.title {
    background: rgb(221, 221, 221) none repeat scroll 0% 50%;
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    color: rgb(156, 66, 112);
}
</style>

<div class="content">
<h2>Google Summer of Code</h2>
<p style="color:red;">Note: This content is obsolete and has been archived. <a href="/archive.php">Go back to the archive</a>.</p> 
<p>With the hope to get some nice work done, we tried to get into <a href="http://code.google.com/soc/">Google Summer of Code</a> 2007. <br>
Here is the work we planned:</p>

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
<div class="lastmodified">Last modified on Sep 19, 2011</div>
</div>

<?php include "../footer.php"; ?>
</body>
</html>
