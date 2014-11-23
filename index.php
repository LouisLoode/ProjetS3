<?php
include 'inc/functions.php';

/*
$user = login('test@test.com','test');
var_dump($user);
echo 'lol<br />';
echo $user['email'];
*/
?>

<html>
<body>

<h1> Accueil du site </h1>

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

