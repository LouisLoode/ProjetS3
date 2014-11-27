<?php
/* C'est en tout début de fichier que l'on vérifie les autorisations. Les 
news sont visibles par tous, mais si vous voulez en restreindre l'accès, c'est 
ici que cela se passe. */
 
//On inclut les modèles
include(dirname(__FILE__).'/'.MODELE.'/utilisateurs.php');
include(dirname(__FILE__).'/'.MODELE.'/articles.php');
 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */

// Si l'id est renseigné, alors on veut voir un membre en particulier.
if (isset($_GET['id'])) { 

	// Récupération de l'id de l'utilisateur indiqué dans l'URL
	$id_user = $_GET['id'];
	
	
	//Préparation de la requête de récupération des infos de l'utilisateur
	$user = display_utilisateur($id_user);
	
	
	$by = null;
	$id_cat = null;
	
	//Préparation de la requête de récupération d'articles de l'utilisateur
	$article = liste_articles($by, $id_cat ,$id_user);
	
	//On inclut la vue
	include(dirname(__FILE__).'/'.VUES.'/utilisateur.php');

// Sinon on est envoyé vers la liste de tout les membres
}else{
	
	//Préparation de la requête
	$utilisateurs = liste_utilisateurs();
	 
	//On inclut la vue
	include(dirname(__FILE__).'/'.VUES.'/utilisateurs.php');
	
}
?>