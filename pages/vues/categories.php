<?php
foreach($categories as $data)
{
	?>

	<h1><a href="index.php?page=categories&amp;id=<?php echo $data['id_cat']; ?>"><?php echo $data['nom_cat']; ?></a></h1>
	
						<h2>ID -> <?php echo $data['id_cat']; ?></h2>

<?php
}
?>