<?php
include 'inc/functions.php';

$user = login('test@test.com','test');
var_dump($user);
echo 'lol<br />';
echo $user['email'];
?>