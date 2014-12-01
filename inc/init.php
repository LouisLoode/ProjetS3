<?php 

	//On inclut les modèles
	include(dirname(__FILE__).'/modeles/articles.php');
	include(dirname(__FILE__).'/modeles/utilisateurs.php');
	
	
	//Préparation de la requête qui récupére le menu
	$categories_menu = liste_categories('menu', 'decroissant');
?>