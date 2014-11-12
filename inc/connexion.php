<?php

include 'config.php';

function connect(){

	$myConnexion = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	
	if($myConnexion->connect_errno)
	{
		$myConnexion = 'Erreur Db('.$myConnexion->connect_errno.')'.$myConnexion->connect_errno;
		echo 'Erreur de connexion !<br />';
	}
	
	return $myConnexion;
}

function disconnect($connexion){
	mysqli_close($connexion);
}

?>