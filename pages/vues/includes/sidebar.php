				<div class="sidebar col-md-4 col-lg-4 col-xl-3">
				
				<aside id="reviewCarousel" class="widget carousel slide">

						<h2 class="widget-title ribbon"><span>Prochainement</span></h2>

						<div class="carousel-inner">
<?php
//print_r($widget_events);
$derniereCle = $widget_events[0];

//var_dump($widget_events);
	
foreach($widget_events as $data)
{
	$active = ($derniereCle['id_article'] == $data['id_article']) ? ' active' : '';
?>
							<div class="item<?php echo $active;?>">
										
								<article class="entry style-grid style-review type-post">
					
									<header class="entry-header">
										<h3 class="entry-title"><a href="articles-<?php echo $data['id_article'];?>.html"><?php echo $data['titre'];?></a></h3>
										<p class="small"><?php echo $data['date'];?></p>
									</header>
												
									<figure class="entry-thumbnail">

										<a href="articles-<?php echo $data['id_article'];?>.html" class="overlay overlay-primary"></a>

										<!-- to disable lazy loading, remove data-src and data-src-retina -->
										<img src="http://placehold.it/480x280" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="" style="opacity: 1;">

										<!--fallback for no javascript browsers-->
										<noscript>
											&lt;img src="http://placehold.it/720x420" alt=""&gt;
										</noscript>

									</figure>

								</article>

							</div><!--/.item.active-->
<?php
}
?>							

						</div><!--/.carousel-inner-->

						<a class="left carousel-control" href="#reviewCarousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="right carousel-control" href="#reviewCarousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>

					</aside>
					
				<aside class="widget">

						<h2 class="widget-title ribbon"><span>Deals Aléatoires</span></h2>

						<div class="entries row">
<?php
foreach($widget_aleatoire as $data)
{
?>
							<article class="type-post style-media-list media col-sm-6 col-md-12">

								<!-- to disable lazy loading, remove data-src and data-src-retina -->
								<img src="http://placehold.it/80x80" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="" style="opacity: 1;">

								<!--fallback for no javascript browsers-->
								<noscript>
									&lt;img src="http://placehold.it/80x80" alt=""&gt;
								</noscript>

								<div class="media-body">
									<h3 class="entry-title">
										<a href="articles-<?php echo $data['id_article'];?>.html" rel="bookmark"><?php echo $data['titre']; ?></a>
									</h3>
									<div class="entry-meta">
										<span class="entry-date"><a href="articles-<?php echo $data['id_article']; ?>.html">le <time datetime="<?php echo $data['date']; ?>"><?php echo $data['date']; ?></time></a></span>
										<span class="category">Dans <a href="categorie-<?php echo $data['id_cat']; ?>"><?php echo $data['nom_cat']; ?></a></span>
									</div>
								</div>

							</article>
<?php
}	
?>
						</div>

					</aside>

				</div><!--/.sidebar col-md-4 col-lg-4 col-xl-3-->

				</div><!--/.sidebar col-md-4 col-lg-4 col-xl-3-->