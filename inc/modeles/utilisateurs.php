<?php

//Vérifier les identifiants pour se connecter à la BDD
function login($email,$password) {
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	
	// Préparation de la requête
	$myRequete='SELECT nom_user, email, id_profil FROM utilisateurs WHERE email="'.$email.'" and password=PASSWORD("'.$password.'");';
	//var_dump($myRequete);
	
	// Execution de la requête
	$myCols=mysqli_query($myConnexion,$myRequete);
	
		while($row=mysqli_fetch_array($myCols)){
			$myUser['email']=$row['email'];
			$myUser['id_profil']=$row['id_profil'];
		}
		//var_dump($myCols);
		//var_dump($myUser);
		disconnect($myConnexion);
		return $myUser;
	}


//Lister les utilisateurs
function liste_utilisateurs(){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$utilisateurs = array();
	
	$order_by = '';

/*
	// Par date
	if ($by == 'date'){
		
		$order_by = 'ORDER BY articles.date';
	
	// Par auteur
	}elseif($by == 'auteur'){
		
		$order_by = 'ORDER BY utilisateurs.Id_Utilisateur';
		
	// Par note
	}elseif($by == 'note'){
		
		$order_by = 'ORDER BY articles.note';
	
	//Sinon
	}else{
		$order_by = '';
	}
*/

	// Préparation de la requête
	$myRequete = 'SELECT * FROM utilisateurs;
					'.$order_by;
	//var_dump($myRequete);			


	// Lancement de la requête
	$req=mysqli_query($myConnexion,$myRequete);
	//var_dump($myCols);


		// Boucle qui stocke les résultats dans un tableau
        while ($data = mysqli_fetch_assoc($req))
        {
                $utilisateurs[] = $data;
        }
 
		// Renvoi du tableau pour utilisation future
        return $utilisateurs;

}

//Afficher l'article sélectionné
function display_utilisateur($id_user){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$user = array();

	//var_dump($id_auteur);

	// Préparation de la requête
	
	$myRequete = 'SELECT *
						FROM utilisateurs
						WHERE id_user = '.$id_user.'';
	
	
	/*$myRequete = 'SELECT *
					FROM articles
					WHERE id_article = "'.$id_article.'"';*/
	//var_dump($myRequete);			


	// Lancement de la requête
	$req=mysqli_query($myConnexion,$myRequete);
	//var_dump($myCols);


		// Boucle qui stocke les résultats dans un tableau
        while ($data = mysqli_fetch_assoc($req))
        {
                $article[] = $data;
        }
 
		// Renvoi du tableau pour utilisation future
        return $article;

}


?>