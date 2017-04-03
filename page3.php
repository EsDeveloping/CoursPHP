<!DOCTYPE html>
<html>
<head>
	<title>les Fonctions PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'entete.php' ?>
	<section id="corp">
		<?php include 'nav.php' ?>
		<section id="conteneurArcticle">
			<h2><strong>Les fonctions PHP</strong></h2>
			<article>
					<H3>Utilité</H3>
					<p>Les fonctions PHP sont trés utile pour le pas retaper le même code des dixaines de fois <br>On peut créer un fonction qui efeectura certaine actions, donner une information, effectuer un calcul pour vous ....</p>
					<p>Beaucoup de fonction PHP existe déjà vous ne devrez pas avoir a en créer beaucoup, il cependant important de savoir les utilisées</p>
			</article>

			<article>
				<h3>utiliser une fonction déjà existante</h3>
				<p>esseyon de faire un strlen de Bienvenu sur L2Programming</p>
				<p><?php 
				echo strlen("Bienvenu sur L2Programming") ?></p>
				<p>autre essai avec str_shuffle</p>
				<p><?php 
				echo str_shuffle("Bienvenu sur L2Programming") ?></p>
				<p>les dates</p>
				<p><?php echo date('d');	echo date('m'); echo date('Y');
				?></p>
			</article>

			<article>
				<h3>Créer ça propre fonction</h3>
				<p>Créon une fonction qui dirai 'Bienvenue sur L2Programming à quelque personne</p>
				<p>Voici le code de déclaration de la fonction</p>
				<?php 
					function BienvenuSurL2P($nom){
						echo '<p>' . 'Bienvenue sur L2Programming ' . $nom . '</p>';
					}

					$personne = array('Toto', 'Zaza', 'Billy', 'Momo');

					foreach ($personne as $nom) {
						BienvenuSurL2P($nom);
					}
				 ?>
			</article>
		</section>
	</section>
</body>
</html>