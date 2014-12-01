<?php

 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */

// On définit la variable des erreurs pour justement éviter une erreur.
$i = 0; 

if($_POST){

	$login_erreur = NULL;
    $mdp_erreur = NULL;
    $email_erreur1 = NULL;
    $email_erreur2 = NULL;
    $tp_erreur = NULL;

 
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
        $login_erreur = 'Votre nom est déjà utilisé par un membre.';
        $i++;
    }
 
    //Vérification du mdp
    if ($pass != $confirm || empty($confirm) || empty($pass))
    {
        $mdp_erreur = 'Votre mot de passe et votre confirmation diffèrent, ou sont vides.';
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
        $email_erreur1 = 'Votre adresse email est déjà utilisée par un autre membre.';
        $i++;
    }
    //On vérifie la forme maintenant
    if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email) || empty($email))
    {
        $email_erreur2 = 'Votre adresse E-Mail n\'a pas un format valide';
        $i++;
    }

  
	// Si il n'y a pas d'erreur on enregistre le membre dans la BDD
	if ($i==0)
   	{

	$myUser = inscription($_POST['login'], $_POST['email'], $_POST['password']);
	//var_dump($myUser);
	
	echo 'inscription ok';
        
   	}


}else{
 
//On inclut la vue
include(dirname(__FILE__).'/'.VUES.'/inscription.php');

}
?>