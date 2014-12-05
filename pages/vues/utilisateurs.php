
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

		            <table class="table">
		                <thead>
		                    <tr>
		                        <th>Id</th>
		                        <th>Pseudo</th>
		                        <th>Email</th>
		                        <th>Rôle</th>
		                    </tr>
		                </thead>
		                <tbody>
			                
		<?php
		foreach($utilisateurs as $data)
		{
		?>
		                    <tr>
		                        <td><a href="utilisateurs-0-<?php echo $data['id_user']; ?>.html"><?php echo $data['id_user']; ?></a></td>
		                        <td><a href="utilisateurs-0-<?php echo $data['id_user']; ?>.html"><?php echo $data['nom_user']; ?></a></td>
		                        <td><a href="utilisateurs-0-<?php echo $data['id_user']; ?>.html"><?php echo $data['email']; ?></a></td>
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