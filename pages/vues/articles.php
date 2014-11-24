
<a href="index.php?page=articles&by=date">Trier par date</a> [] <a href="index.php?page=articles&by=auteur">Trier par auteur</a> [] <a href="index.php?page=articles&by=note">Trier par note</a> 
<?php

foreach($articles as $data)
{
	?>

	<h1><?php echo $data['titre']; ?></h1>
	
						<h2>De <?php echo $data['nom_user']; ?></h2>
						<p>Publie le <?php echo $data['date']; ?></p> 
						<p>Dans la rubrique <?php echo $data['nom_cat']; ?> </p>
						<p><?php echo $data['contenu']; ?></p>
						<p>Note: <?php echo $data['note']; ?>/10</p>
						
					
		<a href="index.php?page=articles&id=<?php echo $data['id_article'];?>"><?php echo $data['titre'];?></a>
			<br>
			<?php echo substr($data['contenu'],0,300);?>

	<?php
	}		
?>