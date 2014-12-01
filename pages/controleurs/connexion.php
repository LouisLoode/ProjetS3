<?php
 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */

if($_POST){
	
	$myUser = login($_POST['email'], $_POST['password']);
	//var_dump($myUser);

	// Si le mec est connecté on lui crée les sessions et cookies si besoin
	if($myUser != NULL) {
		
		 $_SESSION['id'] = $myUser['id_user'];
		 $_SESSION['pseudo'] = $myUser['nom_user'];	
		 $_SESSION['email'] = $myUser['email'];	
		
		$alert = message('Vous êtes dorénavant connecté', 1);

		header('Location: index.php');
		exit;


	}

		else {

				
		$alert = message('Vos identifiants ne sont pas valides', 3);
		//On inclut la vue
		include(dirname(__FILE__).'/'.VUES.'/connexion.php');
		
	}

}

else{
 
 
//On inclut la vue
include(dirname(__FILE__).'/'.VUES.'/connexion.php');

}
?>