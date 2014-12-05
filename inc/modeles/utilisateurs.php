<?php

//Vérifier les identifiants pour se connecter à la BDD
function login($email, $password) {
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	
	$myUser = array();
	
	// Préparation de la requête
	
	$myRequete = 'SELECT nom_user, email, id_user FROM utilisateurs WHERE email="'.$email.'" and password=PASSWORD("'.$password.'");';
	// var_dump($myRequete);
	
	// Execution de la requête
	$myCols = requete($myRequete);
	
		while($row = mysqli_fetch_array($myCols)){
			$myUser['email'] = $row['email'];
			$myUser['id_user'] = $row['id_user'];
			$myUser['nom_user'] = $row['nom_user'];
		}
		//var_dump($myCols);
		//var_dump($myUser);
		return $myUser;
}

//Vérifier les identifiants pour se connecter à la BDD
function creation_user($login, $email, $password) {
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	
	// Préparation de la requête
	$myRequete = 'SELECT nom_user, email, id_profil FROM utilisateurs WHERE email="'.$email.'" and password=PASSWORD("'.$password.'");';
	

	$myRequete='INSERT INTO utilisateurs ( id_user , nom_user , password , email , date_inscription )
        VALUES ("", "'.$login.'", PASSWORD("'.$password.'"), "'.$email.'", NOW() );';
	//var_dump($myRequete);
	
	// Execution de la requête
	$myCols = requete($myRequete);


		//return $myUser;
}

//Vérifier les identifiants pour se connecter à la BDD
function verif_inscription($login, $email, $password) {
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	
	// Préparation de la requête
	$myRequete = 'SELECT nom_user, email, id_profil FROM utilisateurs WHERE email="'.$email.'" and password=PASSWORD("'.$password.'");';
	

	$myRequete='INSERT INTO utilisateurs ( id_user , nom_user , password , email , date_inscription )
        VALUES ("", "'.$login.'", PASSWORD("'.$password.'"), "'.$email.'", NOW() );';
	//var_dump($myRequete);
	
	// Execution de la requête
	$myCols = requete($myRequete);


		//return $myUser;
}

// Modifie le profil de l'utilisateur
function modif_profil($login, $email, $nom_user, $bio, $facebook, $twitter, $instagram, $vimeo, $tumblr, $linkedin, $soundcloud, $youtube) {
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	
	$myUser = array();
	
	// Préparation de la requête
	$myRequete = 'SELECT nom_user, email, id_profil FROM utilisateurs WHERE email="'.$email.'" and password=PASSWORD("'.$password.'");';
	

	$myRequete='INSERT INTO utilisateurs ( id_user , nom_user , password , email , date_inscription )
        VALUES ("", "'.$login.'", PASSWORD("'.$password.'"), "'.$email.'", NOW() );';
	//var_dump($myRequete);
	
	// Execution de la requête
	$myCols = requete($myRequete);


		//return $myUser;
}

//Lister les utilisateurs
function nbr_utilisateurs($where){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	if($where != ''){
		$where = 'WHERE '.$where;
	}

	// Préparation de la requête
	$myRequete = 'SELECT COUNT(id_user) as NbrUsers FROM utilisateurs '.$where.';';
	//var_dump($myRequete);			
	
	// Lancement de la requête
	$req = requete($myRequete);
	//var_dump($myCols);

	// On sort la valeur hors de la table pour avoir le compte total des users.
	$data = mysqli_fetch_assoc($req);

	$nbrUsers = $data['NbrUsers'];
 
		

        return $data['NbrUsers'];

}

//Lister les utilisateurs
function liste_utilisateurs(){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$utilisateurs = array();
	
	$order_by = '';

	// Préparation de la requête
	$myRequete = 'SELECT * FROM utilisateurs;
					'.$order_by;
	//var_dump($myRequete);			


	// Lancement de la requête
	$req = requete($myRequete);
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
	$req = requete($myRequete);
	//var_dump($myCols);


		// Boucle qui stocke les résultats dans un tableau
        while ($data = mysqli_fetch_assoc($req))
        {
                $infos[] = $data;
        }
 
		// Renvoi du tableau pour utilisation future
        return $infos;

}


?>