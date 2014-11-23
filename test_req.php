<html>
<body>

<?php

include 'inc/functions.php';
				
?>

<h1> TEST DES REQUETES </h1>

<h2>NOS AUTEURS</h2>
            	
				<ul>
<?php 
	$auteurs=liste_auteurs(); 
	
foreach($auteurs as $n)
{

			$myAutors['id_auteur'] = $auteurs['id_auteur'];
			$myAutors['nom_au'] = $auteurs['nom_au'];
			echo "<li><a href='articles_auteurs.php?id_auteur=".$auteurs['id_auteur']." '> ".$auteurs['nom_au']."</a></li>";
		}
?>
				</ul>	

<h2>NOS ARTICLES</h2>

<ul>
<?php $articles=liste_articles(); ?>
</ul>

<h2>NOS RUBRIQUES</h2>

<ul>
<?php $rubriques=liste_rubriques(); ?>
</ul>		

</body>
</html>

