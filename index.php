<?php
// On démarre la session
session_start();

// On définit l'encodage en UTF-8
header('Content-type: text/html; charset=utf-8');

// On veut afficher toutes les erreurs
//ini_set('display_errors', 1);

// On importe la configuration générale du site et les paramétres de connexion à la BDD
include 'inc/config.php';

// On se connecte à la BDD
include 'inc/bdd.php';
 
// Connexion à la BDD via la fonction définie dans config.php
$myConnexion = connect();

// On appelle le haut de la page
include 'pages/vues/header.php';

//On inclut le contrôleur s'il existe et s'il est spécifié, sinon on renvoit vers l'accueil
if (!empty($_GET['page']) && is_file(CONTROLEURS.'/'.$_GET['page'].'.php'))
{
        include CONTROLEURS.'/'.$_GET['page'].'.php';
}
else
{
        include CONTROLEURS.'/accueil.php';
}

// On appelle le bas de la page
include 'pages/vues/footer.php';
 
 
// On se déconnecte de la BDD
disconnect($myConnexion);
?>