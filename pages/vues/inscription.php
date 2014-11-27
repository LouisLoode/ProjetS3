<?php
	
include('header.php');

	if ($i!=0)
   	{
        echo'<h1>Inscription interrompue</h1>';
        echo'<p>Une ou plusieurs erreurs se sont produites pendant l incription</p>';
        echo'<p>'.$i.' erreur(s)</p>';
        echo'<p>'.$login_erreur.'</p>';
        echo'<p>'.$mdp_erreur.'</p>';
        echo'<p>'.$email_erreur1.'</p>';
        echo'<p>'.$email_erreur2.'</p>';
    }

?>

		<div id="main" class="container">
		<div id="content" class="content bg-base section">
		<div class="ribbon ribbon-highlight">
						<ol class="breadcrumb ribbon-inner">
							<li><a href="#">Home</a></li>
							<li><a href="#">Features</a></li>
							<li class="active">Blog 2 Columns</li>
						</ol>
					</div>

		<div class="row">

					<header class="page-header col-md-10 col-md-offset-1">
					

						<h2 class="page-title full-page-title">
							Inscription <small>c'est gratuit et ça le restera !</small>
						</h2>

					</header>
    <div class="col-xs-12 col-sm-6 col-md-6">
    <h4 class="text-center">via ce formulaire</h4>
    
		<form role="form">
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Nom d'utilisateur" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Adresse email" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mot de passe" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirmer" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7"> J'accepte</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 En cliquant sur <strong class="label label-success">Créer mon compte</strong>, vous acceptez les <a href="#" data-toggle="modal" data-target="#t_and_c_m">Conditions d'utilisations</a> que nous avons définit sur le site, ceci inclut les cookies.
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Créer un compte" class="btn btn-success btn-block btn-lg" tabindex="7"><br /></div>
				<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-danger btn-block btn-lg">Connexion</a><br /></div>
			</div>
		</form>
	</div>
    <div class="col-xs-12 col-sm-6 col-md-6">
		<h4 class="text-center">via Facebook, Twitter, Google+ ou Soundcloud</h4>
							<!-- Partie affichage bureau -->
			
					<div class="col-md-12 text-center"><a class="btn btn-lg btn-facebook" href="#"><i class="fa fa-facebook"></i> Inscription via Facebook</a></div>
					<div class="col-md-12 text-center"><a class="btn btn-lg btn-twitter" href="#"><i class="fa fa-twitter"></i> Inscription via Twitter</a></div>
					<div class="col-md-12 text-center"><a class="btn btn-lg btn-youtube" href="#"><i class="fa fa-youtube"></i> Inscription via Youtube</a></div>
					<div class="col-md-12 text-center"><a class="btn btn-lg btn-soundcloud" href="#"><i class="fa fa-soundcloud"></i> Inscription via Souncloud</a></div>
		
					
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Conditions d'utilisation</h4>
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


		</div>
			
		</div><!--#main.container-->


<?php
include('footer.php');
?>