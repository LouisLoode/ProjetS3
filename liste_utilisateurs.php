<?php

include 'inc/functions.php';

// Connexion à la BDD
$myConnexion=connect();

//Préparation de la requête
$utilisateurs=liste_utilisateurs();

	foreach($utilisateurs as $data)
{
	?>

	<h1><?php echo $data['Email']; ?></h1>
	
						<h2>ID -> <?php echo $data['Id_Utilisateur']; ?></h2>

	<?php
	}

	disconnect($myConnexion);
					
?>

<p><a href="index.php"> Accueil </a></p>




	
	

	
