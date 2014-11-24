<?php 

/*
// Identifiants à la BDD
define('DB_SERVER', 'localhost');
define('DB_NAME', 'blogmmi');
define('DB_USER', 'test');
define('DB_PASSWORD', 'test');
*/

/*$Db_server='localhost';
$Db_user='blogmmi';
$Db_password='root';
$Db_name='root';*/


function connect() {
	$connexion = new mysqli('localhost','test','test','blogmmi');
	//var_dump($connexion);
	if($connexion->connect_errno){
		$connexion = 'Erreur Db('.connect_errno.')'.$connexion->connect_error;
	}
	return $connexion;
}

//connect();

function disconnect($connexion) {
	mysqli_close($connexion);
}

// Chemins vers les différents chemins utiles au fonctionnement du site
define('MODELE', '../../inc/modeles');
define('VUES', '../vues');
define('CONTROLEURS', 'pages/controleurs');

?>