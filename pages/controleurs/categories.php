<?php

 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */


// Si l'id est renseigné, alors on veut voir un article en particulier.
if (isset($_GET['id'])) { 
	
		// On récupére la valeur de la variable qui récupére le numéro de la page. Si la variable est vide, alors on attribue la valeur par défaut 1.
		$page = (isset($_GET['p']) && ctype_digit($_GET['p']) ) ? $_GET['p'] : 1;
		
		$by = (isset($_GET['by'])) ? $_GET['by'] : null;
		
		$id_cat = $_GET['id'];
		
		$id_user = '';
		
		// On définit les URL pour la pagination.
		$urlPagination = array(
			'avant' => 'categories-'.$id_cat.'-',
			'apres' => '.html'
		);
			
		// Compte le nombre de lignes du tableau renvoyé par la variable liste_articles.
		$nb_articles = count_articles($id_cat, $id_user);
		
		
		$articles_pages = ARTICLES_PAGES;
		
		// On divise le nombre d'articles du tableau par le nombre d'éléments qu'on veut par pages.
		$nb_page = ceil($nb_articles / $articles_pages);
		
		// On génére la liste des pages.
		$listePage = get_list_page($page, $nb_page);
		
		$premiereEntree = ($page-1) * $articles_pages;
		
		
		
		//Préparation de la requête
		$articles = liste_articles($by, $id_cat, $id_user, $premiereEntree.', '.$articles_pages);
	
	//On inclut la vue
	include(dirname(__FILE__).'/'.VUES.'/categorie.php');
	
}else{
	
	//Préparation de la requête
	$categories = liste_categories();
 
	//On inclut la vue
	include(dirname(__FILE__).'/'.VUES.'/categories.php');
	
}
?>