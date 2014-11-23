<?php

include 'includes/functions.php';

$myConnexion=connect();
$id_auteur = $_GET['id_auteur'];
$req='SELECT nom_au FROM auteurs WHERE auteurs.id_auteur = '. $id_auteur.';';
//var_dump($req);
$result = mysqli_query($myConnexion,$req);
//var_dump($result);
if($activeauteur= mysqli_fetch_array($result)){
?>

<h1><?php echo $activeauteur['nom_au']; ?></h1>

<?php
}

disconnect($myConnexion);

$a_au= articles_par_auteurs();
				
?>

<p><a href="test_req.php"> Accueil </a></p>