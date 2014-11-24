<?php

// On appelle le haut de la page
include 'header.php';

// Récupération de l'id de l'utilisateur indiqué dans l'URL
$id_user = $_GET['id'];


//Préparation de la requête
$user=display_utilisateur($id_user);


	foreach($user as $data)
{
	?>

	<h1><?php echo $data['nom_user']; ?></h1>
	
						<h2>De <?php echo $data['Email']; ?></h2>

<hr />
	<?php
	}



//Préparation de la requête
$article=articles_par_utilisateur($id_user);


	foreach($article as $data)
{
	?>

	<h1><?php echo $data['titre']; ?></h1>
	
						<h2>De <?php echo $data['nom_user']; ?></h2>
						<p>Publie le <?php echo $data['date']; ?></p> 
						<p>Dans la rubrique <?php echo $data['nom_cat']; ?> </p>
						<p><?php echo $data['contenu']; ?></p>
						<p>Note: <?php echo $data['note']; ?>/10</p>

	<?php
	}

	disconnect($myConnexion);
?>

<p><a href="index.php"> Accueil </a></p>