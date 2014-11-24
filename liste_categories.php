<?php

include 'inc/functions.php';

// Connexion à la BDD
$myConnexion=connect();

//Préparation de la requête
$categories=liste_categories();

	foreach($categories as $data)
{
	?>

	<h1><?php echo $data['nom_ru']; ?></h1>
	
						<h2>ID -> <?php echo $data['id_rubrique']; ?></h2>

	<?php
	}

	disconnect($myConnexion);
					
?>

<p><a href="index.php"> Accueil </a></p>




	
	

	
