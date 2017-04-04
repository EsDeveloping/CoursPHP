<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Transmetre des infos avec l'URL</title>
</head>
<body>
	<?php include "entete.php" ?>
	<section id="corp">
		<?php include "nav.php" ?>
		<section id="conteneurArcticle">
			<h2>Faire transité des informations avec l'URL</h2>
			<p>Il est possible de faire transité des information dans l'URL <br>Vous pourrez voir dans certain URL des information après l'adresse <br>example info=uneInformation <br>
			Cependant cette téchnnique a ces limites surtout en matière de sécurité nous allons voir comment l'utilisé et ou sont ces limites</p>
			<article>
				<h3>Les bases</h3>
				<p>Créer un page appelé bienvenu.php Nous allons intégrer ou il cera ecrit bienvenue 'intel' sur L2Programming</p>
				<p>1: Liens vers cette page</p>
				<p>'bienvenu.php?nom=Dupont&amp;prenom=Henri <br>
				Noter que le simbole & secrit <code>"&#39;"</code></p>
				<p><a href="bienvenu.php?nom=Dupont&amp;prenom=Henri" target="_blank">Bienvenu.php</a></p>
			</article>
		</section>
	</section>
</body>
</html>