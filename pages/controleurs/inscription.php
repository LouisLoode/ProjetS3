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
    
	// Préparation de la requête
	$myRequete = 'SELECT COUNT(*) AS nbr FROM utilisateurs WHERE nom_user = "'.$login.'"';
	//var_dump($myRequete);
	
	// Execution de la requête
	$myCols = mysqli_query($myConnexion,$myRequete);

	$data = mysqli_fetch_array($myCols); 
    if($data[0] == 1)
    {
        $alert = message('Votre nom est déjà utilisé par un membre.', 3);
        $i++;
    }
 
    //Vérification du mdp
    if ($pass != $confirm || empty($confirm) || empty($pass))
    {
	    $alert = message('Votre mot de passe et votre confirmation diffèrent, ou sont vides.', 3);
        $i++;
    }
    
        //Vérification de l'adresse email
 
	// Préparation de la requête
	$myRequete = 'SELECT COUNT(*) AS nbr FROM utilisateurs WHERE email = "'.$email.'"';
	//var_dump($myRequete);
	
	// Execution de la requête
	$myCols = mysqli_query($myConnexion,$myRequete);

	$data = mysqli_fetch_array($myCols); 
    if($data[0] == 1)
    {
        $alert = message('Votre adresse email est déjà utilisée par un autre membre.', 3);
        $i++;
    }
    //On vérifie la forme maintenant
    if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email) || empty($email))
    {
        $alert = message('Votre adresse E-Mail n\'a pas un format valide', 3);
        $i++;
    }

  
	// Si il n'y a pas d'erreur on enregistre le membre dans la BDD
	if ($i==0)
   	{

		$myUser = inscription($_POST['login'], $_POST['email'], $_POST['password']);
		//var_dump($myUser);
		
		$alert = message('Votre inscription s\'est bien déroulée.', 1);
		
		include 'accueil.php';
        
   	}else{

		//On inclut la vue
		include(dirname(__FILE__).'/'.VUES.'/inscription.php');
	
	}

}else{
 
//On inclut la vue
include(dirname(__FILE__).'/'.VUES.'/inscription.php');

}
?>