
			<div id="content" class="content section row">
				


				<div class="col-md-8 bg-base contenu col-lg-8 col-xl-9">

					<div class="ribbon ribbon-highlight">
						<ol class="breadcrumb ribbon-inner">
							<li><a href="index.html">Accueil</a></li>
							<li><a href="categories.html">Catégories</a></li>
							<li class="active"><?php echo $articles['0']['nom_cat']; ?></li>
						</ol>
					</div>
					
					<div class="entries">

						<header class="page-header">
						
							<h2 class="page-title">
								<?php echo $articles['0']['nom_cat']; ?>
							</h2>

						</header>
						
<?php

// Si il y a des articles, on les affiches	
if($nb_articles > 0){
	
include 'includes/articles.php';	

}else{
?>

<div class="col-md-12 text-center">
	<p>Il n'y a pas d'articles actuellement dans cette catégorie</p>
</div>



<?php
}
?>
								
					</div><!--/.entris-->

				</div><!--/.col-md-8.col-lg-8.col-xl-9-->

<?php

include('includes/sidebar.php');
?>

			</div><!--/#content-->


			
