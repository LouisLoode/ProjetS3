<?php 
	/*
if($_SERVER['SERVER_ADDR'] == '127.0.0.1'){

}else{
define("DB_SERVER", "ldbrnsite.mysql.db");
define("DB_NAME", "ldbrnsite");
define("DB_USER", "ldbrnsite");
define("DB_PASSWORD", "Test100100");
}
*/

/*$Db_server='localhost';
$Db_user='blogmmi';
$Db_password='root';
$Db_name='root';*/

// Identifiants à la BDD
define("DB_SERVER", "localhost");
define("DB_NAME", "blogmmi");
define("DB_USER", "test");
define("DB_PASSWORD", "test");


define('ARTICLES_PAGES', '10');
define('DONNEE_LIGNES', '25');
define('USERS_PAGES', '50');

// Chemins vers les différents chemins utiles au fonctionnement du site
define('MODELE', '../../inc/modeles');
define('VUES', '../vues');
define('CONTROLEURS', 'pages/controleurs');

?>