<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="styleFormulaire.css">
	<title>Création de compte</title>
</head>
<body>
	<?php include 'enteteCreationCompte.php' ?>
	<section id="corp">
		<!--<?php include 'nav.php' ?>-->

		<!-- Formulaire de souscription-->
		<div id="formulaireCreationCompte">
			<form action="addUser.php" method="POST">

				<p><label>Nom :</label></p>
				<p><input class="inputText" type="text" name="nom" id="nom" /><br></p>

				<p><label>Prenom</label></p>
				<p><input class="inputText" type="text" name="prenom" id="prenom"/><br></p>

				<p><label>Pseudo d'utilisateur</label></p>
				<p><input class="inputText" type="text" name="pseudo" id="pseudo"/><br></p>

				<p><label for="pass">Mot de passe</label></p>
				<p><input class="inputText" type="password" name="password" required></p>

				<p><label>Email :</label>
				<p><input class="inputText" type="email" name="email" id="email"><br></p>

				<p><a href="mentionLegal.phpp" id="boutonMention">Lire les mentions legal</a></p>
				<p id="mentionAccepted"><input type="checkbox" name="mentionLegal" required>J'ai lu et j'accepte les mention legal</p>
				
				<p><input type="submit"></p>			
			</form>

			<form id="formulaireConnection" action="connection.php" method="POST">
				<p><label for="pseudo">Peudo</label></p>
				<p><input class="inputText" type="text" name="pseudo" required></p>

				<p><label for="pass">Mot de passse</label></p>
				<p><input class="inputText" type="text" name="pass" required></p>

				<p><input type="submit" value="Connection"></p>
			</form>
		</div>
		<!-- 
			formulaire

			Nom
			Prenom
			Email

			Mention legale

		-->
	</section>
</body>
</html>