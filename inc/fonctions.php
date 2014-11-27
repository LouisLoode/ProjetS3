<?php
	
		
if (get_magic_quotes_gpc() == 1)
{
	function remove_magic_quotes_gpc(&$value) {
	
		$value = stripslashes($value);
	}
	array_walk_recursive($_GET, 'remove_magic_quotes_gpc');
	array_walk_recursive($_POST, 'remove_magic_quotes_gpc');
	array_walk_recursive($_COOKIE, 'remove_magic_quotes_gpc');
}
	
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



function code_alea(){
	$string = strtoupper(uniqid());
	return substr($string,5,strlen($string));
}

function chiffre_alea(){
	$string = mt_rand(111,999);
	return $string;
}

// Fonction qui gére tout les messages
function message($msg, $type=0)
{
	global $alerts;
	
		// On gére les types de messages
		$class = array('info', 'success', 'warning', 'danger'); // pour le css.
		$titre = array('Info', 'Succès', 'Attention', 'Erreur'); //Pour le titre de la page
	  							
	  	$nouvelleAlert = array('TITRE' => $titre[$type],
	  							'CSS' => 'alert-'.$class[$type],
	  							'MESSAGE' => $msg);
	  	$alerts[] = $nouvelleAlert;	
        
	return $alerts;
}
?>