<?php

//Vérifier les identifiants pour se connecter à la BDD
function login($email, $password) {

	$myUser = array();
	
	// Préparation de la requête
	$myRequete = 'SELECT * FROM utilisateurs WHERE email = "'.$email.'" and password = PASSWORD("'.$password.'")';
	var_dump($myRequete);
		echo '<hr />';
//SELECT * FROM `user` WHERE `username` = 'userrentré' AND `password` = passwordrentré')
	// Execution de la requête
	$myCols = requete($myRequete);
	var_dump($myCols);
	echo '<hr />';
		while($row = mysqli_fetch_array($myCols)){
			$myUser['email'] = $row['email'];
			$myUser['id_user'] = $row['id_user'];
			$myUser['nom_user'] = $row['nom_user'];
		}
		//var_dump($myCols);
		//print_r($myUser);
		return $myUser;
}

//Vérifier les identifiants pour se connecter à la BDD
function creation_user($login, $email, $password) {
	
	// Préparation de la requête
	//$myRequete = 'SELECT nom_user, email, id_profil FROM utilisateurs WHERE email="'.$email.'" and password=PASSWORD("'.$password.'");';
	

	$myRequete='INSERT INTO utilisateurs ( id_user , nom_user , password , email , date_inscription )
        VALUES ("", "'.$login.'", PASSWORD("'.$password.'"), "'.$email.'", NOW() );';
	//var_dump($myRequete);
	
	// Execution de la requête
	$myCols = requete($myRequete);


		//return $myUser;
}

//Vérifier les identifiants pour se connecter à la BDD
function verif_inscription($login, $email, $pass, $confirm) {
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	
	$i = 0;

	// Préparation de la requête
	$myRequete = 'SELECT COUNT(*) AS nbr FROM utilisateurs WHERE nom_user = "'.$login.'"';
	//var_dump($myRequete);
	
	// Execution de la requête
	$myCols = requete($myRequete);

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
	$myCols = requete($myRequete);

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

	return $i;
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