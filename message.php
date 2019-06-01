<?php

session_start();

if (isset($_SESSION["id"])) {
	

	if(isset($_POST["submit"])) { 
		

	$dossier = time();
	 mkdir($dossier);

		file_put_contents($dossier.'/message.txt','salut');
			echo "message recu";
		
	move_uploaded_file($_FILES['fichier']['tmp_name'],$dossier.'/capture.png');
	echo " ok";

	
	}

 }
 else {
 	header('revient: http://localhost/exobymi/login.php');
 }

	

?>
 <!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style type="text/css">
		body{
			background: #00cec9;
		}
		.fen{
			background: white;
			width: 50%;
			/*height: 25%;*/
			margin-left: 20%;
			margin-top: 10%;
			text-align: center;

		}
		#text{
			width: 60%;
			/*height: 50%;*/
		}

	</style>
</head>
<body>
	<div class="fen">
	<div>
		<h1></h1>
	</div>
	<form class="" action="" method="post" enctype="multipart/form-data">
		<label>
			<h1>Message:</h1>
			<input type="text" name="text">
		</label>
		<br>
  <input type="file" name="fichier" accept=".png">
  <input type="submit" name="submit" value="Envoyer">
</form>

	</div>
</body>
</html>