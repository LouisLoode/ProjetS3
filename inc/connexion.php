<?php


$Db_server = 'localhost';
$Db_name = 'blogmmi';
$Db_user = 'blogmmilkhljkh';
$Db_pass = '';

function connect(){
	
	if (!$myConnexion = mysqli_connect($Db_server,$Db_user,$Db_password,$Db_name))
	{
		$myConnexion = 'Erreur Db('.$myConnexion->connect_errno.')'.$myConnexion->connect_errno;
		echo 'erreur de connexion<br />';
	}
	return $myConnexion;
	echo 'retour connexion ok<br />';;
}

function disconnect($connexion){
	mysqli_close($connexion);
}

?>