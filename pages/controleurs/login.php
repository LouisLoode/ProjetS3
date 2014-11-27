<?php
/* C'est en tout début de fichier que l'on vérifie les autorisations. Les 
news sont visibles par tous, mais si vous voulez en restreindre l'accès, c'est 
ici que cela se passe. */
 
//On inclut le modèle
include(dirname(__FILE__).'/'.MODELE.'/utilisateurs.php');
 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */






/*

	// Si les identifiants sont valides
	if (false !== $id_utilisateur) {

		$infos_utilisateur = lire_infos_utilisateur($id_utilisateur);
		
		// On enregistre les informations dans la session
		$_SESSION['id']     = $id_utilisateur;
		$_SESSION['pseudo'] = $nom_utilisateur;
		$_SESSION['avatar'] = $infos_utilisateur['avatar'];
		$_SESSION['email']  = $infos_utilisateur['adresse_email'];
		
		// Mise en place des cookies de connexion automatique
		if (false != $form_connexion->get_cleaned_data('connexion_auto'))
		{
			$navigateur = (!empty($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : '';
			$hash_cookie = sha1('aaa'.$nom_utilisateur.'bbb'.$mot_de_passe.'ccc'.$navigateur.'ddd');
			
			setcookie( 'id',            $_SESSION['id'], strtotime("+1 year"), '/');
			setcookie('connexion_auto', $hash_cookie,    strtotime("+1 year"), '/');
		}
		
		// Affichage de la confirmation de la connexion
		include CHEMIN_VUE.'connexion_ok.php';
	
	} else {

		$erreurs_connexion[] = "Couple nom d'utilisateur / mot de passe inexistant.";
		
		// Suppression des cookies de connexion automatique
		setcookie('id', '');
		setcookie('connexion_auto', '');
		
		// On réaffiche le formulaire de connexion
		include CHEMIN_VUE.'formulaire_connexion.php';
	}

*/


if($_POST){
	
	echo $_POST['email'].' '.$_POST['password'];
	
	$myUser = login($_POST['email'], $_POST['password']);
	//var_dump($myUser);

	// Si le mec est connecté on lui crée les sessions et cookies si besoin
	if($myUser != NULL) {
		
				
		header('Location: index.php?page=utilisateurs&='.$myUser['id_profil']);

	}

		else {

				
		$alert = message('Vos identifiants ne sont pas valides', 3);
		//On inclut la vue
		include(dirname(__FILE__).'/'.VUES.'/login.php');
		
	}

}

else{
 
 
//On inclut la vue
include(dirname(__FILE__).'/'.VUES.'/login.php');

}
?>