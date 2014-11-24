<?php

	foreach($user as $data)
{
	?>

	<h1><?php echo $data['nom_user']; ?></h1>
	
						<h2>De <?php echo $data['email']; ?></h2>

<hr />
	<?php
	}




	foreach($article as $data)
{
	?>

	<h1><?php echo $data['titre']; ?></h1>
	
						<h2>De <?php echo $data['nom_user']; ?></h2>
						<p>Publie le <?php echo $data['date']; ?></p> 
						<p>Dans la rubrique <?php echo $data['nom_cat']; ?> </p>
						<p><?php echo $data['contenu']; ?></p>
						<p>Note: <?php echo $data['note']; ?>/10</p>

	<?php
	}
?>