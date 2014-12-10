<?php
 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */

// Si la variable action n'est pas définie, on la défini pour éviter une erreur dans le switch



if(isset($_GET['action'])){
	$action = $_GET['action'];
}else{
	$action = 'voir';
}

switch ($action) // On indique l'action que l'on souhaite effectuer.
{ 
	
    case 'modifier': // dans le cas ou l'on souhaite modifier le profil.
        
        if (!$verif_connect){ 

		$alert = message('Vous devez être connecté pour accéder à cette page.', 3);

		//On inclut la vue
		header('Location: connexion.html');
		exit;
			
		}
		
		if($_POST){
			
			/*
			//$myUser = login($_POST['email'], $_POST['password']);
			//var_dump($myUser);
		
			// Si le mec est connecté on lui crée les sessions et cookies si besoin
			//if($myUser != NULL) {
				
				 $_SESSION['id'] = $myUser['id_user'];
				 $_SESSION['pseudo'] = $myUser['nom_user'];	
				 $_SESSION['email'] = $myUser['email'];	
				*/
				$alert = message('Le formulaire est ok', 1);
				//On inclut la vue
				include(dirname(__FILE__).'/'.VUES.'/modif-profil.php');
		
			/*}
		
				else {
		
						
				$alert = message('Vos identifiants ne sont pas valides', 3);
				//On inclut la vue
				include(dirname(__FILE__).'/'.VUES.'/modif-profil.php');
				
			}*/
		
		}else{
		 
		//On inclut la vue
		include(dirname(__FILE__).'/'.VUES.'/modif-profil.php');
		
		}
        
    break;
    
    default:
		// Si l'id est renseigné, alors on veut voir un membre en particulier.
		if (isset($_GET['id'])) { 
		
			// Récupération de l'id de l'utilisateur indiqué dans l'URL
			$id_user = $_GET['id'];
			
			// On récupére la valeur de la variable qui récupére le numéro de la page. Si la variable est vide, alors on attribue la valeur par défaut 1.
			$page = (isset($_GET['p']) && ctype_digit($_GET['p']) ) ? $_GET['p'] : 1;
			
			$by = null;
			$id_cat = null;
			
			
			//Préparation de la requête de récupération des infos de l'utilisateur
			$data = display_utilisateur($id_user);
			
			$user_infos = $data['0'];
		
			
			//Préparation de la requête de récupération d'articles de l'utilisateur
			$articles = liste_articles($by, $id_cat ,$id_user);
		
			
			// Compte le nombre de lignes du tableau renvoyé par la variable liste_articles.
			$nb_articles = count($articles);
			
			// On divise le nombre d'articles du tableau par le nombre d'éléments qu'on veut par pages.
			$nb_page = ceil($nb_articles / ARTICLES_PAGES);
			
			// On génére la liste des pages.
			$listePage = get_list_page($page, $nb_page);
			
			//On inclut la vue
			include(dirname(__FILE__).'/'.VUES.'/profil.php');
		
		// Sinon on est envoyé vers la liste de tout les membres
		}else{
			
			//Préparation de la requête
			$utilisateurs = liste_utilisateurs();
			 
			//On inclut la vue
			include(dirname(__FILE__).'/'.VUES.'/utilisateurs.php');
			
		}
}

?>