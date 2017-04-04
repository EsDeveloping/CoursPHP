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
			<?php echo '<p style="color:red;">' . 'Bienvenue mr ' . $_GET['nom'] . ' ' . $_GET['prenom'] . ' sur L2Programing' . '</p>' ?>
			<p>Cepandant il vous suffi de changer les valuers dans la barre URL pour changer les données afficher. <br>Un utilisateur peut donc changer lui même les données envoyer au serveur donc <strong>vous pirater</strong></p>

			<article>
				<h3>Verifier les donnée</h3>
				<p>Verifier si les données existe grace a if(isset($_GET['nom']) par example</p>
					<?php if (isset($_GET['nom'])) {
					echo '<p style="color:green;">' . 'La variable nom est correctement créer' . '</p>';
				}else{
					echo '<p style="color:red;">' . 'La variable nom comporte une anomalie' . '</p>';} ?>
			</acticle>
		</section>
	</section>
</body>
</html>