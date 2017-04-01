<!DOCTYPE html>
<html>
<head>
	<title>L2Programming</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'entete.php' ?>

	<section id="corp">

		<?php include 'nav.php' ?>

		<section id="conteneurArcticle">
			<h2>Les tableaux de variable</h2>
			<p><a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/les-tableaux">Lien vers le cour OpenClassRooms</a></p>
			<article>
				<h3>Tabeau simple</h3>
				<p>Code</p>
				<img src="code/tableau1.png" alt="image tableau + printr.png">
				<p>Resultat</p>
				<p class="resultat">

				<?php 
					$prenoms = array('Mathieu','Marie','Robert');
					print_r($prenoms);
				?>
			</article>

			<article>
				<h3>Tableau assiociatif</h3>
				<p>Code</p>
				<img src="code/tableau2.png" alt="tableau2.png">
				<p>Resultat</p>
				<?php 
					$personne = array('nom' => 'Salmon', 'prenom' => 'Emerick', 'age' => 30);
					echo $personne['nom'] . '<br />';
					echo $personne['prenom'] . '<br />';
					echo $personne['age'] . '<br />';
				 ?>

			</article>

			<article>
				<h3>fonction des boucle foreach</h3>
				<p>Ce type de boucle permet de visualiser des boucle très façilement</p>
				<p>Code</p>
				<img src="code/tableau3.png" alt="tableau3.png">
				<p>Resultat</p>
				<?php 
					$personne = array('nom' => 'Salmon', 'prenom' => 'Emerick', 'age' => 30);

					foreach ($personne as $pers) {
						echo $pers;
					}
				 ?>

			</article>
		</section>
	</section>
</body>
</html>