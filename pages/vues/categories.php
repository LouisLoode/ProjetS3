
			<div id="content" class="content">
				


				<div class="col-md-12 bg-base col-lg-12 col-xl-12">

					<div class="ribbon ribbon-highlight">
						<ol class="breadcrumb ribbon-inner">
							<li><a href="index.html">Accueil</a></li>
							<li class="active"><a href="categories.html">Catégories</a></li>
						</ol>
					</div>
					
					<div class="entries">

						<header class="page-header">
						
							<h2 class="page-title">
								Toutes les catégories
							</h2>

						</header>
						
<div class="section content bg-base">
				
				<h2 class="section-title ribbon"><span>Qu'est-ce qui vous intéresse en ce moment ?</span></h2>
				
				<div class="entries">

					<div class="row">

<?php
foreach($categories as $data)
{
?>

						<article class="entry type-post style-thumbnail-text col-sm-6 col-md-2 colheight-sm-1">
							
							<div class="entry-meta">
								<span class="category"><a href="categories-<?php echo $data['id_cat']; ?>.html"><?php echo $data['nom_cat']; ?></a></span>
							</div>

							<h3 class="entry-title">
								<a href="categories-<?php echo $data['id_cat']; ?>.html" rel="bookmark"><?php echo $data['nom_cat']; ?></a>
							</h3>

						</article>
						
<?php
}
?>

					</div><!--row.-->

				</div><!--entries.-->

			</div>
								
					</div><!--/.entris-->

				</div><!--/.col-md-8.col-lg-8.col-xl-9-->

			</div><!--/#content-->
