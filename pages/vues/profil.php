<?php
foreach($user as $data)
{
?>
		<div id="main" class="container">
		<div id="content" class="content bg-base section">
			<div class="ribbon ribbon-highlight">
				<ol class="breadcrumb ribbon-inner">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="index.php?page=utilisateurs">Utilisateurs</a></li>
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
						<div class="entries profil">
						
<?php
foreach($article as $data)
{	
?>
						<article class="entry style-media media type-post">

							<figure class="media-object pull-left entry-thumbnail hidden-xs">

								<!-- to disable lazy loading, remove data-src and data-src-retina -->
								<img src="img/placeholder.gif" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">

								<!--fallback for no javascript browsers-->
								<noscript>
									<img src="http://placehold.it/230x230" alt="">
								</noscript>

							</figure>

							<div class="media-body">

								<header class="entry-header">
									<h3 class="entry-title">
										<a href="single.html" rel="bookmark"><?php echo $data['titre']; ?></a>
									</h3>

									<div class="entry-meta">
										<span class="author">by <a href="blog.html">John Doe</a></span>
										<span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
										<span class="category">In <a href="blog.html">Entertaintment</a></span>
									</div>
								</header>

								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
									<a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
								</p>

							</div>

						</article>
<?php
}	
?>
						<hr/>
						
						
						</div>	
					  </div>
					</div>
			
				  
				  
			  </div>

		</div>
		</div><!--#main.container-->