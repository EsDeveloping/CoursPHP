<?php 
	if(isset($_POST['pseudo']) and isset($_POST['pass'])){
		$bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		$requet = $bdd->prepare('SELECT prenom, nom, pseudo, email FROM user
			INNER JOIN pass ON idUser = user
			WHERE pseudo = ? AND pass = ?');

		$requet->execute(array($_POST['pseudo'], $_POST['pass']));

		echo print_r($requet->fetch());
	}
 ?>