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
include '../inc/config.php';

// On se connecte à la BDD
include '../inc/fonctions.php';

// Connexion à la BDD via la fonction définie dans config.php
$myConnexion = connect();

// On se initialise les paramêtre de base
include '../inc/init.php';

// On appelle le haut de la page
include 'header.php';

//On inclut le contrôleur s'il existe et s'il est spécifié, sinon on renvoit vers l'accueil
if (!empty($page) && is_file('pages/'.$page.'.php'))
{
        include 'pages/'.$page.'.php';
}
else
{
        include 'pages/dashboard.php';
}

// On appelle le bas de la page
include 'footer.php';
 

// On se déconnecte de la BDD
disconnect($myConnexion);

// Envoie le tampon de sortie
ob_flush(); 
?>