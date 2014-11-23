	<?php

	include 'includes/functions.php';

//afficher le Titre

	$myConnexion=connect();
	$id_article = $_GET['id_article'];
	$req="SELECT titre FROM articles WHERE articles.id_article = ". $id_article.";";
	//var_dump($req);
	$result = mysqli_query($myConnexion,$req);
	//var_dump($result);
	if($activearticle= mysqli_fetch_array($result)){
	?>

	<h1><?php echo $activearticle['titre']; ?></h1>

	<?php
	}

	disconnect($myConnexion);

	$a= display_article();
					
	?>

<p><a href="test_req.php"> Accueil </a></p>