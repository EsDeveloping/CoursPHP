<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Bienvenu sur L2Programming</title>
</head>
<body>
	<?php include 'entete.php' ?>
	<section id="corp">
		<?php include 'nav.php' ?>
		<section id="conteneurArcticle">
			<article>
				<form action="cible.php" method="POST">
					<p><label> Prénom : <input type="text" name="prenom"></label></p>
					<p><label>Homme :<input type="radio" name="type" value="homme"></label><label>femme :<input type="radio" name="type" value="femme"></label></p>
					<p><input type="submit"></p>
				</form>
			</article>
		</section>
	</section>
</body>
</html>