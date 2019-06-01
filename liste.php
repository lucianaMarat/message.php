


<!DOCTYPE html>
<html>
<head>
	<title>affiche</title>
</head>
<body>
	<div id="container">
		<h1>liste des elements du dossier</h1>
		<ul>
			<?php 
			// creer une variable dont la condition qui ouvre le dossier 
			  if ($nouveaudossier = opendir('C:\wamp64\www\exobymi\timestamp')) {
			  	// la variable affiche est celle qui permet de lire le contenu du dossier  puis les achiffe
			  	while (false!== $affiche = readdir($nouveaudossier)) {
			  		if ($affiche != '.' && $affiche != '..') {
			  			 echo '<li><a href ="timestamp/'.$affiche . '">' .$affiche. '</a></li>';
			  		}
			  		
			  	}
			 	 // fermeture du dossier
			 	closedir($nouveaudossier);
			  }
			 ?>
		</ul>

	</div>

</body>
</html>