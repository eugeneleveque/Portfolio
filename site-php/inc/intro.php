
		<!-- PAGE PAR DEFAUT -->

		<!-- Nom du pseudo � afficher -->
		<h3>Bienvenue <?php echo $pseudo ?> !</h3>
		<p style="color:blue;">Bravo, cette page utilise PHP</p>
		<p>...</p>
		<p>Nous sommes le : <?php echo date('d/m/Y'); ?></p>
		<p>Il est : <?php echo date('H:i:s')?></p>
		<p>...</p>
			
		<!-- Un compteur de visite en PHP � inclure ? -->
		
		<?php include('compteur.php');
