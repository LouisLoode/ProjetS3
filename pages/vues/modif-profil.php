		<div id="content" class="content bg-base section">
		<div class="ribbon ribbon-highlight">
						<ol class="breadcrumb ribbon-inner">
							<li><a href="index.php">Accueil</a></li>
							<li><a href="utilisateurs-0-<?php echo $user_infos['id_user'];?>.html"><?php echo $user_infos['nom_user'];?></a></li>
							<li class="active">Modifier mon profil</li>
						</ol>
					</div>

				<div class="row">

					<header class="page-header col-md-10 col-md-offset-1">
					

						<h2 class="page-title full-page-title">
							Modifier mon profil
						</h2>

					</header>
								
	<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
	<form role="form">
    	<h4 class="text-center">vos informations obligatoires</h4>
    
		
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" value="<?php echo $user_infos['nom_user'];?>" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" value="<?php echo $user_infos['email'];?>" tabindex="4">
			</div>
			
			<h4 class="text-center">vos informations complémentaires</h4>
    
			<div class="form-group">
				<input type="text" name="facebook" id="facebook" class="form-control input-lg" <?php echo (($user_infos['facebook']=='') ? 'placeholder="Adresse Facebook"' : 'value="'.$user_infos['facebook']).'"'; ?> tabindex="4">
			</div>

			<div class="form-group">
				<input type="text" name="twitter" id="twitter" class="form-control input-lg" <?php echo (($user_infos['twitter']=='') ? 'placeholder="Adresse Twitter"' : 'value="'.$user_infos['twitter']).'"'; ?> tabindex="4">
			</div>
			
			<div class="form-group">
				<input type="text" name="instagram" id="instagram" class="form-control input-lg" <?php echo (($user_infos['instagram']=='') ? 'placeholder="Adresse Instagram"' : 'value="'.$user_infos['instagram']).'"'; ?> tabindex="4">
			</div>
			<div class="form-group">
				<input type="text" name="vimeo" id="vimeo" class="form-control input-lg" <?php echo (($user_infos['vimeo']=='') ? 'placeholder="Adresse Vimeo"' : 'value="'.$user_infos['vimeo']).'"'; ?> tabindex="4">
			</div>
			<div class="form-group">
				<input type="text" name="tumblr" id="tumblr" class="form-control input-lg" <?php echo (($user_infos['tumblr']=='') ? 'placeholder="Adresse Tumblr"' : 'value="'.$user_infos['tumblr']).'"'; ?> tabindex="4">
			</div>
			<div class="form-group">
				<input type="text" name="linkedin" id="linkedin" class="form-control input-lg" <?php echo (($user_infos['linkedin']=='') ? 'placeholder="Adresse LinkedIn"' : 'value="'.$user_infos['linkedin']).'"'; ?> tabindex="4">
			</div>
			<div class="form-group">
				<input type="text" name="soundcloud" id="soundcloud" class="form-control input-lg" <?php echo (($user_infos['soundcloud']=='') ? 'placeholder="Adresse Soundcloud"' : 'value="'.$user_infos['soundcloud']).'"'; ?> tabindex="4">
			</div>
			<div class="form-group">
				<input type="text" name="youtube" id="youtube" class="form-control input-lg" <?php echo (($user_infos['youtube']=='') ? 'placeholder="Adresse Youtube"' : 'value="'.$user_infos['youtube']).'"'; ?> tabindex="4">
			</div>
			<div class="form-group">
				<textarea class="form-control" name="bio" id="bio" <?php echo (($user_infos['bio']=='') ? 'placeholder="Biographie"' : 'value="'.$user_infos['bio']).'"'; ?> cols=50 rows=5 class="form-control"></textarea>
				<p class="help-block"><span id="compteur_bio">Tapez votre texte</span></p>
				
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Modifier mon profil" class="btn btn-success btn-block btn-lg" tabindex="7"><br /></div>
				<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-danger btn-block btn-lg">Annuler</a><br /></div>
			</div>
		</form>
	</div>

	
	<div class="col-xs-12 col-sm-6 col-md-6">
		<div class="col-md-12">
			<h4 class="text-center">votre mot de passe</h4>
								<!-- Partie affichage bureau -->
				
						<div class="col-md-12 text-center">
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#mdp"><i class="fa fa-upload fa-2x"></i> Gérer mon mot de passe</a>
						</div>
			
						
		</div>
		<div class="col-md-12">
			<h4 class="text-center">votre avatar</h4>
								<!-- Partie affichage bureau -->
				
						<div class="col-md-12 text-center">
							<a class="btn btn-success" href="#" data-toggle="modal" data-target="#avatar"><i class="fa fa-upload fa-2x"></i> Uploader un avatar</a>
						</div>
			
						
		</div>	
	</div>
	</div>


</div>

<!-- Modals -->
<div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Modifier mon avatar</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="mdp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Modifier mon mot de passe</h4>
			</div>
			<div class="modal-body">		
			<div class="col-md-12">
				
				
				<div class="form-group col-lg-6">
					<label>Nouveau mot de passe</label>
					<input type="password" name="new_mdp1" class="form-control" id="new_mdp1" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Répéter le mot de passe</label>
					<input type="password" name="new_mdp2" class="form-control" id="new_mdp2" value="">
				</div>
								
				<div class="form-group col-lg-12">
					<label>Votre ancien mot de passe</label>
					<input type="password" name="old_mdp" class="form-control" id="old_mdp" value="">
				</div>					
			
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Modifier mon profil</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</div>