

			<div class="section section-no-margin-bottom row entries bg-primary">

				<article class="entry style-grid style-hero hero-nav type-post col-xs-6">
					
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

				<article class="entry style-grid style-hero hero-nav type-post col-xs-6">
					
					<a href="single.html">

						<header class="entry-header">
							<p class="small">Next Story</p>
							<h3 class="entry-title">Click here to see single blog post with sidebar sit voluptatem accusantium doloremque laudantium</h3>
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

			<div id="content" class="content bg-base section">
				
				<div class="ribbon ribbon-highlight">
					<ol class="breadcrumb ribbon-inner">
						<li><a href="#">Home</a></li>
						<li><a href="#">Social Media</a></li>
						<li class="active" title="Postman will send notifications to your flashy smartphone about popular people and their latest shouts">Postman will send notifications ...</li>
					</ol>
				</div>
				
				<div class="row">

					<header class="page-header col-md-10 col-md-offset-1">
						
						<div class="page-meta pull-right hidden-xs">
							<a href="#comments">
								<span class="comments-count-balloon bg-primary">123<em>Comments</em></span>
							</a>
						</div>

						<h2 class="page-title full-page-title">
							Postman will send notifications to your flashy smartphone about popular people and their latest shouts.
						</h2>

					</header>
					
					<article class="entry style-single style-single-full type-post col-md-10 col-md-offset-1">


						<div class="entry-meta indented">
							<span class="author">by <a href="blog.html">John Doe</a></span>
							<span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
							<span class="category">In <a href="blog.html">Social Media</a></span>
						</div>

						<div class="entry-content indented">

<?php
	
/*

$page = (isset($_GET['page']) && ctype_digit($_GET['page']) ) ? $_GET['page'] : 1;
$sql = 'SELECT COUNT(*) FROM taTable WHERE ...';
$result = mysql_query($sql);
$nbPage = mysql_result($result, 0);

$listePage = get_list_page($page, $nbPage);
foreach( $listePage as $num )
{
   if( $num == $page )
      echo '<b>' . $num . '</b>';
   elseif( $num == '...' )
      echo $num;
   else
      echo '<a href="taPage.php?page=' . $num . '">' . $num . '</a>';
}
	
*/



	
$page = 25;

$nb_page = 98;

$listePage = get_list_page($page, $nb_page);
?>
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
<?php

	$myUser = login('test@test.com', 'test');
	var_dump($myUser);
?>

						</div>
					</article>
				</div>
			</div>

		