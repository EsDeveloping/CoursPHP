<html>
	<!-- teste de la base de donnée a distance -->

	<?php
	//		$host = "192.168.1.51";
	// $bdd = new PDO("mysql:host=$host;dbname=verif",'root','root');
		//$connection=mysql_connect('192.168.1.51','root','root');
	try{
		$bdd = new PDO('mysql:host=192.168.1.51;port=3306;dbname=verif', 'user2', 'user2', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	 }catch(Exception $e){
	 	die('Erreur : ' . $e->getMessage());
	 }


	 ?>



</html>