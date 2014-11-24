<?php


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
		
		$order_by = 'ORDER BY utilisateurs.id_user';
		
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
					WHERE articles.id_user = utilisateurs.id_user 
					AND articles_categories.id_article = articles.id_article
					AND  articles_categories.id_cat = categories.id_cat
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
					WHERE articles.id_user = utilisateurs.id_user 
					AND articles_categories.id_article = articles.id_article
					AND  articles_categories.id_cat = categories.id_cat
					AND categories.id_cat = '.$id_cat.';';
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
					WHERE utilisateurs.id_user = "'.$id_user.'"
					AND articles.id_user = "'.$id_user.'";';
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
						WHERE articles.id_user = utilisateurs.id_user
						AND articles_categories.id_article = articles.id_article
						AND  articles_categories.id_cat = categories.id_cat
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

?>