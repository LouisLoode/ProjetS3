<?php
	
// Enclenche la temporisation de sortie
ob_start(); 

// On démarre la session
session_start();

// Relever l'heure de départ du script.
$timestart = microtime(true);

// On veut afficher toutes les erreurs
//ini_set('display_errors', 1);

// On importe la configuration générale du site et les paramétres de connexion à la BDD
include 'inc/config.php';

// On se connecte à la BDD
include 'inc/fonctions.php';

// Connexion à la BDD via la fonction définie dans config.php
$myConnexion = connect();

// On se initialise les paramêtre de base
include 'inc/init.php';

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

// Envoie le tampon de sortie
ob_flush(); 
?>