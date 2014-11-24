<?php

// On appelle le haut de la page
include 'header.php';

// Récupération de l'id de l'article indiqué dans l'URL
if($_GET['id'] != null){
$id_cat = $_GET['id'];
}

//Préparation de la requête
$articles=articles_par_categories($id_cat);

	foreach($articles as $data)
{
	?>

	<h1><?php echo $data['titre']; ?></h1>
	
						<h2>De <?php echo $data['nom_user']; ?></h2>
						<p>Publie le <?php echo $data['date']; ?></p> 
						<p>Dans la categorie <?php echo $data['nom_cat']; ?> </p>
						<p><?php echo $data['contenu']; ?></p>
						<p>Note: <?php echo $data['note']; ?>/10</p>

<?php
}

// On appelle le bas de la page
include 'footer.php';
	
?>