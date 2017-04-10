<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Mini Chat</title>
</head>
<body>
	<?php include 'entete.php' ?>
	<section id="corp">
		<?php include 'nav.php' ?>
		<section id="conteneurArcticle">
			<h1>Mini Chat</h1>
				<form action="miniChatPost.php" method="POST">
					<label for="pseudo">Pseudo<input type="text" name="pseudo" value=""></label>
					<br>
					<label for="message">MESSAGE<input type="text" name="message" value=""></label>
					<input type="submit" name="">
				</form>
				<br><br>

				<?php 
					// Gestion de la base de donnée
					$bdd = new PDO('mysql:host=localhost;dbname=test','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				
					$derligne = $bdd->query('SELECT ID FROM miniChat ORDER BY ID DESC LIMIT 1');
					
					$int = $derligne->fetch();
					$numeroDeLigne = $int['ID'] - 4;


					$requete = $bdd->prepare('SELECT ID, nom, message FROM miniChat Where ID>=? ORDER BY ID');

					$requete->execute(array($numeroDeLigne));

					while($donnee = $requete->fetch()){
						echo '<p><strong>' . $donnee['nom'] . ' : </strong> ' . $donnee['message'] . '</p>';
					}
			 	?>
		</section>
	</section>
</body>
</html>	
