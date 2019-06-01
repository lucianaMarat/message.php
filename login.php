<?php 
	if(!empty($_SESSION["id"])) {
   	header('chemin: http://localhost/www/exobymi/login.php' );
   echo "il faut rentrer votre identifiant sinon pas de message";
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="php_message.php ">
	<style type="text/css">
		body{
			background: #00cec9;
		}
		.fen{
			background: white;
			width: 30%;
			height: 25%;
			margin-left: 35%;
			margin-top: 15%;
			text-align: center;

		}

	</style>
</head>
<body>
	<div class="fen">
	<div>
		<h1>Entrer votre indentifiant</h1>
	</div>
	<form method="POST" action="message.php" enctype="multipart/form-data">
		<label>
			<input type="text" name="id">
		</label>
		
		<input type="submit" value="envoyer">
	</form>
	</div>
</body>
</html>