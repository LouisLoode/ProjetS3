<?php
	
if (isset($_GET['del'])) // Si l'on demande de supprimer une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $id = addslashes($_GET['del']);
    $action = del_cat($id);
    $alert = message('La catégorie selectionée a bien été supprimée.', 1);

}	

if (isset($_GET['add_menu'])) // Si l'on demande de supprimer une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $id = addslashes($_GET['add_menu']);
    $action = ajout_menu_cat($id);
    $alert = message('La catégorie selectionée a bien été ajoutée au menu.', 1);

}	

if (isset($_GET['del_menu'])) // Si l'on demande de supprimer une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $id = addslashes($_GET['del_menu']);
    $action = del_menu_cat($id);
    $alert = message('La catégorie selectionée a bien été supprimée du menu.', 1);

}	

// On définit les URL pour la pagination.
$urlPagination = array(
	'avant' => 'index.php?page=liste_cats&p=',
	'apres' => ''
);

?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Liste des catégories <small>ou <a href="index.php?page=dashboard">retourner au dashboard</a></small></h1>
                    </div>
                    <div class="col-lg-12">
	                    <a href="index.php?page=ajout_cat" class="btn btn-primary btn-sm pull-left">Ajouter une catégorie</a><br /><br />
	                </div>
                    <div class="col-lg-12">
	                    
	                    
	                
	                <table class="table">
						<tr>
						<th>Id</th>
						<th>Nom</th>
						<th>Menu</th>
						<th>Ordre</th>
						<th>Gestion</th>
						</tr>
						<?php
						
						// On récupére la valeur de la variable qui récupére le numéro de la page. Si la variable est vide, alors on attribue la valeur par défaut 1.
						$page = (isset($_GET['p']) && ctype_digit($_GET['p']) ) ? $_GET['p'] : 1;
						
			
						
						// Compte le nombre de lignes du tableau renvoyé par la variable liste_articles.
						$nb_articles = count_cats();
						
						$cats_pages = DONNEE_LIGNES;
						
						// On divise le nombre d'articles du tableau par le nombre d'éléments qu'on veut par pages.
						$nb_page = ceil($nb_articles / $cats_pages);
						
						// On génére la liste des pages.
						$listePage = get_list_page($page, $nb_page);
						
						$premiereEntree = ($page-1) * $cats_pages;
						
						//Préparation de la requête
						$cats = liste_categories();	
						//var_dump($articles);
						
						// On boucle les articles
						foreach($cats as $key => $data)
						{
						?>
						<tr class="<?php //echo $couleur_echeance; ?>">
						<td><?php echo $data['id_cat']; ?></td>
						<td style="width: 30%"><a href="index.php?page=ajout_cat&modif=<?php echo $data['id_cat']; ?>"><?php echo $data['nom_cat']; ?></a></td>
						<td><a href="<?php echo (($data['menu']=='1') ? 'index.php?page=liste_cats&del_menu='.$data['id_cat'] : 'index.php?page=liste_cats&add_menu='.$data['id_cat']); ?>"><span class="label <?php echo (($data['menu']=='1') ? 'label-success">Oui' : 'label-info">Non'); ?></span></a></td>
						<td><?php echo $data['ordre']; ?></td>
						<td>
						<div class="btn-group">
						  <a href="index.php?page=ajout_article&modif=<?php echo $data['id_cat']; ?>" class="btn btn-primary btn-sm">Modifier</a>
						  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="../articles-<?php echo $data['id_cat']; ?>.html">Consulter</a></li>
						    <li><a data-toggle="modal" href="#myModal-<?php echo $data['id_cat']; ?>" >Supprimer</a></li>
						  </ul>
						</div>
						
						
						  <!-- Modal -->
						  <div class="modal fade" id="myModal-<?php echo $data['id_cat']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title">Supprimer ?</h4>
						        </div>
						        <div class="modal-body">
						         Êtes vous sur de vouloir supprimer: "<?php echo $data['nom_cat']; ?>" ?
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
						          <a href="index.php?page=liste_cats&del=<?php echo $data['id_cat']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
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
<?php
 echo ((reset($listePage)==$page) ? '' : '<li><a href="'.$urlPagination['avant'].($page-1).$urlPagination['apres'].'">«</a></li>'); 

	foreach( $listePage as $num )
	{
	   if( $num == $page )
	      echo '<li class="active"><span>' . $num . '</span></li>';
	   elseif( $num == '...' )
	      echo '<li><a href="#" data-toggle="modal" data-target="#selectionPage"> ... </a></li>';
	   else
	      echo '<li><a href="' . $urlPagination['avant'] . $num . $urlPagination['apres'] . '">' . $num . '</a></li>';
	}
	
echo ((end($listePage)==$page) ? '' : '<li><a href="'.$urlPagination['avant'].($page+1).$urlPagination['apres'].'">»</a></li>');
?>
						</ul>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->