<?php 

	//On inclut les modèles
	include(dirname(__FILE__).'/modeles/articles.php');
	include(dirname(__FILE__).'/modeles/utilisateurs.php');
	
	
	//Préparation de la requête qui récupére le menu
	$categories_menu = liste_categories('menu', 'croissant');
	
	// Création de la variable qui permet de checker si on est connecté ou non
	$verif_connect = isset($_SESSION['id']) AND isset($_SESSION['pseudo']);
	$verif_alerts = isset($_SESSION['alerts']);
	
	// On initialise le tableau qui gére les messages d'erreur.
	$alerts = array();
?>