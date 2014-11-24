<?php

//Vérifier les identifiants pour se connecter à la BDD

	function login($email,$password) {
		$myConnexion=connect();
		//var_dump($myConnexion);
		$myRequete='SELECT nom_user,email,id_profil FROM utilisateurs WHERE email="'.$email.'" and password=PASSWORD("'.$password.'");';
		//var_dump($myRequete);
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




//Afficher la liste des catégories
function liste_categories(){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$categories = array();

	//var_dump($id_auteur);

	// Préparation de la requête
	$myRequete = 'SELECT *
					FROM categories';
	//var_dump($myRequete);			


	// Lancement de la requête
	$req=mysqli_query($myConnexion,$myRequete);
	//var_dump($myCols);


		// Boucle qui stocke les résultats dans un tableau
        while ($data = mysqli_fetch_assoc($req))
        {
                $categories[] = $data;
        }
 
		// Renvoi du tableau pour utilisation future
        return $categories;

}

//Lister les articles
function liste_articles($by){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$articles = array();

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

	// Préparation de la requête
	$myRequete = 'SELECT *
					FROM articles, utilisateurs, categories, articles_categories
					WHERE articles.Id_Utilisateur=utilisateurs.Id_Utilisateur 
					AND articles_categories.id_article = articles.id_article
					AND  articles_categories.id_categorie = categories.id_categorie
					'.$order_by;
	//var_dump($myRequete);			


	// Lancement de la requête
	$req=mysqli_query($myConnexion,$myRequete);
	//var_dump($myCols);


		// Boucle qui stocke les résultats dans un tableau
        while ($data = mysqli_fetch_assoc($req))
        {
                $articles[] = $data;
        }
 
		// Renvoi du tableau pour utilisation future
        return $articles;

}

//Lister les articles par categorie
function articles_par_categories($id_cat){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$articles = array();

	// Préparation de la requête	
	$myRequete = 'SELECT *
					FROM articles, articles_categories, categories, utilisateurs
					WHERE articles.Id_Utilisateur=utilisateurs.Id_Utilisateur 
					AND articles_categories.id_article = articles.id_article
					AND  articles_categories.id_categorie = categories.id_categorie
					AND categories.id_categorie = '.$id_cat.';';
	//var_dump($myRequete);			


	// Lancement de la requête
	$req=mysqli_query($myConnexion,$myRequete);
	//var_dump($myCols);


		// Boucle qui stocke les résultats dans un tableau
        while ($data = mysqli_fetch_assoc($req))
        {
                $articles[] = $data;
        }
 
		// Renvoi du tableau pour utilisation future
        return $articles;

}
	





//Afficher la liste des articles par utilisateurs
function articles_par_utilisateur($id_user){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$categories = array();

	//var_dump($id_auteur);

	// Préparation de la requête
	$myRequete = 'SELECT * 
					FROM articles, utilisateurs
					WHERE utilisateurs.Id_Utilisateur = "'.$id_user.'"
					AND articles.Id_Utilisateur = "'.$id_user.'";';
	//var_dump($myRequete);			


	// Lancement de la requête
	$req=mysqli_query($myConnexion,$myRequete);
	//var_dump($myCols);


		// Boucle qui stocke les résultats dans un tableau
        while ($data = mysqli_fetch_assoc($req))
        {
                $categories[] = $data;
        }
 
		// Renvoi du tableau pour utilisation future
        return $categories;

}
	

//Afficher l'article sélectionné
function display_article($id_article){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$article = array();

	//var_dump($id_auteur);

	// Préparation de la requête
	
	$myRequete = 'SELECT *
						FROM articles, articles_categories, categories, utilisateurs
						WHERE articles.Id_Utilisateur=utilisateurs.Id_Utilisateur
						AND articles_categories.id_article = articles.id_article
						AND  articles_categories.id_categorie = categories.id_categorie
						AND articles.id_article = '.$id_article.'';
	
	
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
						WHERE Id_Utilisateur = '.$id_user.'';
	
	
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