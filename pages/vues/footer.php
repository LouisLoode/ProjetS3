		</div><!--#main.container-->



		<footer id="footer" class="footer-area">

			<div class="footer-top container">
	
				<div class="row">
				
					<div class="widget col-xs-6 col-sm-3">

						<h4 class="widget-title">Information</h4>

						<ul class="entries links links">
							<li><a href="#">Accessibilité</a></li>
							<li><a href="#">À propos</a></li>
							<li><a href="#">Plan du site</a></li>
							<li><a href="#">Mentions légales</a></li>
							<li><a href="#">Contact</a></li>
						</ul>

					</div><!--/.col-3-->
					
					<div class="clearfix visible-xs"></div>

					<div class="widget col-xs-6 col-sm-3">

						<h4 class="widget-title">Suivez nous</h4>

					<a class="btn btn-social btn-facebook-profile" href="https://www.facebook.com/dealerdesons"><i class="fa fa-facebook"></i></a>
					<a class="btn btn-social btn-twitter-profile" href="http://twitter.com/DealerDeSons"><i class="fa fa-twitter"></i></a>
					<a class="btn btn-social btn-soundcloud-profile" href="https://soundcloud.com/dealerdesons"><i class="fa fa-soundcloud"></i></a>
					<a class="btn btn-social btn-instagram-profile" href="http://instagram.com/dealerdesons"><i class="fa fa-instagram"></i></a>
					<a class="btn btn-social btn-youtube-profile" href="https://www.youtube.com/user/DdSOfficiel"><i class="fa fa-youtube"></i></a>
		
					</div><!--/.col-3-->
					
					<div class="clearfix visible-xs"></div>
					
					<div class="widget col-xs-12 col-sm-6">

						<h4 class="widget-title">Contactez nous</h4>

						<p>Pour joindre directement notre rédaction: redaction@dealerdesons.com</p>
							
						<p>Pour joindre la production du site: production@dealerdesons.com</p>
							
						<p>Pour toute autre raison: contact@dealerdesons.com</p>
						

					</div><!--/.col-3-->




					

				</div><!--row.-->

			</div>
			<?php
			
			// Relever l'heure de fin d'execution du script
			$timeend = microtime(true);
			
			// On fait la différence (temps d'executiond de la page)
			$time = $timeend - $timestart;
			
			//Afficher le temps d'éxecution
			$page_load_time = number_format($time, 3);
				
			?>
			<div class="footer-bottom">

				<div class="container aligncenter">

					<p>&copy;2012-2014 par <a href="http://dealerdesons.com">DealerDeSons</a>. Tout droits réservés. <p>
					<p>Page exécutée en <?php echo $page_load_time; ?> sec - <?php echo $query_count <= 1 ?  intval($query_count).' requête SQL' : intval($query_count).' requêtes SQL';?></p>

				</div>

			</div>

		</footer>
		
		<script src="vendor/jquery-1.10.1.min.js"></script>
		<!--
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="vendor/jquery-1.10.1.min.js"><\/script>')</script>
	-->

		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

		<script src="vendor/prettyPhoto/jquery.prettyPhoto.js"></script>


		<script src="vendor/jquery.unveil.min.js"></script>
		
		<script src="js/main.js"></script>

	</body>
</html>