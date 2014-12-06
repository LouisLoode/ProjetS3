
		<div id="content" class="content bg-base section">
			<div class="ribbon ribbon-highlight">
				<ol class="breadcrumb ribbon-inner">
					<li><a href="index.html">Accueil</a></li>
					<li><a href="utilisateurs.html">Utilisateurs</a></li>
					<li class="active"><?php echo $user_infos['nom_user']; ?></li>
				</ol>
			</div>
		<div class="row">
			<div class="col-md-12">	
						<div class="row panel">
					<div class="col-md-4 bg_blur "><!--<a href="#" class="follow_btn hidden-xs">Follow</a>--></div>
			        <div class="col-md-8  col-xs-12">
			           <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail picture hidden-xs" />
			           <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail visible-xs picture_mob" />
			           <div class="header">
			                <h1><?php echo $user_infos['nom_user']; ?></h1>
			                <h4>Web Developer</h4>
			                <div class="reseaux-sociaux">
				    <?php
					    if($user_infos['facebook'] != ''){
					?>
			        <a class="btn btn-facebook-profile" href="<?php echo $user_infos['facebook']; ?>"><i class="fa fa-facebook"></i></a>
			        <?php } ?>
			        
			        <?php
					    if($user_infos['twitter'] != ''){
					?>
					<a class="btn btn-twitter-profile" href="<?php echo $user_infos['twitter']; ?>"><i class="fa fa-twitter"></i></a>
					<?php } ?>
					
					<?php
					    if($user_infos['instagram'] != ''){
					?>
					<a class="btn btn-instagram-profile" href="<?php echo $user_infos['instagram']; ?>"><i class="fa fa-instagram"></i></a>
					<?php } ?>
					
					<?php
					    if($user_infos['vimeo'] != ''){
					?>
					<a class="btn btn-vimeo-profile" href="<?php echo $user_infos['vimeo']; ?>"><i class="fa fa-vimeo-square"></i></a>
					<?php } ?>
					
					<?php
					    if($user_infos['tumblr'] != ''){
					?>
					<a class="btn btn-tumblr-profile" href="<?php echo $user_infos['tumblr']; ?>"><i class="fa fa-tumblr"></i></a>
					<?php } ?>
					
					<?php
					    if($user_infos['linkedin'] != ''){
					?>
					<a class="btn btn-linkedin-profile" href="<?php echo $user_infos['linkedin']; ?>"><i class="fa fa-linkedin-square"></i></a>
					<?php } ?>
					
					<?php
					    if($user_infos['soundcloud'] != ''){
					?>
					<a class="btn btn-soundcloud-profile" href="<?php echo $user_infos['soundcloud']; ?>"><i class="fa fa-soundcloud"></i></a>
					<?php } ?>
					
					<?php
					    if($user_infos['youtube'] != ''){
					?>
					<a class="btn btn-youtube-profile" href="<?php echo $user_infos['youtube']; ?>"><i class="fa fa-youtube"></i></a>
					<?php } ?>

			                </div>
			           </div>
			        </div>
			    </div>   
			    
			</div>
			  
			  
			  	<div class="col-md-12">

				  </div>
			  
					  		
					<ul class="nav nav-tabs" role="tablist" id="myTab">
						<li class="active"><a href="#apropos" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user visible-xs"></span> <span class="hidden-xs">À propos</span></a></li>
						<li><a href="#articles" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-list-alt visible-xs"></span> <span class="hidden-xs">Articles</span></a></li>
					</ul>
					
					<div class="tab-content">
					  
					  <!-- Onglet à propos -->
					  <div class="tab-pane active" id="apropos">
					  
					  
						<div class="row">
						  <div class="col-xs-12 col-md-6 col-lg-6">
						  <h3>Biographie</h3>
						<?php
					    if($user_infos['bio'] == ''){
						?>
							<p>
							  	Cet utilisateur n'a pas encore défini de biographie.
							</p>
						<?php }else{ ?>
							  <p>
							  	<?php echo $user_infos['bio']; ?>
							  </p>
						<?php } ?>
						  </div>
						  <div class="col-xs-12 col-md-6 col-lg-6">
							  <h3>Informations</h3>
							    <ul>
								  <li><strong>Date d'inscription :</strong> 23 Mars 1993</li>
								</ul>
						  </div>
						</div>

					  </div>
					  

					  <!-- Onglet articles -->
					  <div class="tab-pane" id="articles">
						 <div class="profil">
						
<?php
include 'includes/articles.php';	
?>	
						
						
						</div>	
					  </div>
					</div>
			
				  
				  
			  </div>

		</div>