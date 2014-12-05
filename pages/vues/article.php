		

			<div class="section section-no-margin-bottom row entries bg-primary">

				<article class="entry style-grid style-hero hero-nav type-post col-xs-6 col-sm-6">
					
					<a href="single.html">

						<header class="entry-header">
							<p class="small">Previous Story</p>
							<h3 class="entry-title">Rumor: The long awaited update for Retina Display is ready to be annaunced on the next event held by them</h3>
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

					</a> 

				</article>

				<article class="entry style-grid style-hero hero-nav type-post col-xs-6 col-sm-6">
					
					<a href="single-full.html">

						<header class="entry-header">
							<p class="small">Next Story</p>
							<h3 class="entry-title">Click here to see single blog post in full mode sit voluptatem accusantium doloremque laudantium</h3>
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

					</a> 

				</article>

			</div>

			<div id="content" class="content section row">

				<div class="col-md-8 bg-base col-lg-8 col-xl-9">

					<div class="ribbon ribbon-highlight">
						<ol class="breadcrumb ribbon-inner">
							<li><a href="index.html">Accueil</a></li>
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
							<img src="../img/placeholder.gif" data-src="http://placehold.it/680x452" data-src-retina="http://placehold.it/1024x680" width="680" height="452" alt="">

							<!--fallback for no javascript browsers-->
							<noscript>
								<img src="http://placehold.it/680x452" alt="">
							</noscript>

						</figure>

						<div class="entry-meta indented">
							<span class="author">par <a href="index.php?page=utilisateurs&amp;id=<?php echo $data['id_user']; ?>"><?php echo $data['nom_user']; ?></a></span>
							<span class="entry-date"><a href="blog.html">le <time datetime="<?php echo $data['date']; ?>"><?php echo $data['date']; ?></time></a></span>
							<span class="category">dans <a href="index.php?page=categories&amp;id=<?php echo $data['id_cat']; ?>"><?php echo $data['nom_cat']; ?></a></span>
						</div>

						<div class="entry-content indented">

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

							<div class="gallery bg-page flushed-left">

								<!-- <h4 class="gallery-title">Gallery</h4> -->

								<div class="row">

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 1" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 2" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 3" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 4" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 5" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 6" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 7" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 8" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 9" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 10" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 10" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

									<div class="col-xs-3 col-sm-2">
										<a href="http://placehold.it/460x460" title="Image 2" class="thumbnail" data-rel="prettyPhoto[gallery]">

											<!-- to disable lazy loading, remove data-src and data-src-retina -->
											<img src="../img/placeholder.gif" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" alt="">

											<!--fallback for no javascript browsers-->
											<noscript>
												<img src="http://placehold.it/80x80" alt="">
											</noscript>

										</a>
									</div><!--/.col-xs-2.col-sm-2-->

								</div><!--/.row-->

							</div><!--/.gallery-->


						</div>

					</article>

					<div class="after-entry indented">

						<aside class="widget post-tags">
							<i class="icon-tags"></i> Tags:
							<a href="#"> Some</a>
							<a href="#"> Goes</a>
							<a href="#"> Here</a>
							<a href="#"> For</a>
							<a href="#"> Sure</a>
						</aside> 

						<hr>

						<aside class="widget widget-author media">
							
							<figure class="entry-author-avatar media-object avatar pull-left">
								<!-- to disable lazy loading, remove data-src and data-src-retina -->
								<img src="../img/placeholder.gif" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="img-circle" alt="">

								<!--fallback for no javascript browsers-->
								<noscript>
									<img src="http://placehold.it/230x230" alt="">
								</noscript>
							</figure>

							<div class="media-body">
								<h4 class="entry-author-name">par <a href="index.php?page=utilisateurs&amp;id=<?php echo $data['id_user']; ?>"><?php echo $data['nom_user']; ?></a></h4>

								<p>
									<?php echo $data['nom_user']; ?>
								</p>

							</div>

						</aside>

						<hr>

						<aside class="widget">

							<h4 class="widget-title">Publications relatives</h4>

							<div class="entries row">

								<article class="entry type-post style-thumbnail col-xs-3 col-sm-3">

									<figure class="entry-thumbnail">
										<!-- to disable lazy loading, remove data-src and data-src-retina -->
										<img src="../img/placeholder.gif" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

										<!--fallback for no javascript browsers-->
										<noscript>
											<img src="http://placehold.it/230x230" alt="">
										</noscript>
									</figure>

									<h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis.</a> </h3>

										
								</article>

								<article class="entry type-post style-thumbnail col-xs-3 col-sm-3">

									<figure class="entry-thumbnail">
										<!-- to disable lazy loading, remove data-src and data-src-retina -->
										<img src="../img/placeholder.gif" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

										<!--fallback for no javascript browsers-->
										<noscript>
											<img src="http://placehold.it/230x230" alt="">
										</noscript>
									</figure>

									<h3 class="entry-title"><a href="single.html">Oomnis iste natus error sit voluptatem.</a> </h3>

									
								</article>

								<article class="entry type-post style-thumbnail col-xs-3 col-sm-3">

									<figure class="entry-thumbnail">
										<!-- to disable lazy loading, remove data-src and data-src-retina -->
										<img src="../img/placeholder.gif" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

										<!--fallback for no javascript browsers-->
										<noscript>
											<img src="http://placehold.it/230x230" alt="">
										</noscript>
									</figure>

									<h3 class="entry-title"><a href="single.html">Temporibus autem quibusdam.</a> </h3>

									
								</article>

								<article class="entry type-post style-thumbnail col-xs-3 col-sm-3">

									<figure class="entry-thumbnail">
										<!-- to disable lazy loading, remove data-src and data-src-retina -->
										<img src="../img/placeholder.gif" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

										<!--fallback for no javascript browsers-->
										<noscript>
											<img src="http://placehold.it/230x230" alt="">
										</noscript>
									</figure>

									<h3 class="entry-title"><a href="single.html">Siste natus error sit voluptatem.</a> </h3>

									
								</article>

							</div>

						</aside>

						<hr>

						<aside class="widget">
							Share:
							<a href="#" class="" onclick="window.open(
								'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
								'facebook-share-dialog', 
								'width=626,height=436'); 
								return false;"><span class="icon-stack"><i class="icon-sign-blank icon-stack-base"></i><i class="icon-facebook icon-light"></i></span></a>
							<a href="#" class="" onclick="window.open(
								'http://twitter.com/home?status='+encodeURIComponent(location.href), 
								'facebook-share-dialog', 
								'width=626,height=436'); 
								return false;"><span class="icon-stack"><i class="icon-sign-blank icon-stack-base"></i><i class="icon-twitter icon-light"></i></span></a>
							<a href="#" class="" onclick="window.open(
								'https://plus.google.com/share?url='+encodeURIComponent(location.href), 
								'facebook-share-dialog', 
								'width=500,height=436'); 
								return false;"><span class="icon-stack"><i class="icon-sign-blank icon-stack-base"></i><i class="icon-google-plus icon-light"></i></span></a>
							<a href="#" class="" onclick="javascript:void((function(){var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"><span class="icon-stack"><i class="icon-sign-blank icon-stack-base"></i><i class="icon-pinterest icon-light"></i></span></a>
						</aside> 

					</div>
				</div><!--/.col-md-8.col-lg-8.col-xl-9-->

<?php
include('includes/sidebar.php');
?>
			</div><!--/#content-->
			