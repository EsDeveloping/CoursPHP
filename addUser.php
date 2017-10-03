<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Add user</title>
</head>
<body>
	<?php 
		
		#echo print_r($_POST);
		if (isset($_POST['nom'])) {
			$nom = htmlspecialchars($_POST['nom']);
			echo '<p>Nom de l\'utilisateur ' . $_POST['nom'] . '</p>';
			if (isset($_POST['nom'])) {
				$prenom = htmlspecialchars($_POST['prenom']);
				echo '<p>Prenom de l\'utilisateur ' . $_POST['prenom'] . '</p>';
				if (isset($_POST['pseudo'])) {
					$pseudo = htmlspecialchars($_POST['pseudo']);
					echo '<p>Pseudo de l\'utilisateur ' . $_POST['pseudo'] . '</p>';
					if (isset($_POST['email'])) {
						$email = htmlspecialchars($_POST['email']);
						echo '<p>Email de l\'utilisateur ' . $_POST['email'] . '</p>';
						if (isset($_POST['password'])) {
							$password = htmlspecialchars($_POST['password']);
							echo '<p>Mot de passe ok</p>';
						}else{
							echo '<p>Mot de passe non saisie</p>';
						}
					}else {
						echo '<p>Email de l\'utilisateur ICONNU</p>';
					}
				}else {
					echo '<p>Pseudo de l\'utilisateur ICONNU</p>';
				}
			}else {
				echo '<p>Prenom de l\'utilisateur ICONNU</p>';
			}
		}else {
			echo '<p>Nom de l\'utilisateur ICONNU</p>';
		}

		$bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		$requet = $bdd->prepare('INSERT INTO user(nom,prenom,pseudo,email) VALUES (?,?,?,?)');
		$requet->execute(array($nom,$prenom,$pseudo,$email));

		$requet = $bdd->prepare('SELECT MAX(id) as lastID FROM user');
		$requet->execute();

		#echo '<p>' . print_r($requet->fetch()) . '</p>';

		$userId = $requet->fetch();
		$userId = $userId['lastID'];
		$requet = $bdd->prepare('INSERT INTO pass(user,pass) VALUES (?,?)');
		$requet->execute(array($userId,$password));

		header('Location: createUser.php')
	 ?>
</body>
</html>