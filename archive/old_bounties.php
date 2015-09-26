<?php
$title="Archived Bounties";
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

<div class='content'>
<p style="color:red;">Note: This content is obsolete and has been archived. <a href="/archive.php">Go back to the archive</a>.</p>
<h2>Old Bounties</h2>

<p style="color:red;">These bounties are no longer valid, most of the features already work in CinelerraCV 2.3.</p>
<table class="bounty">
  <Tbody>
    <tr>
      <th>Category</th>
      <th>Task Name</th>
      <th>Requirements</th>
      <th>Bounty</th>
	<th>Status</th>
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

</div>

<address>Last modified on Sep 9, 2015</address>

<!-- End body. -->
<?php include "../footer.php"; ?>
</body>
</html>


