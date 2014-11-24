<?php


// On appelle le haut de la page
include 'header.php';

//Préparation de la requête
$utilisateurs = liste_utilisateurs();

	foreach($utilisateurs as $data)
{
	?>

	<h1><a href="utilisateur.php?id=<?php echo $data['Id_Utilisateur']; ?>"><?php echo $data['nom_user']; ?></a></h1>
	
						<h2>ID -> <?php echo $data['Id_Utilisateur']; ?></h2>
						<h2>EMAIL -> <?php echo $data['Email']; ?></h2>
							<hr>
<?php
}

// On appelle le bas de la page
include 'footer.php';
?>