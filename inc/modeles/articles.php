<?php

//Vérifier les identifiants pour se connecter à la BDD
function ajout_article($titre, $contenu, $id_user) {
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	
	// Préparation de la requête
	$myRequete = 'SELECT nom_user, email, id_profil FROM utilisateurs WHERE email="'.$email.'" and password=PASSWORD("'.$password.'");';
	
	//var_dump($myRequete);
	
	// Execution de la requête
	$myCols = mysqli_query($myConnexion,$myRequete);
	
		while($row = mysqli_fetch_array($myCols)){
			$myUser['email'] = $row['email'];
			$myUser['id_profil'] = $row['id_profil'];
		}
		//var_dump($myCols);
		//var_dump($myUser);
		return $myUser;
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
function liste_articles($by='autre', $id_cat='', $id_user='', $limit=''){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$articles = array();
	
	// Création de la variable qui récupére l'id de l'user pour éviter une autre erreur éventuelle.
	$by_user = null;
	
	$by_cat = null;

	switch ($by) // On veut trier les articles
	{ 
	// Par date
	case 'date':
        $order_by = 'ORDER BY articles.date';
    break;
    // Par auteur
    case 'auteur':
        $order_by = 'ORDER BY utilisateurs.id_user';
    break;
    // Par note
    case 'note':
        $order_by = 'ORDER BY articles.note DESC';
    break;
    // Sinon
    default:
        $order_by = '';
	}
	
	
	
	if(!empty($id_cat)) {
	    $by_cat = 'AND categories.id_cat = "'.$id_cat.'"';
	}
	
	if(!empty($id_user)) {
	
	    $by_user = 'AND utilisateurs.id_user = "'.$id_user.'"
					AND articles.id_user = "'.$id_user.'"';
	}
		
	// On prépare le bidouillage de la requête.
	$ajoutRequete = $by_cat.' '.$by_user.' '.$order_by.' '.$limit.';';	

	// Préparation de la requête
	$myRequete = 'SELECT *
					FROM articles, utilisateurs, categories, articles_categories
					WHERE articles.id_user = utilisateurs.id_user 
					AND articles_categories.id_article = articles.id_article
					AND  articles_categories.id_cat = categories.id_cat
					'.$ajoutRequete;
	echo 'Affichage variable requête articles: <br />';
	var_dump($myRequete);			


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