<html>

	<head></head>

	<body>
		<h1><u>IMAGES</u></h1>
		
		<?php
		//chemin du dossier :
		$glob_dir = "./image/";

		$files = glob($glob_dir . "*");
		/* Dans le cas d’un filtrage des {extensions}, GLOB_BRACE doit être associé : */

		//$files = glob("*.{jpg,jpeg,png,gif}", GLOB_BRACE);

		//Nombre de départ à incrémenter :

		$i=0;

		foreach($files as $image) {
			//on incrémente une integer $i :
			$i++;

			echo "

			<p>

			<h2>Image ".$i.":</h2>

			<img style='display:inline-block; border: 3px solid black;' src='" . $image . "' />

			</p>

			";

		}

		if( ! $files )echo "Pas d'images.";
		?>
	</body>
</html>