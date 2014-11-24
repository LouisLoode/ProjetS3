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

function code_alea(){
	$string = strtoupper(uniqid());
	return substr($string,5,strlen($string));
}

function chiffre_alea(){
	$string = mt_rand(111,999);
	return $string;
}
?>