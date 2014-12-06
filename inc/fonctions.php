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
	
	
	// On précise à mysql que l'on veut utiliser l'utf-8
	$req = mysqli_query($connexion, "SET NAMES 'utf8'");
	
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

//Fonction qui effectue les requêtes dans la bdd
function requete($myRequete) {
	global $query_count, $myConnexion;
		
		$query_count++;
	
	return mysqli_query($myConnexion,$myRequete);
}


function code_alea(){
	$string = strtoupper(uniqid());
	return substr($string,5,strlen($string));
}

function chiffre_alea(){
	$string = mt_rand(111,999);
	return $string;
}




function get_list_page($page, $nb_page, $nb = 3){
    $list_page = array();
    for ($i=1; $i <= $nb_page; $i++){
        if (($i < $nb) OR ($i > $nb_page - $nb) OR (($i < $page + $nb) AND ($i > $page -$nb)))
            $list_page[] = $i;
        else{
            if ($i >= $nb AND $i <= $page - $nb)
                $i = $page - $nb;
            elseif ($i >= $page + $nb AND $i <= $nb_page - $nb)
                $i = $nb_page - $nb;
            $list_page[] = '...';
        }
    }
    return $list_page;
}


// Fonction qui gére tout les messages
function message($msg, $type=0)
{
	global $alerts;
		
		// On crée la session qui gére les alerts.
		//$_SESSION['alerts'] = array();
	
		// On gére les types de messages
		$class = array('info', 'success', 'warning', 'danger'); // pour le css.
		$titre = array('Info', 'Succès', 'Attention', 'Erreur'); //Pour le titre de la page
	  							
	  	$nouvelleAlert = array('TITRE' => $titre[$type],
	  							'CSS' => 'alert-'.$class[$type],
	  							'MESSAGE' => $msg);
	  	$_SESSION['alerts'][] = $nouvelleAlert;	
        
}


function extrait($string, $start = 20, $end = 15, $sep = ' [...]')
{
        $extrait = substr($string,0,$start);
        $extrait = substr($string,0,strrpos($extrait,' ')).$sep;
        $extrait2 = strstr(substr($string, -$end,$end),' ');
        return $extrait.' '.$extrait2;
}

function authorisation($auth_necessaire, $auth)
{
	$level=(isset($auth))?$auth:0;
	return ($auth_necessaire <= intval($level));
}

function customHash($chars = 8, $items = 'abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'){
	
	$output 	= '';
	$chars 		= (int)$chars;
	$nbr		= strlen($items);
	
	if($chars > 0 && $nbr > 0){
		for($i = 0; $i < $chars; $i++){
			$output	.= $items[mt_rand(0,($nbr-1))];
		}
	}
	return $output;
}
?>