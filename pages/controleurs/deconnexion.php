<?php

 
/* On effectue ici diverses actions, comme supprimer des news, par exemple. ;)
Il n'y en aura aucune dans ce tutoriel pour rester simple, mais libre à vous d'en rajouter. */

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

$alerts = message('Vous êtes bien déconnecté', 1);

var_dump($_SESSION['alerts']);

header('Location: index.php');
exit;

?>