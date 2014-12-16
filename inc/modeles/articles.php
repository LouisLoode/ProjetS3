<?php

  /**
    * Ajoute un article à la BDD
    * @retun 0 si pas d'erreur
    */
function ajout_article($titre, $date, $introduction, $contenu, $categorie, $en_avant='0', $statut='0', $illustration, $fichier, $extension){
	
	$i = 0;
	
		$dossier = '../'.UPLOAD_DIRECTORY; // Dossier de stockage
		$taille_maxi = TAILLE_MAXI; // Taille maximale
		$extensions = array('.png', '.gif', '.jpg', '.jpeg', '.JPG', '.JPEG', '.PNG'); // Extensions autorisées
		$taille = filesize($illustration); // Taille du fichier
	
	$id_user = $_SESSION['id'];
	
			if(empty($titre)){
			
				$alert = message('Le titre n\'a pas été renseigné.', 3);
				$i++;
					
			}elseif(empty($date)){
				
				$alert = message('La date n\'a pas été renseigné.', 3);
				$i++;
					
			}elseif(empty($contenu)){
				
				$alert = message('Le contenu n\'a pas été renseigné.', 3);
				$i++;
				
			}elseif(!isset($illustration)){
				
				$alert = message('Vous n\'avez pas mis de fichier.', 3);
				$i++;
					
			}elseif(!in_array($extension, $extensions)){
				
				$alert = message('Vous devez uploader un fichier de type png, gif, jpg ou jpeg.', 3);
				$i++;
					
			}elseif($taille>$taille_maxi){
				
				$alert = message('L\'illustration a un poids trop important.', 3);
				$i++;
			}
			else
		    {
				if(move_uploaded_file($illustration, $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
				{
	        		 // On crée une nouvelle entrée dans la table.
		    		$myRequete = 'INSERT INTO articles(id_article, titre, introduction, contenu, statut, en_avant, date, id_user, id_cat, media) VALUES("", "'.$titre.'" ,"'.$introduction.'","'.$contenu.'", "'.$statut.'", "'.$en_avant.'", "'.$date.'", "'.$id_user.'", "'.$categorie.'", "'.$fichier.'")';
		    		//var_dump($myRequete);
		    		
		    		$myCols = requete($myRequete);
		    		//var_dump($myCols);
		    	}else{
			    	
			    	$alert = message('L\'importation du média est partie en live !', 3);
					$i++;
		    	}
    		}

	return $i;
}

  /**
    * Modification d'un article
    * @retun 0 si pas d'erreurs
    */
function modif_article($id_article, $titre, $date, $introduction, $contenu, $categorie, $en_avant='0', $statut='0'){

	$i = 0;
	
	$id_user = $_SESSION['id'];
	
			if(empty($titre)){
			
				$alert = message('Le titre n\'a pas été renseigné.', 3);
				$i++;
					
			}elseif(empty($id_article)){
				
				$alert = message('L\'ID n\'a pas été renseigné.', 3);
				$i++;
					
			}elseif(empty($date)){
				
				$alert = message('La date n\'a pas été renseigné.', 3);
				$i++;
					
			}elseif(empty($contenu)){
				
				$alert = message('Le contenu n\'a pas été renseigné.', 3);
				$i++;
				
			}/*elseif(empty($categories)){
				$alert = message('Vous n\'avez pas séléctionné de catégorie.', 3);
				$i++;
			}*/
			else
		    {

	        		 // On crée une nouvelle entrée dans la table.
		    		$myRequete = 'UPDATE articles SET titre="'.$titre.'", introduction="'.$introduction.'", contenu="'.$contenu.'", statut="'.$statut.'", en_avant="'.$en_avant.'", date="'.$date.'", id_user="'.$id_user.'", id_cat="'.$categorie.'" WHERE articles.id_article="'.$id_article.'";';
		    		var_dump($myRequete);
		    		echo '<br />';
		    		$myCols = requete($myRequete);
		    		var_dump($myCols);
    		}

	return $i;
}

  /**
    * Ajoute une catégorie
    * @retun 0 si pas d'erreurs
    */
function ajout_cat($titre, $menu='0', $ordre='10'){

	$i = 0; 
	
			if(empty($titre)){
			
				$alert = message('Le titre de la catégorie n\'a pas été renseigné.', 3);
				$i++;
					
			}elseif(empty($ordre)){
				
				$alert = message('La date n\'a pas été renseigné.', 3);
				$i++;
	
			}/*elseif(empty($categories)){
				$alert = message('Vous n\'avez pas séléctionné de catégorie.', 3);
				$i++;
			}*/
			else
		    {

	        		 // On crée une nouvelle entrée dans la table.
		    		$myRequete = 'INSERT INTO categories(id_cat, nom_cat, menu, ordre) VALUES("", "'.$titre.'" ,"'.$menu.'","'.$ordre.'")';
		    		//var_dump($myRequete);
		    		
		    		$myCols = requete($myRequete);
		    		//var_dump($myCols);

    		}

	return $i;
}

  /**
    * Modifie une catégorie
    * @retun 0 si pas d'erreurs
    */
function modif_cat($id_article, $titre, $menu='0', $ordre='10'){
	
	$i = 0;
	
			if(empty($titre)){
			
				$alert = message('Le titre n\'a pas été renseigné.', 3);
				$i++;
					
			}elseif(empty($id_article)){
				
				$alert = message('L\'ID n\'a pas été renseigné.', 3);
				$i++;
					
			}elseif(empty($date)){
				
				$alert = message('La date n\'a pas été renseigné.', 3);
				$i++;
					
			}elseif(empty($contenu)){
				
				$alert = message('Le contenu n\'a pas été renseigné.', 3);
				$i++;
				
			}/*elseif(empty($categories)){
				$alert = message('Vous n\'avez pas séléctionné de catégorie.', 3);
				$i++;
			}*/
			else
		    {

	        		 // On crée une nouvelle entrée dans la table.
		    		$myRequete = 'UPDATE categories SET titre="'.$titre.'", introduction="'.$introduction.'", contenu="'.$contenu.'", statut="'.$statut.'", en_avant="'.$en_avant.'", date="'.$date.'", id_user="'.$id_user.'", id_cat="'.$categorie.'" WHERE articles.id_article="'.$id_article.'";';
		    		var_dump($myRequete);
		    		echo '<br />';
		    		$myCols = requete($myRequete);
		    		var_dump($myCols);
    		}

	return $i;
}

  /**
    * Supprimer un article
    * @retun résultat de la requête
    */
function del_article($id){
	
	// Préparation de la requête qui supprime l'article
	$myRequete = 'DELETE FROM articles WHERE articles.id_article="'.$id.'";';
	
	// Execution de la requête
	$result = requete($myRequete);
		//var_dump($result);
	
	return $result;
	
}

  /**
    * Supprimer un catégorie
    * @retun résultat de la requête
    */
function del_cat($id){
	
	// Préparation de la requête qui supprime l'article
	$myRequete = 'DELETE FROM categories WHERE categories.id_cat="'.$id.'";';
	
	// Execution de la requête
	$result = requete($myRequete);
		//var_dump($result);

	
	return $result;
	
}

  /**
    * Supprimer un article
    * @retun résultat de la requête
    */
function ajout_menu_cat($id){
		
	// Préparation de la requête qui supprime les liens Articles-Categories pour pas mettre le souc dans la table.
	$myRequete = 'UPDATE categories SET menu=1 WHERE id_cat="'.$id.'";';
	//var_dump($myRequete);
	
	// Execution de la requête
	$result = requete($myRequete);
		//var_dump($result);
	
	return $result;
	
}

// Retrait d'une catégorie dans le menu
function del_menu_cat($id){
		
	// Préparation de la requête qui supprime les liens Articles-Categories pour pas mettre le souc dans la table.
	$myRequete = 'UPDATE categories SET menu=0 WHERE id_cat="'.$id.'";';
	//var_dump($myRequete);
	
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
					FROM articles, utilisateurs, categories
					WHERE articles.id_user = utilisateurs.id_user 
					AND articles.id_cat = categories.id_cat
					'.$ajoutRequete;
					
	//var_dump($myRequete);			

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
function count_articles($id_cat='', $id_user='', $public=''){
	
	// Création du tableau
	$articles = array();
	
	// Création de la variable qui récupére l'id de l'user pour éviter une autre erreur éventuelle.
	$by_user = null;
	
	$by_cat = null;
	
	$by_statut = null;
	
	if(!empty($id_cat)) {
	    $by_cat = 'AND categories.id_cat = "'.$id_cat.'"';
	}
	
	if(!empty($id_user)) {
	
	    $by_user = 'AND utilisateurs.id_user = "'.$id_user.'"
					AND articles.id_user = "'.$id_user.'"';
	}
	
	if(empty($public)) {
	
	    $by_statut = 'AND articles.statut = "1"';
	}
	
	
	// On prépare le bidouillage de la requête.
	$ajoutRequete = $by_statut.' 
					'.$by_cat.'
					'.$by_user.';';	

	// Préparation de la requête
	$myRequete = 'SELECT COUNT(*) AS total
					FROM articles, utilisateurs, categories
					WHERE articles.id_user = utilisateurs.id_user 
					AND  articles.id_cat = categories.id_cat
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

//Compter les categories
function count_cats(){
	
	// Création du tableau
	$categories = array();
	
	// On prépare le bidouillage de la requête.
	/*$ajoutRequete = $by_statut.' 
					'.$by_cat.'
					'.$by_user.';';	*/

	// Préparation de la requête
	$myRequete = 'SELECT COUNT(*) AS total
					FROM categories
					';
	 //var_dump($myRequete);			


	// Lancement de la requête
	$req = requete($myRequete);
	//var_dump($myCols);

	$data = mysqli_fetch_assoc($req);
	
	$nbrCats = $data['total'];

		// Renvoi du tableau pour utilisation future
        return $nbrCats;

}

//Afficher l'article sélectionné
function display_article($id_article){
	
	// Création du tableau
	$article = array();

	//var_dump($id_auteur);

	// Préparation de la requête
	
	$myRequete = 'SELECT *
						FROM articles, categories, utilisateurs
						WHERE articles.id_user = utilisateurs.id_user
						AND  articles.id_cat = categories.id_cat
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