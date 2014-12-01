

	<h1><?php echo $data['titre']; ?></h1>
	
						<h2>De <?php echo $data['nom_user']; ?></h2>
						<p>Publie le <?php echo $data['date']; ?></p> 
						<p>Dans la categorie <?php echo $data['nom_cat']; ?> </p>
						<p><?php echo $data['contenu']; ?></p>
						<p>Note: <?php echo $data['note']; ?>/10</p>



		<div id="main" class="container">


			<div id="content" class="content section row">
				
<?php
foreach($articles as $data)
{
?>

				<div class="col-md-8 bg-base col-lg-8 col-xl-9">

					<div class="ribbon ribbon-highlight">
						<ol class="breadcrumb ribbon-inner">
							<li><a href="index.php">Accueil</a></li>
							<li><a href="index.php?page=categories">Catégories</a></li>
							<li class="active"><?php echo $data['titre']; ?></li>
						</ol>
					</div>
					
					<div class="entries">
					
						<header class="page-header">
						
							<h2 class="page-title">
								<?php echo $data['titre']; ?>
							</h2>

						</header>

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
										<a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
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
								
					</div><!--/.entris-->

					<ul class="pagination">
						<li><a href="#">&laquo;</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li class="active"><span>3</span></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a href="#">8</a></li>
						<li><a href="#">9</a></li>
						<li><a href="#">10</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" data-toggle="modal" data-target="#selectionPage"> ... </a></li>
						<li><a href="#">1234</a></li>
						<li><a href="#">1235</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
					
					<!-- Modal pour chercher la page voulue -->
					<form action="javascript:alert( 'success!' );">
					<div class="modal fade" id="selectionPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
					        <h4 class="modal-title" id="myModalLabel">Naviguer entre les pages</h4>
					      </div>
					      <div class="modal-body">

						  <div class="form-group">
						    <label for="numeroPage">Aller à la page n°</label>
						    <input type="text" class="form-control" id="numeroPage" placeholder="Entrez le numéro de la page">
						  </div>

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
					        <button type="submit" class="btn btn-success">Valider</button>
					      </div>
					    </div>
					  </div>
					</div>
					</form>


				</div><!--/.col-md-8.col-lg-8.col-xl-9-->

<?php
}

include('sidebar.php');
?>

			</div><!--/#content-->


			
		</div><!--#main.container-->
