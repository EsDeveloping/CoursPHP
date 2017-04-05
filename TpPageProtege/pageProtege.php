<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Page protege</title>
</head>
<body>
	<?php 
		$motDePasse = 'Kangourou';
		if (isset($_POST['motDePasse'])){
			if (htmlspecialchars($_POST['motDePasse']) == $motDePasse) {
				echo '<h1 style="color:green;">' . "Page déverouiller" . '</h1>';
			}else{
				echo '<h1 style="color:red;">' . "Page verouiller" . '</h1>';
			}
		}
	 ?>
</body>
</html>