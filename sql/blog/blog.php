<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../style.css">
	<meta charset="utf-8">
	<title>Mon Blog</title>
</head>
<body>
	<?php include '../../entete.php' ?>
	<section id="corp">
		<?php include '../../nav.php' ?>
		<section id="conteneurArcticle">
			<h1>Mon Blog</h1>
			
			<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

				$requete = $bdd->query('SELECT * FROM blogBillet');

				while ($donnee = $requete->fetch()) {
					echo '<article><h1>' .$donnee['user'] . ' ' . $donnee['dateDeCreation'] . '</h1>';
					echo '<p>' . $donnee['contenu'] . '</p>';
					echo '<p><a href="blogCommentaire.php?id=' . $donnee['id'] .'"' . '>Blabla</a></p></article>'; 
				}

			 ?>
		
		</section>
	</section>
</body>
</html>