<?php
 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */

	// Si le mec est connecté on le vire, il a rien a faire ici.
	if ($verif_connect){ 

		$alert = message('Vous êtes déjà connecté !', 3);

		//On inclut la vue
		header('Location: index.html');
		exit;
			
	}

		if($_POST){
			
			$emailPost = $_POST['email'];
			$passwordPost = $_POST['password'];
			
			$myUser = login($emailPost, $passwordPost);
			//var_dump($myUser);
		

			if($myUser['password'] == sha1($passwordPost)){
				
				 $_SESSION['id'] = $myUser['id_user'];
				 $_SESSION['pseudo'] = $myUser['nom_user'];	
				 $_SESSION['email'] = $myUser['email'];	
				 $_SESSION['role'] = $myUser['role'];
				
				$alert = message('Vous êtes dorénavant connecté', 1);
		
				header('Location: index.html');
				exit;
		
		
			}
		
				else {
		
						
				$alert = message('Vos identifiants ne sont pas valides', 3);
				
				header('Location: connexion.html');
				exit;
				
			}
		
		}
		
		else{
		 		 
		//On inclut la vue
		include(dirname(__FILE__).'/'.VUES.'/connexion.php');
		
		}
	
?>