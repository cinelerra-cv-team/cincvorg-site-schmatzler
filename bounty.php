<?php 
include "header.php";

include "sidemenu.php"; 
?>


<div class="content">
<h1>Bounty!</h1>
<p>

<table class="bounty">
  <Tbody>
    <tr>
      <th>Category</th>
      <th>Task Name</th>
      <th>Requirements</th>
      <th>Bounty</th>
	<th>Status</th>
    </tr>

    <tr class="completed">
      <td class="category">new
codec</a></td>
      <td class="taskname">add
support for
Apple(tm)'s 2vuy uncompressed 8bit 4:2:2 video</td>

<td class="req">Unspecified</td>

     <td class="bounty">$70</td>
<td class="status">Completed by jsteward</td>

    </tr>

<tr>
 <td class="category">New container (file format)</td>
 <td class="taskname">Support for DVD-ready MPEG2-PS, single-pass, with multiplexing. 
 </td>
 <td class="req">
When the user chooses MPEG as rendering format, he shall be able to
render and multiplex audio and video in one pass, to an MPEG2 program
stream that dvdauthor can use directly.  The MPEG2 stream must be
playable on any compliant hardware DVD player.
<br>
The encoder shall be integrated in Cinelerra, and not depend on external 
executables.  Shared library dependencies are OK.
 </td>
 <td class="bounty">Euros 300</td>
 <td class="status">Open</td>
</tr>

<tr class="odd">
<td class="category">GUI <br>
 (depends on MPEG PS container)
</td>
<td class="taskname">Improved GUI separating default profiles and detailed options.</td>
<td class="req">
The GUI shall offer a few simple profiles, suitable for (but not limited
to) creating a 90 minutes long DVD from DV source material, with a fair 
mix of motion and detail.  The default profile must be suitable for both 
PAL and NTSC.<br>
In addition, the user interface shall expose most of the parameters 
that is relevant for performance and quality tweaking.  However, these
settings should be hidden in the default view (details>>, or similar...)
 </td>
 <td class="bounty">Euros 50</td>
 <td class="status">Open</td>
</tr>

<tr>
 <td class="category">Interlacing</td>
 <td class="taskname">
   Rendering interlaced content, without deinterlacing
 </td>
 <td class="req">
   Cinelerra must handle interlaced content gracefully, even when the resources have
   different interlacing order than the output format.  Projects may mix progressive,
   top field first and bottom field first clips.
 </td>
 <td class="bounty">Euros 200</td>
 <td class="status">Open</td>
</tr>

<tr class="odd">
 <td class="category">Rendering efficiency and quality</td>
 <td class="taskname">Streamcopying of temporally compressed video (MPEG1 and MPEG2)</td>
 <td class="req">
Only frames requiring a reencoding shall be reencoded during rendering.
The rest shall be streamcopied from the original resources.
<br>
The GUI shall present an option for this when the the output format
matches one of the input resources.  The UI must inform the user what
the target bitrate will be, and force the settings to be consistent
with that.
 </td>
 <td class="bounty">Euros 250</td>
 <td class="status">Open</td>
</tr>

  </tbody>
</table>
<strong> For more information contact the <a href="http://cvs.cinelerra-cv.org/contact.php">Cinelerra Community</a></strong>
</div>

<address>Last modified on 8 August 2008 </address>

<?php include "footer.php"; ?>
</body>
</html>
