<?php

// On appelle le haut de la page
include 'header.php';

// Récupération de la façon dont l'on veut trier les articles

$by = $_GET['by'];

?>
<a href="liste_articles.php?by=date">Trier par date</a> [] <a href="liste_articles.php?by=auteur">Trier par auteur</a> [] <a href="liste_articles.php?by=note">Trier par note</a> 

<?php
//Préparation de la requête
$articles = liste_articles($by);

foreach($articles as $data)
{
	?>

	<h1><?php echo $data['titre']; ?></h1>
	
						<h2>De <?php echo $data['nom_user']; ?></h2>
						<p>Publie le <?php echo $data['date']; ?></p> 
						<p>Dans la rubrique <?php echo $data['nom_cat']; ?> </p>
						<p><?php echo $data['contenu']; ?></p>
						<p>Note: <?php echo $data['note']; ?>/10</p>
						
					
		<a href="article.php?id=<?php echo $data['id_article'];?>"><?php echo $data['titre'];?></a>
			<br>
			<?php echo substr($data['contenu'],0,300);?>

	<?php
	}

// On appelle le bas de la page
include 'footer.php';
				
?>