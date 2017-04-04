<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Page de recupération d'info en PHP</title>
</head>
<body>
	<?php include 'entete.php' ?>
	<section id="corp">
		<!--<?php include 'nav.php' ?>-->
		<section id="conteneurArcticle">
			<p>Bonjour <?php echo htmlspecialchars($_POST['prenom']); ?></p>
			<?php
				if(isset($_POST['type'])){
				echo 'Sexe : ' . htmlspecialchars($_POST['type']);
				}else {
					echo '<p style="color:red;">radio sexe unChecked</p>';
				} ?>
			<p><br><br><a href="page5.php">Retour au formulaire</a></p>
		</section>
	</section>
</body>
</html>