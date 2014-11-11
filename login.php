<?php
include 'inc/functions.php';

$user = login('louisdebraine@gmail.com','toto');
var_dump($user);


?>
<html>
<body>
<?php 

?>
		<form name="connexion" id="connexion" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
			<fieldset><legend>Connexion</legend>
				<label for="email" class="float">Email :</label> <input type="text" name="email"/><br/>
				<label for="mdp" class="float">Mot de passe :</label> <input type="password" name="mdp"/><br/>
				<input type="hidden" name="validate" id="validate" value="ok"/>
				<div class="center"><input type="submit" value="Connexion" /></div>
			</fieldset>
		</form>
<?php

?>
</body>
</html>