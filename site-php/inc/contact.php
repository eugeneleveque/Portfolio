
		<!-- PAGE contact -->

		<h3> Nous contacter </h3>

<?php
		
		/*
		
		Utilisez ici la méthode isset(); si la variable existe, 
		et la méthode $_POST[]; ce qui a été reçu ... 
		
		Utilisez la fonction : file_put_contents(); 
		pour sauvegarder le contenu du formulaire.
		
		*/

		$mon_fichier = 'formulaire.txt';
		$data = "";

		if( isset($_POST["c_nom"])) {
			$data = $_POST["c_nom"];
		}
		
		if( isset($_POST['c_pnom'])) {
			$data = $data." \n".$_POST["c_pnom"];
		}

		if( isset($_POST['c_tel'])) {
			$data = $data." \n".$_POST["c_tel"];
		}

		if( isset($_POST['c_mail'])) {
			$data = $data." \n".$_POST["c_mail"];
		}

		if( isset($_POST['c_msg'])) {
			$data = $data." \n".$_POST["c_msg"];
		}
		
		file_put_contents($mon_fichier, $data);
	
		if( !isset( $_POST['goto_send'] ) ){
			echo "<h4 style='color:red'>Le formulaire n'a pas été expédié !</h4>";
		} else {
			echo "<h4 style='color:green'>Le formulaire a été expédié !</h4>";
		}
		
?>

		<form method="post" action="page.php?article=contact">
			
			<div class="formulaire">
			
				<p>
					<input type="text" placeholder="Votre nom" name="c_nom" />
				</p>
			
				<p>
					<input type="text" placeholder="Prénom" name="c_pnom" />
				</p>
				
				<p>
					<input type="text" placeholder="N° de téléphone" name="c_tel" />
				</p>
				
				<p>
					<input type="text" placeholder="Email" name="c_mail" />
				</p>
					<textarea  placeholder="Votre message ..." style="height:150px" name="c_msg"></textarea>
				<p>
					<input type="submit" name="goto_send" value="Envoyer...">
				</p>
				
			</div>
			
		</form>
		
		<form>
			<textarea disabled="true" style="height:150px" name="infos">Vos réponses au formulaire sont: <?php echo "\n".$data?></textarea>
		</form>


		<br />
		<p>
			<!-- ICI l'IFRAME de GOOGLE MAP, SANS CSS (style=) -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10752.27410772841!2d-2.78534225329974!3d47.64423516699362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1b20908af1%3A0xadfdfbb2c67dbf7e!2sIUT%20Vannes%20-%20Universit%C3%A9%20Bretagne%20Sud!5e0!3m2!1sfr!2sfr!4v1670940189113!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</p>