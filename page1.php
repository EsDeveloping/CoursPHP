<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Les bases</title>
</head>
<body>
<?php include 'entete.php' ?>
<section id="corp">
	<?php include 'nav.php' ?>
	<section id="conteneurArcticle">
		<h2>Ma première page en php</h2>
	<p><a href="page2.php">Lesson 2 en PHP</a></p>
 	<p><?php echo "Hello world"; ?></p>

 	<?php 
 		$adulte = false;
 		$age = 15;
 	 ?>

 	<?php 
 		echo 'Vous avez ' . $age . ' ans';
 	  ?>
 	<br>
 	<?php echo date("j,n,Y"); ?>
 	<br>
 	<?php 
 		if($age < 18){
 			echo "Vous etent mineur";
 			$adulte = false; 
 		}else{
 			echo "Vous etent adulte";
 			$adulte = true;
 		}
 	 ?>

 	 <p style="<?php 
 	 	if($adulte){
 	 		echo "color:blue;";
 	 	}else{
 	 		echo "color:red;";
 	 	}
 	  ?>">Acces</p>

 	  <p><?php 
 	  switch ($age) {
 	  	case 5:
 	  		echo "Tu as 5 ans";
 	  		break;
 	  	case 15:
 	  		echo "Tu as 15 ans";
 	  		break;

 	  	default:
 	  		echo "Age non reconnu";
 	  		break;
 	  }
 	   ?></p>

 	   <?php 
 	   	while ($age > 0) {
 	   		echo '<p>Vous avez ' . --$age . ' ans</p>';
 	   	}

 	   	for ($age=0; $age < 15; $age++) { 
 	   		echo '<p>Vous avez ' . $age . ' ans</p>';
 	   	}

 	    ?>
	</section>
</section>
</body>
</html>