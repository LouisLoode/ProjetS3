		<div class="entries">

<?php
foreach($articles as $data)
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
										<a href="index.php?page=articles&amp;id=<?php echo $data['id_article'];?>" rel="bookmark"><?php echo $data['titre']; ?></a>
									</h3>

									<div class="entry-meta">
										<span class="author">par <a href="index.php?page=utilisateurs&amp;id=<?php echo $data['id_user']; ?>"><?php echo $data['nom_user']; ?></a></span>
										<span class="entry-date"><a href="index.php?page=articles&amp;id=<?php echo $data['id_article']; ?>">le <time datetime="<?php echo $data['date']; ?>"><?php echo $data['date']; ?></time></a></span>
										<span class="category">Dans <a href="index.php?page=categories&amp;id=<?php echo $data['id_cat']; ?>"><?php echo $data['nom_cat']; ?></a></span>
									</div>
								</header>

								<p>
									<?php echo substr($data['contenu'],0,300);?>
									<p>Note: <?php echo $data['note']; ?>/10</p>
									<a href="index.php?page=articles&amp;id=<?php echo $data['id_article'];?>" class="more-link">Lire la suite<i class="icon icon-long-arrow-right"></i></a>
								</p>

							</div>

						</article>
<?php
}		
?>	

						<hr/>
						
						
						</div>	
						

					
<ul class="pagination">
<li><a href="#">«</a></li>
<?php
	foreach( $listePage as $num )
	{
	   if( $num == $page )
	      echo '<li class="active"><span>' . $num . '</span></li>';
	   elseif( $num == '...' )
	      echo '<li><a href="#" data-toggle="modal" data-target="#selectionPage"> ... </a></li>';
	   else
	      echo '<li><a href="' . $num . '">' . $num . '</a></li>';
	}
?>
<li><a href="#">»</a></li>
</ul>

<form action="javascript:alert( 'success!' );">
					<div class="modal fade" id="selectionPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
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