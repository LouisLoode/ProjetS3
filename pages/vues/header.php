<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>

		<meta charset="utf-8">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>DealerDeSons</title>
		<meta name="description" content="">

		<!-- Mobile Devices Viewport Resset-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		
		<meta name="apple-mobile-web-app-capable" content="yes">

		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<!--[if IE 8]>
			<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->

		<link rel="stylesheet" href="vendor/prettyPhoto/css/prettyPhoto.css">

		<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Lato:300,400,700,400italic,700italic|Droid+Serif' rel='stylesheet' type='text/css'>

		<!-- base layout styling -->
		<link rel="stylesheet" href="css/base.css">

		<!-- components styling -->
		<link rel="stylesheet" href="css/components.css">
		
		<!-- template colorschemes -->
		<link rel="stylesheet" href="css/style.css">
		
		<!-- base layout styling -->
		<link rel="stylesheet" href="css/modifs.css">

		<script src="vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	</head>
	<body>

		<h1 class="sr-only">DealerDeSons</h1>
			
		<nav id="header" class="header-navbar" role="navigation">

			<div class="header-navbar-inner container">
			
				<div id="brand" class="navbar-brand">
					<a href="index.html" rel="bookmark">

						<!-- to disable lazy loading, remove data-src and data-src-retina -->
						<img src="img/light-logo.png" data-src="img/light-logo.png" data-src-retina="img/logo-retina.png" width="244" height="56" alt="">

						<!--fallback for no javascript browsers-->
						<noscript>
							<img src="img/light-logo.png" alt="">
						</noscript>
					</a>
				</div>
	
				<ul class="nav nav-icons">
					<li>
						<a href="#" class="btn-icon" data-toggle=".header-navbar-inner" data-toggle-class="search-toggled-in">
							<span class="search-toggled-out-icon glyphicon glyphicon-search"></span>
							<span class="search-toggled-in-icon glyphicon glyphicon-remove"></span>
						</a>
					</li>
				</ul>

				<div class="search-wrapper js-stoppropagation">
					<div class="search-wrapper-inner">
						<form>
							<input type="text" value="" placeholder="rechercher ... " title="Formulaire de recherche">
							<button class="btn-icon" type="submit"><span class="glyphicon glyphicon-search"></span></button>
						</form>
					</div>
				</div>

				<ul class="nav navbar-nav">
<?php if ($verif_connect){ ?>
					<li class="nav-all pull-right full-subnav-wrapper">

						<a href="#" data-toggle="li"> 
							<span class="img"><img src="img/Tests/avatar.jpg" alt="Avatar"></span>
						</a>

						<div class="row subnav-wrapper subnav-tabbed">
							
							
							<ul class="col-md-2 col-sm-2 subnav-tabbed-tabs alignright">
								
								<li class="active"><a href="#profil">Mon Profil</a></li>
								<li><a href="#articles">Mes Articles</a></li>
								<li><a href="deconnexion.html">Me déconnecter</a></li>
								
							</ul>

							<div class="col-md-10 col-sm-10 subnav-tabbed-panels">

								<div id="profil" class="subnav-tabbed-panel">
									
									<article class="entry type-post style-thumbnail col-sm-3 col-md-3">

										<figure class="entry-thumbnail">
											<a href="single.html">
													<!-- to disable lazy loading, remove data-src and data-src-retina -->
												<img src="img/placeholder.gif" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

												<!--fallback for no javascript browsers-->
												<noscript>
													<img src="http://placehold.it/230x230" alt="">
												</noscript>
											</a>
										</figure>

										<h3 class="entry-title"><a href="single.html">AAA Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
									
									</article>
									
								</div>
								
								<div id="articles" class="subnav-tabbed-panel">
									
									<article class="entry type-post style-thumbnail col-sm-3 col-md-3">

										<figure class="entry-thumbnail">
											<a href="single.html">
													<!-- to disable lazy loading, remove data-src and data-src-retina -->
												<img src="img/placeholder.gif" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

												<!--fallback for no javascript browsers-->
												<noscript>
													<img src="http://placehold.it/230x230" alt="">
												</noscript>
											</a>
										</figure>

										<h3 class="entry-title"><a href="single.html">AAA Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
									
									</article>
									
								</div>

							</div>

						</div>
					</li>
					
<?php }else{?>

					<li class="pull-right"><a href="connexion.html" class="btn btn-danger">Connexion</a></li>	
<?php } ?>
				
				


					<li class="nav-all visible-xs visible-sm visible-md full-subnav-wrapper active">

						<a href="#" data-toggle="li"> 
							<span class="toggle glyphicon glyphicon-align-justify"></span>
						</a>

						<div class="row subnav-wrapper">
							
							<div class="col-md-2 col-sm-2 bg-bar">
								<strong class="subnav-header">Categories</strong>
								<ul class="subnav-full">
									<?php
									foreach($categories_menu as $data)
									{
									?>
									<li><a href="index.php?page=categories&id=<?php echo $data['id_cat']; ?>"><?php echo $data['nom_cat']; ?></a></li>
									<?php
									}
									?>
								</ul>
							</div>

							<div class="col-md-2 col-sm-2">
								<strong class="subnav-header">Liens</strong>
								<ul class="subnav-full">
									<li><a href="#">Ipsum  Nisi </a></li>
									<li><a href="#">Dolor Aliquip</a></li>
									<li><a href="#">Amet Commodo</a></li>
									<li><a href="#">Consectetur </a></li>
								</ul>
							</div>

						</div>
					</li>


<?php
// On fait la boucle qui génére le menu.
foreach($categories_menu as $data)
{
?>
					<li class="visible-md visible-lg"><a href="index.php?page=categories&id=<?php echo $data['id_cat']; ?>"><?php echo $data['nom_cat']; ?></a></li>
<?php
}
?>
				</ul>

			</div>

		</nav>

		<div id="main" class="container">
			
				
				<?php include 'includes/messages_erreurs.php'; ?>
