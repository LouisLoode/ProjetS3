		

			<div class="section section-no-margin-bottom row entries bg-primary">

				<article class="entry style-grid style-hero hero-nav type-post col-xs-6 col-sm-6">
					
					<!--<a href="single.html">-->

						<header class="entry-header">
							<p class="small">Article précédent</p>
							<h3 class="entry-title">description</h3>
						</header>

						<figure class="entry-thumbnail">

							<div class="overlay overlay-primary"></div>

							<!-- to disable lazy loading, remove data-src and data-src-retina -->
							<img src="../img/placeholder.gif" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

							<!--fallback for no javascript browsers-->
							<noscript>
								<img src="http://placehold.it/480x280" alt="">
							</noscript>

						</figure>

					<!--</a> -->

				</article>

				<article class="entry style-grid style-hero hero-nav type-post col-xs-6 col-sm-6">
					
					<!--<a href="single-full.html">-->

						<header class="entry-header">
							<p class="small">Article Suivant</p>
							<h3 class="entry-title">description</h3>
						</header>

						<figure class="entry-thumbnail">

							<div class="overlay overlay-primary"></div>

							<!-- to disable lazy loading, remove data-src and data-src-retina -->
							<img src="../img/placeholder.gif" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

							<!--fallback for no javascript browsers-->
							<noscript>
								<img src="http://placehold.it/480x280" alt="">
							</noscript>

						</figure>

					<!--</a> -->

				</article>

			</div>

			<div id="content" class="content section row">

				<div class="col-md-8 contenu bg-base col-lg-8 col-xl-9">

					<div class="ribbon ribbon-highlight">
						<ol class="breadcrumb ribbon-inner">
							<li><a href="index.html">Accueil</a></li>
							<li><a href="categories.html">Catégories</a></li>
							<li><a href="index.php?page=categories&amp;id=<?php echo $data['id_cat']; ?>"><?php echo $data['nom_cat']; ?></a></li>
							<li class="active" title="<?php echo $data['titre']; ?>"><?php echo $data['titre']; ?></li>
						</ol>
					</div>
					
					<header class="page-header">

						<h2 class="page-title">
							<?php echo $data['titre']; ?>
						</h2>

					</header>

					<article class="entry style-single type-post">
						
						<figure class="entry-thumbnail">

							<!-- to disable lazy loading, remove data-src and data-src-retina -->
							<img src="../img/placeholder.gif" data-src="http://placehold.it/680x452" data-src-retina="http://placehold.it/1024x680" alt="">

							<!--fallback for no javascript browsers-->
							<noscript>
								<img src="http://placehold.it/680x452" alt="">
							</noscript>

						</figure>

						<div class="entry-meta">
							<span class="author">par <a href="index.php?page=utilisateurs&amp;id=<?php echo $data['id_user']; ?>"><?php echo $data['nom_user']; ?></a></span>
							<span class="entry-date"><a href="blog.html">le <time datetime="<?php echo $data['date']; ?>"><?php echo $data['date']; ?></time></a></span>
							<span class="category">dans <a href="index.php?page=categories&amp;id=<?php echo $data['id_cat']; ?>"><?php echo $data['nom_cat']; ?></a></span>
						</div>

						<div class="entry-content">

							<p class="lead">
								<?php echo $data['introduction']; ?>
							</p>
							<p>
								<?php echo $data['contenu']; ?>
							</p>

							<!-- 
							sample for adding full image
							<figure class="image image-full">

								<img src="../img/placeholder.gif" data-src="http://placehold.it/680x452" data-src-retina="http://placehold.it/1024x680" width="680" height="452" alt="">

								<noscript>
									<img src="http://placehold.it/680x452" alt="">
								</noscript>

							</figure> -->


						</div>

					</article>

					<div class="after-entry">

					<hr>


						<aside class="widget">

							<h4 class="widget-title">Publications relatives</h4>

							<div class="entries row">

<?php
foreach($articles_relatifs as $data)
{
?>
								<article class="entry type-post style-thumbnail col-xs-3 col-sm-3">
									
									<a href="articles-<?php echo $data['id_article'];?>.html">
									<figure class="entry-thumbnail">
										<!-- to disable lazy loading, remove data-src and data-src-retina -->
										<img src="../img/placeholder.gif" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

										<!--fallback for no javascript browsers-->
										<noscript>
											<img src="http://placehold.it/230x230" alt="">
										</noscript>
									</figure>
									</a>

									<h3 class="entry-title"><a href="articles-<?php echo $data['id_article'];?>.html"><?php echo $data['titre']; ?></a> </h3>

										
								</article>
<?php
}	
?>

							</div>

						</aside>

						<hr>

						<aside class="widget widget-author media indented">
							
							<a href="index.php?page=utilisateurs&amp;id=<?php echo $data['id_user']; ?>">
							<figure class="entry-author-avatar media-object avatar pull-left">
								<!-- to disable lazy loading, remove data-src and data-src-retina -->
								<img src="../img/placeholder.gif" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="img-circle" alt="">

								<!--fallback for no javascript browsers-->
								<noscript>
									<img src="http://placehold.it/230x230" alt="">
								</noscript>
							</figure>
							</a>

							<div class="media-body">
								<h4 class="entry-author-name">par <a href="index.php?page=utilisateurs&amp;id=<?php echo $data['id_user']; ?>"><?php echo $data['nom_user']; ?></a></h4>

								<p>
									<?php echo $data['nom_user']; ?>
								</p>

							</div>

						</aside>

					</div>
				</div><!--/.col-md-8.col-lg-8.col-xl-9-->

<?php
include('includes/sidebar.php');
?>
			</div><!--/#content-->
			