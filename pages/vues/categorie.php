
			<div id="content" class="content section row">
				


				<div class="col-md-8 bg-base col-lg-8 col-xl-9">

					<div class="ribbon ribbon-highlight">
						<ol class="breadcrumb ribbon-inner">
							<li><a href="index.html">Accueil</a></li>
							<li><a href="categories.html">Catégories</a></li>
							<li class="active"><?php //echo $data['titre']; ?></li>
						</ol>
					</div>
					
					<div class="entries">

						<header class="page-header">
						
							<h2 class="page-title">
								<?php //echo $data['titre']; ?>
							</h2>

						</header>
						
<?php
include 'includes/articles.php';	
?>	
								
					</div><!--/.entris-->

				</div><!--/.col-md-8.col-lg-8.col-xl-9-->

<?php
include('includes/sidebar.php');
?>

			</div><!--/#content-->


			
