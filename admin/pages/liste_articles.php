<?php
	
if (isset($_GET['del'])) // Si l'on demande de supprimer une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $id = addslashes($_GET['del']);
    $action = del_article($id);
    $alert = message('L\'article selectioné a bien été modifié.', 3);

}	

if (isset($_GET['public'])) // Si l'on demande de rendre public une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $id = addslashes($_GET['public']);
    $action = public_article($id);
    $alert = message('L\'article selectioné a bien été rendu public.', 3);

}	

if (isset($_GET['brouillon'])) // Si l'on demande de mettre une news en privée (brouillon).
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $id = addslashes($_GET['brouillon']);
    $action = brouillon_article($id);
    $alert = message('L\'article selectioné a bien été remis dans les brouillon.', 3);

}


?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Liste des articles <small>ou <a href="index.php?page=dashboard">retourner dashboard</a></small></h1>
                    </div>
                    <div class="col-lg-12">
	                    <a href="creer_echeance.php" class="btn btn-primary btn-sm pull-left">Ajouter une échéance</a><br /><br />
	                </div>
                    <div class="col-lg-12">
	                    
	                    
	                
	                <table class="table">
						<tr>
						<th>Id</th>
						<th>Titre</th>
						<th>Catégories</th>
						<th>Visibilité</th>
						<th>Auteur</th>
						<th>Gestion</th>
						</tr>
						<?php
						
						// On récupére la valeur de la variable qui récupére le numéro de la page. Si la variable est vide, alors on attribue la valeur par défaut 1.
						$page = (isset($_GET['p']) && ctype_digit($_GET['p']) ) ? $_GET['p'] : 1;
						
						$by = (isset($_GET['by'])) ? $_GET['by'] : '';
						
						$id_cat = '';
						
						$id_user = '';
						
						// Compte le nombre de lignes du tableau renvoyé par la variable liste_articles.
						$nb_articles = count_articles();
						
						$articles_pages = DONNEE_LIGNES;
						
						// On divise le nombre d'articles du tableau par le nombre d'éléments qu'on veut par pages.
						$nb_page = ceil($nb_articles / $articles_pages);
						
						// On génére la liste des pages.
						$listePage = get_list_page($page, $nb_page);
						
						$premiereEntree = ($page-1) * $articles_pages;
						
						//Préparation de la requête
						$articles = liste_articles($by, $id_cat, $id_user, $premiereEntree.', '.$articles_pages, 'tout');	
						//var_dump($articles);
						
						// On boucle les articles
						foreach($articles as $data)
						{
							
						$couleur_statut = ($data['statut']=='1') ? 'success' : 'warning';
						?>
						<tr class="<?php //echo $couleur_echeance; ?>">
						<td><?php echo $data['id_article']; ?></td>
						<td style="width: 30%"><a href="index.php?page=ajout_article&id=<?php echo $data['id_article']; ?>"><?php echo $data['titre']; ?></a></td>
						<td><a href="index.php?page=ajout_categorie&id=<?php echo $data['id_cat']; ?>"><?php echo $data['nom_cat']; ?></a></td>
						<td><a href="<?php echo (($data['statut']=='1') ? 'index.php?page=liste_articles&brouillon='.$data['id_article'] : 'index.php?page=liste_articles&public='.$data['id_article']); ?>"><span class="label label-<?php echo $couleur_statut; ?>"><?php echo (($data['statut']=='1') ? 'Publié' : 'Brouillon'); ?></span></td>
	
						<td><a href="../utilisateurs-<?php echo $data['id_user']; ?>.html"><?php echo $data['nom_user']; ?></a></td>
						<td>
						<div class="btn-group">
						  <a href="creer_echeance.php?modif=<?php echo $data['id_article']; ?>" class="btn btn-primary btn-sm">Modifier</a>
						  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="voir_echeance.php?id=<?php echo $data['id_article']; ?>">Consulter</a></li>
						    <li><a data-toggle="modal" href="#myModal-<?php echo $data['id_article']; ?>" >Supprimer</a></li>
						  </ul>
						</div>
						
						
						  <!-- Modal -->
						  <div class="modal fade" id="myModal-<?php echo $data['id_article']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title">Supprimer ?</h4>
						        </div>
						        <div class="modal-body">
						         Êtes vous sur de vouloir supprimer: "<?php echo $data['titre']; ?>" ?
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
						          <a href="index.php?page=liste_articles&del=<?php echo $data['id_article']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
						        </div>
						      </div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						  </div><!-- /.modal -->
						  </td>
						</tr>
						<?php
						
						} // Fin de la boucle qui liste les news.
						?>
						</table>
						
						<ul class="pagination center-block">
						<li><a href="#">«</a></li>
						<?php
							foreach( $listePage as $num )
							{
							   if( $num == $page )
							      echo '<li class="active"><span>' . $num . '</span></li>';
							   elseif( $num == '...' )
							      echo '<li><a href="#" data-toggle="modal" data-target="#selectionPage"> ... </a></li>';
							   else
							      echo '<li><a href="' . $urlPagination['avant'] . $num . $urlPagination['apres'] . '">' . $num . '</a></li>';
							}
						?>
						<li><a href="#">»</a></li>
						</ul>

						

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->