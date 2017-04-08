<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Page d'acces</title>
</head>
<body>
	<h1>Entrer le mot de passe</h1>
	<img src="" alt="Image du cadenas verouiller">
	<form  action="pageProtege.php" method="POST">
		<label for="motDePasse">Entrer le mot de passe</label>
		<input type="password" name="motDePasse">
		<input type="submit" name="">
	</form>
	<?php 
		if (isset($_GET['val'])) {
			$val = (int) $_GET['val'];
			echo '<p>' . $val .'</p>';
		}
	 ?>
</body>
</html>