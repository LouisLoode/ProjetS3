<?php

//Ajout d'un article
function ajout_article($titre, $contenu, $id_user){
	
	// Préparation de la requête
	$myRequete = 'SELECT nom_user, email, id_profil FROM utilisateurs WHERE email="'.$email.'" and password=PASSWORD("'.$password.'");';
	
	//var_dump($myRequete);
	
	// Execution de la requête
	$myCols = requete($myRequete);
	
		while($row = mysqli_fetch_array($myCols)){
			$myUser['email'] = $row['email'];
			$myUser['id_profil'] = $row['id_profil'];
		}
		//var_dump($myCols);
		//var_dump($myUser);
		return $myUser;
}

//Supprimer un article
function del_article($id){
	
	// Préparation de la requête qui supprime l'article
	$myRequete = 'DELETE FROM articles WHERE articles.id_article="'.$id.'";';
	
	// Execution de la requête
	$result = requete($myRequete);
		//var_dump($result);
		
	// Préparation de la requête qui supprime les liens Articles-Categories pour pas mettre le souc dans la table.
	$myRequete = 'DELETE FROM articles_categories WHERE articles_categories.id_article="'.$id.'";';
	
	// Execution de la requête
	$result = requete($myRequete);
		//var_dump($result);
	
	return $result;
	
}

// Mettre un article en public
function public_article($id){
		
	// Préparation de la requête qui supprime les liens Articles-Categories pour pas mettre le souc dans la table.
	$myRequete = 'UPDATE articles SET statut="1" WHERE id_article="'.$id.'";';
	
	// Execution de la requête
	$result = requete($myRequete);
		//var_dump($result);
	
	return $result;
	
}

// Mettre un article en public 
function brouillon_article($id){
		
	// Préparation de la requête qui supprime les liens Articles-Categories pour pas mettre le souc dans la table.
	$myRequete = 'UPDATE articles SET statut="0" WHERE id_article="'.$id.'";';
	
	// Execution de la requête
	$result = requete($myRequete);
		//var_dump($result);
	
	return $result;
	
}

//Afficher la liste des catégories
function liste_categories($menu='', $by=''){
	
	// Création du tableau
	$categories = array();
	
	$req_menu = '';
	
	$order_by = '';
	
	$limit = '';

	//var_dump($id_auteur);
	
	switch ($menu) // On veut trier les articles
	{ 
	// Par date
	case 'menu':
        $req_menu = 'WHERE menu = 1';
    break;
    // Par auteur
    case 'pas-menu':
        $req_menu = 'WHERE menu = 0';
    break;
    // Sinon
    default:
        $req_menu = '';
	}
	
	switch ($by) // On veut trier les articles
	{ 
	// Par date
	case 'croissant':
        $order_by = 'ORDER BY ordre ASC';
    break;
    // Par auteur
    case 'decroissant':
        $order_by = 'ORDER BY ordre DESC';
    break;
    // Sinon
    default:
        $order_by = '';
	}
		
	// On prépare le bidouillage de la requête.
	$ajoutRequete = $req_menu.' '.$order_by.' '.$limit.'';	

	// Préparation de la requête
	$myRequete = 'SELECT *
					FROM categories
					'.$ajoutRequete;
	//var_dump($myRequete);			


	// Lancement de la requête
	$req = requete($myRequete);
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
function liste_articles($by='autre', $id_cat='', $id_user='', $limit='10', $statut='public'){
	
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
    // De maniére aléatoire
    case 'alea':
        $order_by = 'ORDER BY rand()';
    break;
    // Sinon
    default:
        $order_by = '';
	}
	
	
	switch ($statut) // On veut trier par statut
	{ 
	// Articles publics
	case 'public':
        $statut_req = 'AND articles.statut = "1"';
    break;
	// Articles publics
	case 'brouillon':
        $statut_req = 'AND articles.statut = "0"';
    break;
	// On veut afficher tout les articles
	case 'tout':
        $statut_req = '';
    break;
    // Sinon
    default:
        $statut_req = 'AND articles.statut = "1"';
	}
	
	
	
	
	if(!empty($id_cat)) {
	    $by_cat = 'AND categories.id_cat = "'.$id_cat.'"';
	}
	
	if(!empty($id_user)) {
	
	    $by_user = 'AND utilisateurs.id_user = "'.$id_user.'"
					AND articles.id_user = "'.$id_user.'"';
	}
	
	if(!empty($limit)) {
	
	    $limit = 'LIMIT '.$limit;
	}
		
	// On prépare le bidouillage de la requête.
	$ajoutRequete = $statut_req.' 
					'.$by_cat.'
					'.$by_user.' 
					'.$order_by.' 
					'.$limit.';';	

	// Préparation de la requête
	$myRequete = 'SELECT * 
					FROM articles, utilisateurs, categories, articles_categories 
					WHERE articles.id_user = utilisateurs.id_user 
					AND articles_categories.id_article = articles.id_article 
					AND articles_categories.id_cat = categories.id_cat
					'.$ajoutRequete;
					
	// var_dump($myRequete);			

	 //echo '<hr />';

	// Lancement de la requête
	$req = requete($myRequete);
	//var_dump($req);
//$articles['nb_lignes'] = mysqli_num_rows($req);
	
	if ($req) {

		// Boucle qui stocke les résultats dans un tableau
        while ($data = mysqli_fetch_assoc($req))
        {
                $articles[] = $data;
        }
    }
 
		// Renvoi du tableau pour utilisation future
        return $articles;

 }

//Compter les articles
function count_articles($id_cat='', $id_user=''){
	
	// Création du tableau
	$articles = array();
	
	// Création de la variable qui récupére l'id de l'user pour éviter une autre erreur éventuelle.
	$by_user = null;
	
	$by_cat = null;
	
	if(!empty($id_cat)) {
	    $by_cat = 'AND categories.id_cat = "'.$id_cat.'"';
	}
	
	if(!empty($id_user)) {
	
	    $by_user = 'AND utilisateurs.id_user = "'.$id_user.'"
					AND articles.id_user = "'.$id_user.'"';
	}
	
	
	// On prépare le bidouillage de la requête.
	$ajoutRequete = $by_cat.'
					'.$by_user.';';	

	// Préparation de la requête
	$myRequete = 'SELECT COUNT(*) AS total
					FROM articles, utilisateurs, categories, articles_categories
					WHERE articles.id_user = utilisateurs.id_user 
					AND articles.statut = "1"
					AND articles_categories.id_article = articles.id_article
					AND  articles_categories.id_cat = categories.id_cat
					'.$ajoutRequete;
	 //var_dump($myRequete);			


	// Lancement de la requête
	$req = requete($myRequete);
	//var_dump($myCols);

	$data = mysqli_fetch_assoc($req);
	
	$nbrArticles = $data['total'];

		// Renvoi du tableau pour utilisation future
        return $nbrArticles;

}

//Afficher l'article sélectionné
function display_article($id_article){
	
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
	$req = requete($myRequete);
	// var_dump($req);


		// Boucle qui stocke les résultats dans un tableau
        $data = mysqli_fetch_array($req);
 
		// Renvoi du tableau pour utilisation future
        return $data;

}

?>