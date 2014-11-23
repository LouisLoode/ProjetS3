<html>
<body>

<?php

include 'includes/functions.php';
				
?>

<h1> TEST DES REQUETES </h1>

<h2>NOS AUTEURS</h2>
            	
				<ul>
					<?php $auteurs=liste_auteurs(); ?>
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

