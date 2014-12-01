<?php
foreach($user as $data)
{
?>
		<div id="content" class="content bg-base section">
			<div class="ribbon ribbon-highlight">
				<ol class="breadcrumb ribbon-inner">
					<li><a href="index.html">Accueil</a></li>
					<li><a href="utilisateurs.html">Utilisateurs</a></li>
					<li class="active"><?php echo $data['nom_user']; ?></li>
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
			                <h1><?php echo $data['nom_user']; ?></h1>
			                <h4>Web Developer</h4>
			                <div class="reseaux-sociaux">
				    <?php
					    if($data['facebook'] != ''){
					?>
			        <a class="btn btn-facebook-profile" href="<?php echo $data['facebook']; ?>"><i class="fa fa-facebook"></i></a>
			        <?php } ?>
			        
			        <?php
					    if($data['twitter'] != ''){
					?>
					<a class="btn btn-twitter-profile" href="<?php echo $data['twitter']; ?>"><i class="fa fa-twitter"></i></a>
					<?php } ?>
					
					<?php
					    if($data['instagram'] != ''){
					?>
					<a class="btn btn-instagram-profile" href="<?php echo $data['instagram']; ?>"><i class="fa fa-instagram"></i></a>
					<?php } ?>
					
					<?php
					    if($data['vimeo'] != ''){
					?>
					<a class="btn btn-vimeo-profile" href="<?php echo $data['vimeo']; ?>"><i class="fa fa-vimeo-square"></i></a>
					<?php } ?>
					
					<?php
					    if($data['tumblr'] != ''){
					?>
					<a class="btn btn-tumblr-profile" href="<?php echo $data['tumblr']; ?>"><i class="fa fa-tumblr"></i></a>
					<?php } ?>
					
					<?php
					    if($data['linkedin'] != ''){
					?>
					<a class="btn btn-linkedin-profile" href="<?php echo $data['linkedin']; ?>"><i class="fa fa-linkedin-square"></i></a>
					<?php } ?>
					
					<?php
					    if($data['soundcloud'] != ''){
					?>
					<a class="btn btn-soundcloud-profile" href="<?php echo $data['soundcloud']; ?>"><i class="fa fa-soundcloud"></i></a>
					<?php } ?>
					
					<?php
					    if($data['youtube'] != ''){
					?>
					<a class="btn btn-youtube-profile" href="<?php echo $data['youtube']; ?>"><i class="fa fa-youtube"></i></a>
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
							  <p>
							  	<?php echo $data['bio']; ?>
							  </p>
						  </div>
						  <div class="col-xs-12 col-md-6 col-lg-6">
							  <h3>Informations</h3>
							    <ul>
								  <li><strong>Date d'inscription :</strong> 23 Mars 1993</li>
								</ul>
						  </div>
						</div>

					  </div>
<?php
}	
?>					  

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