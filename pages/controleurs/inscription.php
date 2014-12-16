<?php

 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */

// On définit la variable des erreurs pour justement éviter une erreur.
$i = 0; 

if($_POST){
 
    //On récupère les variables

    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm = $_POST['password2'];
    
    // On vérifie tout les champs via la fonction verif_inscription
	$erreur = verif_inscription($login, $email, $pass, $confirm);
  
	// Si il n'y a pas d'erreur on enregistre le membre dans la BDD
	if ($erreur==0)
   	{

		$myUser = creation_user($_POST['login'], $_POST['email'], $_POST['password']);
		//var_dump($myUser);
		
		$alert = message('Votre inscription s\'est bien déroulée.', 1);
		
		header('Location: index.html');
		exit;
        
   	}else{

		//On inclut la vue
		include(dirname(__FILE__).'/'.VUES.'/inscription.php');
	
	}

}else{
 
//On inclut la vue
include(dirname(__FILE__).'/'.VUES.'/inscription.php');

}
?>