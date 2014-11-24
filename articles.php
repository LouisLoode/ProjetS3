<?php

include 'inc/functions.php';

// Connexion à la BDD
$myConnexion = connect();


// Récupération de la façon dont l'on veut trier les articles
$by = $_GET['by'];
?>
<a href="articles.php?by=date">Trier par date</a> [] <a href="articles.php?by=auteur">Trier par auteur</a> [] <a href="articles.php?by=note">Trier par note</a>

<?php
//Préparation de la requête
$articles = liste_articles($by);

foreach($articles as $data)
{
	?>

	<h1><?php echo $data['titre']; ?></h1>
	
						<h2>De <?php echo $data['nom_au']; ?></h2>
						<p>Publie le <?php echo $data['date']; ?></p> 
						<p>Dans la rubrique <?php echo $data['nom_ru']; ?> </p>
						<p><?php echo $data['contenu']; ?></p>
						<p>Note: <?php echo $data['note']; ?>/10</p>
						
						
									echo "<li>";
		<a href="article.php?id=<?php echo $data['id_article'];?>"><?php echo $data['titre'];?></a>
			<br>
			<?php echo substr($articles['contenu'],0,300);?>

	<?php
	}

	disconnect($myConnexion);
					
?>

<p><a href="index.php"> Accueil </a></p>




	
	

	
