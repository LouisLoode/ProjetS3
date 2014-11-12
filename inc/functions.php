<?php
include 'connexion.php';

function login($login, $password){
		$myConnexion = connect();
		$myRequete = 'SELECT email, idUser FROM Utilisateurs WHERE email="'.$login.'" AND password=PASSWORD("'.$password.'")';
		var_dump($myRequete);
		$myResult = mysqli_query($myConnexion, $myRequete);
		while ($row = mysqli_fetch_array($myResult)){
			$myUser['email'] = $row['email'];
			$myUser['idUser'] = $row['idUser'];
		}
	
	disconnect($myConnexion);
	
	return $myUser;
}

?>