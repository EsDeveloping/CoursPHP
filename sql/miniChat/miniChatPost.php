<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=test','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	if (isset($_POST['pseudo']) && isset($_POST['message'])){
		$requet = $bdd->prepare('INSERT INTO miniChat(nom, message) VALUES(?,?)');
		$requet->execute(array($_POST['pseudo'], $_POST['message']));
	}else{
		echo 'noSet';
	}
	
	header('Location: miniChat.php');
 ?>