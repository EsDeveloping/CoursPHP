<?php
	// Connection
	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	// Requete SQL

	// SELECT = nom des colones separe par une virgule
	// FROM = nom de la table
	// WHERE = ou on trouve une certaine valeur dans une certaine colone ex: console="PC"
	// ORDER BY = classer par ex: classer par nom dans notre cas ORDER BY nom
	// DESC = classer dans l'order décroissant
	// LIMIT = nombre de ligne a extraire de la base de donnée max ex: 5 pour nous

	// L'order est trés important dans une requete  nomDesColones / nomDeLaTable / valeurChercher / ordre / limit
	//$reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console="PC" || console="PS2" ORDER BY nom DESC LIMIT 5');

	$requete = $bdd->prepare('SELECT console, nom FROM jeux_video WHERE console=?');
	$requete->execute(array($_GET['console']));
?>


<?php
	while ($donnees = $requete->fetch()) {
		echo '<p>' . $donnees['nom'] . '</p>';
	}
?>
