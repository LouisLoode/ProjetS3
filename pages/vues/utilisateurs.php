

		<div id="main" class="container">
		<div id="content" class="content bg-base section">
			
		<div class="ribbon ribbon-highlight">
						<ol class="breadcrumb ribbon-inner">
							<li><a href="index.php">Accueil</a></li>
							<li class="active">Utilisateurs</li>
						</ol>
		</div>
		<div class="row">

					<header class="page-header col-md-10 col-md-offset-1">
					
					

						<h2 class="page-title full-page-title">
							Liste des utilisateurs
						</h2>
						
				
					</header>
					 <div class="col-md-10 col-md-offset-1">
<table class="table table-hover">
	
	<tr>
       <th>Id</th>
       <th>Nom</th>
   </tr>
<?php
foreach($utilisateurs as $data)
{
?>
   <tr>
       <td><a href="index.php?page=utilisateurs&id=<?php echo $data['id_user']; ?>"><?php echo $data['id_user']; ?></a></td>
       <td><a href="index.php?page=utilisateurs&id=<?php echo $data['id_user']; ?>"><?php echo $data['nom_user']; ?></a></td>
   </tr>
<?php
}
?>
</table>
					 </div>
					 </div>
					 </div>
					 </div>