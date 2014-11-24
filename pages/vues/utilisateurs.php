<?php
	foreach($utilisateurs as $data)
{
	?>

	<h1><a href="index.php?page=utilisateurs&id=<?php echo $data['id_user']; ?>"><?php echo $data['nom_user']; ?></a></h1>
	
						<h2>ID -> <?php echo $data['id_user']; ?></h2>
						<h2>EMAIL -> <?php echo $data['email']; ?></h2>
							<hr>
<?php
}
?>