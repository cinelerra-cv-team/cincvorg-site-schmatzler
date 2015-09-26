<?php 
$title="Bounty";
include "header.php";
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
<div class="header">
    <h1>Bounty!</h1>
    <h2>Invest some cash to get new features</h2> 
</div>
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

  </tbody>
</table>

<p><h3>Oops! :-( There are no bounties available at the moment. If you want to spend some bucks to get a feature working, please send a message to the mailing list.</h3></p>
<strong> For more information contact the <a href="http://cinelerra-cv.org/contact.php">Cinelerra Community</a>.</strong>
</div>

<address>Last modified on Sep 9, 2015 </address>

<?php include "footer.php"; ?>
</body>
</html>
