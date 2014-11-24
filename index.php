<?php
//On démarre la session
session_start();

// On veut afficher toutes les erreurs
//ini_set('display_errors', 1);

// On importe la configuration générale du site et les paramétres de connexion à la BDD
include 'inc/config.php';

// Connexion à la BDD via la fonction définie dans config.php
$myConnexion = connect();

// On gére les guillemets magiques
if(get_magic_quotes_gpc()) {
        $_POST = array_map('stripslashes', $_POST);
        $_GET = array_map('stripslashes', $_GET);
        $_COOKIE = array_map('stripslashes', $_COOKIE);
}

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