<?php
 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */

// Si l'id est renseigné, alors on veut voir un article en particulier.
if (isset($_GET['id'])) { 
	
	// Récupération de l'id de l'article indiqué dans l'URL
	$id_article = $_GET['id'];
	
	//Préparation de la requête
	$data = display_article($id_article);
	
	//On inclut la vue
	include(dirname(__FILE__).'/'.VUES.'/article.php'); 
	
}else{
	
	
	if (isset($_GET['by'])) { 
		
		// Récupération du type de triage
		$by = $_GET['by'];
	
		//Préparation de la requête
		$articles = liste_articles($by);
	
	}else{
	
	
		//Préparation de la requête
		$articles = liste_articles();
 
 	}
 
	//On inclut la vue
	include(dirname(__FILE__).'/'.VUES.'/articles.php');
	
}
?>