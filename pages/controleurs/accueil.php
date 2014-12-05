<?php

// On récupére la valeur de la variable qui récupére le numéro de la page. Si la variable est vide, alors on attribue la valeur par défaut 1.
$page = (isset($_GET['p']) && ctype_digit($_GET['p']) ) ? $_GET['p'] : 1;

//Préparation de la requête
$articles = liste_articles();

// Compte le nombre de lignes du tableau renvoyé par la variable liste_articles.
$nb_articles = count($articles);

// On divise le nombre d'articles du tableau par le nombre d'éléments qu'on veut par pages.
$nb_page = ceil($nb_articles / ARTICLES_PAGES);

// On génére la liste des pages.
$listePage = get_list_page($page, $nb_page);
	
//On inclut la vue
include(dirname(__FILE__).'/'.VUES.'/accueil.php');
?>