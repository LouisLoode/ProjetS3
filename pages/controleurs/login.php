<?php
/* C'est en tout début de fichier que l'on vérifie les autorisations. Les 
news sont visibles par tous, mais si vous voulez en restreindre l'accès, c'est 
ici que cela se passe. */
 
//On inclut le modèle
include(dirname(__FILE__).'/'.MODELE.'/utilisateurs.php');
 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */

if($_POST){
	
	$myUser = login($_POST['email'], $_POST['password']);
	//var_dump($myUser);

	if($myUser!=NULL) {
		//echo 'Bonjour '.$myUser['email'];
		header('Location: index.php?page=utilisateurs&='.$myUser['id_profil']);
		exit();

	}

		else {

			echo 'Problème Identifiant';
		
	}

}

else{
 
//On inclut la vue
include(dirname(__FILE__).'/'.VUES.'/login.php');

}
?>