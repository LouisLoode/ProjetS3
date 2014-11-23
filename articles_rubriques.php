<html>
<body>

<?php

include 'includes/functions.php';

$myConnexion=connect();
$id_rubrique = $_GET['id_rubrique'];
$req="SELECT nom_ru FROM rubriques WHERE rubriques.id_rubrique = ". $id_rubrique.";";
//var_dump($req);
$result = mysqli_query($myConnexion,$req);
//var_dump($result);
if($activerubrique= mysqli_fetch_array($result)){
?>

<h1><?php echo $activerubrique['nom_ru']; ?></h1>

<?php
}

disconnect($myConnexion);

$a_ru= articles_par_rubriques();
				
?>

<p><a href="test_req.php"> Accueil </a></p>

</body>
</html>