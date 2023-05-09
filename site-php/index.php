<?php

//demarrage du système des sessions sur PHP :
session_start();

if ( isset($_GET['deconnection']) ) { // Si l'on reçoit la variable "deconnection", qu'elle n'est pas vide

	unset( $_SESSION["ouverture"] ); //on efface la session "ouverture"

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Mon site</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>

<div class="corps">
	<p>
	<div class="contenu">
		
		<h3>Page d'authentification</h3>

		<br />
		<p>

		<form method="post" action="page.php">
			
				<p>
					<label>Votre pseudo :</label>
					<input type="text" name="pseudo" placeholder="Pseudo" />
				</p>
			
				<p>
					<label>Mot de passe :</label>
					<input type="password" name="mot_de_passe" placeholder="Mot de passe" />
				</p>
			
				<p>
					<input type="submit" value="Valider" />
				</p>
			
		</form>

		</p>

	</div>
	</p>
</div>

<div class="copyright">
© Eugène Lévêque
</div>

</html>
