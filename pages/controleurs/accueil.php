<?php

// On récupére la valeur de la variable qui récupére le numéro de la page. Si la variable est vide, alors on attribue la valeur par défaut 1.
$page = (isset($_GET['p']) && ctype_digit($_GET['p']) ) ? $_GET['p'] : 1;

$by = (isset($_GET['by'])) ? $_GET['by'] : '';

$id_cat = '';

$id_user = '';

// On définit les URL pour la pagination.
$urlPagination = array(
	'avant' => 'index-0-',
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
//var_dump($articles);
	
//On inclut la vue
include(dirname(__FILE__).'/'.VUES.'/accueil.php');

?>