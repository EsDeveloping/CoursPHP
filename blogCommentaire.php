<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Mon Blog : commentaire</title>
</head>
<body>
	<?php include 'entete.php' ?>
	<section id="corp">
		<?php include 'nav.php' ?>
		<section id="conteneurArcticle">
			<h1>Mon Blog : commentaire</h1>
			
			<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

				$prepare = $bdd->prepare('SELECT user, contenu, dateDeCreation FROM blogCommentaire WHERE idBillet=? ORDER BY dateDeCreation');

				$prepare->execute(array($_GET['id']));

				while ($donnee = $prepare->fetch()) {
					echo '<article><h1>' . $donnee['user'] . ' ' . $donnee['dateDeCreation'] . '</h1>';
					echo '<p>' . $donnee['contenu'] . '</p></article>';
				}


			 ?>

		</section>
	</section>
</body>
</html>