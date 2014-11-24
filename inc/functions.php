<?php

include 'connexion.php';

//Différentes fonctions pour chaque requête

//Vérifier les identifiants pour se connecter à la BDD

	function login($email,$password) {
		$myConnexion=connect();
		//var_dump($myConnexion);
		$myRequete='SELECT email,id_profil FROM utilisateurs WHERE email="'.$email.'" and password=PASSWORD("'.$password.'");';
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
	
	
	
/*
//Lister les auteurs

	function liste_auteurs(){
		$myConnexion=connect();
		
		$auteurs = array();
		
		$myRequete = 'SELECT * FROM auteurs';
		echo 'ok auteurs 1 <br />';
        $req = mysqli_query($myConnexion, $myRequete);
        echo 'ok auteurs 2 <br />';
        while ($data = mysqli_fetch_array($req))
        {
	        echo 'ok auteurs 3 <br />';
                $auteurs[] = $data;
        }
 echo 'ok auteurs 1 <br />';
        return $auteurs;
		
	}
*/



//Lister les articles
function liste_articles($by, $id=){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$articles = array();

	// Par date
	if ($by == 'date'){
		
		$order_by = 'ORDER BY date';
	
	// Par auteur
	}elseif($by == 'auteur'){
		
		
		if() {
			
		}
		$order_by = 'ORDER BY id_auteur';
		
	// Par note
	}elseif($by == 'note'){
		
		$order_by = 'ORDER BY note';
	
	//Sinon
	}else{
		$order_by = '';
	}

	// Préparation de la requête
	$myRequete = 'SELECT *
					FROM articles '.$order_by;
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
					FROM rubriques';
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



//Afficher la liste des catégories
function articles_par_utilisateur($id_auteur){
	
	// La fonction de connexion doit rester active durant tout le script.
	global $myConnexion;
	//var_dump($myConnexion);
	
	// Création du tableau
	$categories = array();

	//var_dump($id_auteur);

	// Préparation de la requête
	$myRequete = 'SELECT * 
					FROM articles, utilisateurs
					WHERE utilisateurs.Id_Utilisateur = "'.$id_auteur.'"
					AND articles.Id_Utilisateur = "'.$id_auteur.'";';
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



	//var_dump($id_auteur);

	//$req="SELECT * FROM auteurs WHERE auteurs.id_auteur = ". $id_auteur.";";
	//$activeauteur= mysql_query($req);
	//var_dump($activeauteur);

/*

		$myRequete = "SELECT * 
					FROM articles, auteurs
					WHERE auteurs.id_auteur = ".$id_auteur."
					AND articles.id_auteur =".$id_auteur.";";
	//var_dump($myRequete);			

		$myCols=mysqli_query($myConnexion,$myRequete);
		//var_dump($myCols);

		while($a_au = mysqli_fetch_array($myCols)){

	?>
				<ul>
					<li>
						<h2><a <?php echo "href=affiche_article.php?id_article=".$a_au['id_article'].">".$a_au['titre']; ?></a></h2>
						<p>Date:<?php echo $a_au['date']; ?></p>
						<p><?php echo substr($a_au['contenu'],0,300); ?>...</p>
					</li>
				</ul>

			<?php

				}
						disconnect($myConnexion);
		return $a_au;
	}*/

//Lister les articles en fonction de la rubrique choisie

	function articles_par_rubriques(){

	$myConnexion=connect();
	//var_dump($myConnexion);

	$id_rubrique = $_GET['id_rubrique'];
	//var_dump($id_auteur);

	//$req="SELECT * FROM auteurs WHERE auteurs.id_auteur = ". $id_auteur.";";
	//$activeauteur= mysql_query($req);
	//var_dump($activeauteur);



		$myRequete = "SELECT *
						FROM articles, articles_rubriques, rubriques
						WHERE articles_rubriques.id_article = articles.id_article
						AND  articles_rubriques.id_rubrique = rubriques.id_rubrique
						AND rubriques.id_rubrique = ".$id_rubrique.";";
	//var_dump($myRequete);			

		$myCols=mysqli_query($myConnexion,$myRequete);
		//var_dump($myCols);

		while($a_ru = mysqli_fetch_array($myCols)){

	?>
				<ul>
					<li>
						<h2><a <?php echo "href=affiche_article.php?id_article=".$a_ru['id_article'].">".$a_ru['titre']; ?></a></h2>
						<p>Date:<?php echo $a_ru['date']; ?></p>
						<p><?php echo substr($a_ru['contenu'],0,300); ?>...</p>
					</li>
				</ul>

			<?php

				}
						disconnect($myConnexion);
		return $a_ru;
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
					FROM articles
					WHERE id_article = "'.$id_article.'"';
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