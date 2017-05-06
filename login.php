<?php

session_start();

if(!empty($_POST)) {
	$isim = $_POST['login'];
	$sifre = $_POST['password'];
		
	if($isim == 'test' && password_verify($sifre, '$2y$10$ZzV6jDI5HU.SUrpx0AFoQe9r49NI.NkpH5OhZ28Ug4G0MnmdVKaFy')) {
		$_SESSION['auth'] = 1;
	    
	    header('Location: main.php');
	    exit;
	}
}
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Infektion Dashboard Login</title>

  <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>
<style type="text/css">
.change-my-color {
    fill: white;
}
</style>
  <div class="wrap">
		<div class="avatar">
      <img src="images/photo.svg" class="change-my-color">
		</div>
		<form method="post" action="">
			<input type="text" name="login" value="" placeholder="Username" required>
			<div class="bar">
				<i></i>
			</div>
			<input type="password" name="password" value="" placeholder="Password" required></br>
			<button type="submit" name="commit" value="Login">Sign in</button>
		</form>
	</div>

  <script src="js/index.js"></script>

</body>

</html>