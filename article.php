<?php

include 'inc/functions.php';

// Connexion à la BDD
$myConnexion=connect();

// Récupération de l'id de l'article indiqué dans l'URL
$id_article = $_GET['id'];

//Préparation de la requête
$article=display_article($id_article);

	foreach($article as $data)
{
	?>

	<h1><?php echo $data['titre']; ?></h1>
	
						<h2>De <?php echo $data['nom_au']; ?></h2>
						<p>Publie le <?php echo $data['date']; ?></p> 
						<p>Dans la rubrique <?php echo $data['nom_ru']; ?> </p>
						<p><?php echo $data['contenu']; ?></p>
						<p>Note: <?php echo $data['note']; ?>/10</p>

	<?php
	}

	disconnect($myConnexion);

	$a= display_article();
					
?>

<p><a href="index.php"> Accueil </a></p>




	
	

	
