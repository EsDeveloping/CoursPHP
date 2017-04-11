<!DOCTYPE html>
<html>
<head>
<!-- version du bolg avec requete qui contiènent des jointure -->

<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Mon Blog</title>
</head>
<body>
	<?php include 'entete.php' ?>
	<section id="corp">
		<?php include 'nav.php' ?>
		<section id="conteneurArcticle">
			<h1>Mon Blog</h1>
			
			<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
				$requete = $bdd->query('SELECT * FROM blogBillet');


				// ANALYSE de la premiere requete
				// ================================
				while ($donnee = $requete->fetch()) {


					// RECUPERATION DES COMMENTAIRE POUR CHAQUE POST
					// =============================================
					$reqCommentaire = $bdd->prepare('
						SELECT blogCommentaire.user as user, blogCommentaire.dateDeCreation as dateCreation, blogCommentaire.contenu as contenu, blogBillet.contenu as blogContenu
						FROM blogBillet, blogCommentaire
						WHERE blogBillet.id = blogCommentaire.idBillet && blogCommentaire.idBillet = ?
						ORDER BY blogCommentaire.dateDeCreation
						');
					$reqCommentaire->execute(array($donnee['id']));
					//---------------------------------------------------------------------------------


					// AFFICACHE DES POSTS
					// ===================
					echo '<article><h1>' .$donnee['user'] . ' ' . $donnee['dateDeCreation'] . '</h1>';
					echo '<p>' . $donnee['contenu'] . '</p>';
					echo '<p><a href="blogCommentaire.php?id=' . $donnee['id'] .'"' . '>Blabla</a></p>';
					//----------------------------------------------------------------------------------


						// AFFICHAGE DES COMMENTAIRES
						// ==========================
						echo '<div class="blocCommentaire">';
						while($commentaire = $reqCommentaire->fetch()){
							echo '<div class="commentaire"><div class="conteneur"><h3>' . $commentaire['user'] . "  reponse du : " . $commentaire['dateCreation'] . '</h3>';
							echo '<p class="enReponseA">' .  $commentaire['blogContenu'] . '</p></div>';
							echo '<p class="reponse">' . $commentaire['contenu'] . '</p>';
							echo '</div>';
						}//----------------------------------------------------------------------------------

					

					echo '</article>'; 
					$reqCommentaire->closeCursor();
				} // Fin D'ANALYSE DE LA PREMIERE REQUETE
				$requete->closeCursor();

			 ?>
		
		</section>
	</section>
</body>
</html>
