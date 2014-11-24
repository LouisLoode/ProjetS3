<?php 

// Fonction de connexion à la BDD
function connect() {
	//$connexion = new mysqli('localhost','test','test','blogmmi');
	$connexion = new mysqli(DB_SERVER,DB_PASSWORD,DB_USER,DB_NAME);
	//var_dump($connexion);
	if($connexion->connect_errno){
		$connexion = 'Erreur Db('.connect_errno.')'.$connexion->connect_error;
	}
	return $connexion;
}

// Fonction de déconnexion à la bdd
function disconnect($connexion) {
	mysqli_close($connexion);
}

?>