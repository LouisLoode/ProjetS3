<?php 

	// On inclut les modèles
	include(dirname(__FILE__).'/modeles/articles.php');
	include(dirname(__FILE__).'/modeles/utilisateurs.php');
	
	
	// On inclut les class
	include(dirname(__FILE__).'/libs/Parsedown.class.php'); // Parsedown
	
	// On lance les class
	$Parsedown = new Parsedown();
	
	// Définition des rôles
	$role = array(
		0 => 'Inactif',
		1 => 'Actif',
		2 => 'Admin'
	);
	
	// Création de la variable qui permet de checker si on est connecté ou non
	$verif_connect = (isset($_SESSION['id']) AND isset($_SESSION['pseudo']));
	
	// Création de la variable qui vérifie le rang de l'utilisateur
	$verif_alerts = isset($_SESSION['alerts']);
	
	// On initialise le tableau qui gére les messages d'erreur.
	$alerts = array();
	
	// Si le mec est connecté on récupére ses infos.
	if ($verif_connect){ 
		$infosUser = display_utilisateur($_SESSION['id']);
		//var_dump($data);
		
		$user_infos = $infosUser['0'];
			
	}
	
	//Préparation de la requête qui récupére le menu
	$categories_menu = liste_categories('menu', 'croissant');


	// On initialise les variables de widget pour éviter toute erreur eventuelle
	$widget_events = '';
	$widget_aleatoire = '';
	
	$page = isset($_GET['page']) ? $page = $_GET['page'] : $page = '';


	// On définit les pages ou l'on doit charger les widgets pour le slider (à l'accueil) ou la sidebar qui est présente sur différentes pages.
	if(($page == '') OR ($page == 'accueil') OR ($page == 'index') OR ($page == 'articles') OR ($page == 'categories')){
		
	$widget_events = liste_articles('date',6,'','', 'public');

	//var_dump($widget_events);	
	$widget_aleatoire = liste_articles('alea');
	
	//var_dump($widget_notes);
	
	}

 
?>