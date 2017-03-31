<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Deuxième page PHP</h1>
	<p><a href="index.php">Retour à l'index</a></p>
	<h2>Les tableaux de variable</h2>
	<section>
		<h3>Tabeau simple</h3>
		<p>Code</p>
		<p><code>$prenoms = array('Mathieu','Marie','Robert');<br>echo print_r($prenoms);<br>echo $prenoms[0];</code></p>
		<p>Resultat</p>
		<p class="resultat"><?php 
			/*$prenoms[0] = 'Mathieu';
			$prenoms[1] = 'Marie';
			$prenoms[2] = 'Robert';*/

			$prenoms = array('Mathieu','Marie','Robert');
			/*Pour afficher tout le tableau*/
			echo print_r($prenoms);
		?>
		<br>
		<?php
			echo $prenoms[0];		
		 ?></p>
	</section>
	<section>
		<h3>Tableau assiociatif</h3>
		<p>Code</p>
		<p><code>array('Mathieu','Marie','Robert');<br>$personne = array('nom" => 'Salmon', 'prenom' => 'Salmon', 'age' => 30</code></p>

		<?php 
			$noms = array('Mathieu','Marie','Robert');
			$personne = array('nom' => 'Salmon', 'prenom' => 'Salmon', 'age' => 30);
			for ($num=0; $num < 3; $num++) { 
				echo '<p>' . $noms[$num] . '</p>';
			}
			echo print_r($personne);
		 ?>
	</section>
</body>
</html>