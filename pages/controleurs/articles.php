<?php
/* C'est en tout début de fichier que l'on vérifie les autorisations. Les 
news sont visibles par tous, mais si vous voulez en restreindre l'accès, c'est 
ici que cela se passe. */
 
//On inclut le modèle
include(dirname(__FILE__).'/'.MODELE.'/articles.php');
 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */

// Si l'id est renseigné, alors on veut voir un article en particulier.
if (isset($_GET['id'])) { 
	
	// Récupération de l'id de l'article indiqué dans l'URL
	$id_article = $_GET['id'];
	
	//Préparation de la requête
	$article = display_article($id_article);
	
	//On inclut la vue
	include(dirname(__FILE__).'/'.VUES.'/article.php'); 
	
}else{
	
	// Récupération du type de triage
	$by = $_GET['by'];

	//Préparation de la requête
	$articles = liste_articles($by);
 
	//On inclut la vue
	include(dirname(__FILE__).'/'.VUES.'/articles.php');
	
}
?>