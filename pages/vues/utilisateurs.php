
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
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Users</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Pseudo" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Rôle" disabled></th>
                    </tr>
                </thead>
                <tbody>
	                
<?php
foreach($utilisateurs as $data)
{
?>
                    <tr>
                        <td><a href="index.php?page=utilisateurs&id=<?php echo $data['id_user']; ?>"><?php echo $data['id_user']; ?></a></td>
                        <td><a href="index.php?page=utilisateurs&id=<?php echo $data['id_user']; ?>"><?php echo $data['nom_user']; ?></a></td>
                        <td><a href="index.php?page=utilisateurs&id=<?php echo $data['id_user']; ?>"><?php echo $data['email']; ?></a></td>
                        <td>Rôle</td>
                    </tr>
<?php
}
?>
                </tbody>
            </table>
        </div>
    </div>
	



					 </div>
					 </div>
					 </div>