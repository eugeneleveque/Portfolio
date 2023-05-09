<?php

/*
* INFOS
* Toutes les parties qui commencent par : ***
* sont à modfier sur ce TP
*/

//demarrage du système des sessions sur PHP :
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Mon site</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>

<?php

//*** Vérification du mot de passe reçu par le fichier index.php :
if ( isset($_POST['pseudo'] ) AND $_POST['mot_de_passe'] ==  "ok") { // Si le mot de passe est bon

	$_SESSION["ouverture"] = "on"; //on crée une session "ouverture" attribuée "on"

}

//Ici on conserve l'accès pour les autres pages :
if (isset($_SESSION["ouverture"]) AND $_SESSION["ouverture"] ==  "on") { // Si la session existe et qu'elle a comme attribut "on"

	//variable "pseudo" par défaut :
	$pseudo = "inconnu";
	
	//Stockage de la variable "pseudo", si elle a été expédiée par index.php :
	if ( isset($_POST['pseudo']) ) { 
		$pseudo = $_POST['pseudo'];
		$_SESSION['pseudo'] = $pseudo;
	}
	
	//si la session pseudo existe, alors on l'attribut sur la variable pseudo :
	//*** if ( isset($_SESSION["pseudo"]) ) $pseudo = ...?
	if ( isset($_SESSION['pseudo']) ) { 
		$pseudo = $_SESSION['pseudo'];
	}

    //on affiche le code html autorisé :
?>

<div class="corps header">
<!-- *** Utilisez PHP pour afficher le pseudo -->
Vous êtes connecté avec le pseudo : <strong style="color:green;"> <?php echo $pseudo; ?> </strong>
</div>

<div class="corps">

	<div class="menu">
	
		<div class="bouton">
			<a href="page.php">Accueil</a>
		</div>
		
		<div class="bouton">
			<a href="page.php?article=media">Images</a>
		</div>
		
		<div class="bouton">
			<a href="page.php?article=contact">Contact</a>
		</div>
		
	</div>
	
	<p>
		<div class="contenu">

		<!-- 
		Utilisez ICI la méthode INCLUDE() de PHP
		Les élements à inclure sont dans le dossier : "inc" 
		-->

		<?php
		
		// *** Si l'on reçoit (GET) la variable "article", qu'elle contient "mon_article" :
		if ( isset( $_GET['article'] ) AND $_GET['article'] == "media"  ) {
			include('inc/media.php'); //on inclus dans ce document la page "mon_fichier.php"
		}
		
		// *** D'autres actions ?
		if ( isset( $_GET['article'] ) AND $_GET['article'] == "contact"  ) {
			include('inc/contact.php'); //on inclus dans ce document la page "mon_fichier.php"
		}
		
		if (  isset( $_GET['article'] ) AND $_GET['article'] == "livredor") {
			include('inc/livredor.php'); //on inclus dans ce document la page "intro.php"
		}

		//Si l'on ne reçoit pas la variable "article" :
		if ( ! isset( $_GET['article'] ) ) {
			include('inc/intro.php'); //on inclus dans ce document la page "intro.php"
		}

		?>
			
		</div>
		
	</p>
	
</div>

<div class="copyright">
© Eugène Lévêque | <a href="index.php?deconnection=true"> Se déconnecter </a>
</div>

<?php

// On affiche un message d'erreur si le mot de passe est incorrect :

} else {
	
?>
	<div class="corps">
		<div class="contenu">
			<strong style="color:red;">Mot de passe incorrect</strong>
			<p>
			<a href="index.php">Recommencer</a>
			</p>
		</div>
	</div>
	
	<div class="copyright">
	© Eugène Lévêque
	</div>
	
<?php
//Fermeture de la conditionnelle :
}
?>

</html>
