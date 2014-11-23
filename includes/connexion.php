<?php

//connexion à la base de données

$Db_server="localhost";
$Db_user="blogmmi";
$Db_password="root";
$Db_name="root";

function connect() {
	$connexion=new mysqli('localhost','test','test','blogmmi');
	//var_dump($connexion);
	if($connexion->connect_errno){
		$connexion="Erreur Db(".connect_errno.")".$connexion->connect_error;
	}
	return $connexion;
}

//connect();

function disconnect($connexion) {
	mysqli_close($connexion);
}

?>