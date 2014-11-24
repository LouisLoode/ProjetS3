<?php

// On appelle le haut de la page
include 'header.php';

//Préparation de la requête
$categories=liste_categories();

	foreach($categories as $data)
{
	?>

	<h1><a href="categorie.php?id=<?php echo $data['id_categorie']; ?>"><?php echo $data['nom_cat']; ?></a></h1>
	
						<h2>ID -> <?php echo $data['id_categorie']; ?></h2>

<?php
}
	
// On appelle le bas de la page
include 'footer.php';
?>