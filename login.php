<html>
<body>

	<?php
		include 'inc/functions.php';
		if($_POST){
	
	$myUser = login($_POST['email'], $_POST['password']);
	//var_dump($myUser);

	if($myUser!=NULL) {
		//echo 'Bonjour '.$myUser['email'];
		header('Location:test_req.php');
		exit();

	}

		else {

			echo 'Problème Identifiant';
		
	}

}

else{

		?>

<form method='post' action='<?php $_SERVER['PHP_SELF']?>'>
			<p> E-Mail <input type='text' name='email' /></p>
            <p> Password <input type='text' name='password' /></p>
            <p> <input type='submit' value='Envoyer' /> </p>
</form>

<?php

}

?>

</body>
</html>