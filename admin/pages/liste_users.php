<?php
	
if (isset($_GET['del'])) // Si l'on demande de supprimer une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $id = addslashes($_GET['del']);
    $action = del_user($id);
    $alert = message('L\'utilisateur selectioné a bien été supprimé.', 1);

}	

if (isset($_GET['public'])) // Si l'on demande de rendre public une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $id = addslashes($_GET['public']);
    $action = public_article($id);
    $alert = message('L\'article selectioné a bien été rendu public.', 1);

}	

// On définit les URL pour la pagination.
$urlPagination = array(
	'avant' => 'index.php?page=liste_users&p=',
	'apres' => ''
);

?>


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Liste des utilisateurs <small>ou <a href="index.php?page=dashboard">retourner au dashboard</a></small></h1>
                    </div>
                    <div class="col-lg-12">
	                    <a href="index.php?page=ajout_article" class="btn btn-primary btn-sm pull-left">Ajouter une échéance</a><br /><br />
	                </div>
                    <div class="col-lg-12">
	                    
	              
	                
	                <table class="table">
						<tr>
						<th>Id</th>
						<th>Nom</th>
						<th>Email</th>
						<th>Role</th>
						<th>Gestion</th>
						</tr>
						<?php
						
						// On récupére la valeur de la variable qui récupére le numéro de la page. Si la variable est vide, alors on attribue la valeur par défaut 1.
						$page = (isset($_GET['p']) && ctype_digit($_GET['p']) ) ? $_GET['p'] : 1;
						
						$by = (isset($_GET['by'])) ? $_GET['by'] : '';
						
						// Compte le nombre de lignes du tableau renvoyé par la variable liste_articles.
						$nb_articles = nbr_utilisateurs();
						
						$articles_pages = DONNEE_LIGNES;
						
						// On divise le nombre d'articles du tableau par le nombre d'éléments qu'on veut par pages.
						$nb_page = ceil($nb_articles / $articles_pages);
						
						// On génére la liste des pages.
						$listePage = get_list_page($page, $nb_page);
						
						$premiereEntree = ($page-1) * $articles_pages;
						
						//Préparation de la requête
						$infos_users = liste_utilisateurs('', $premiereEntree.', '.$articles_pages);
						//var_dump($articles);
						
						// On boucle les articles
						foreach($infos_users as $data)
						{
							
						//$couleur_statut = ($data['role']=='1') ? 'success' : 'warning';
						?>
						<tr class="<?php //echo $couleur_statut; ?>">
						<td><?php echo $data['id_user']; ?></td>
						<td style="width: 30%"><?php echo $data['nom_user']; ?></td>
						<td style="width: 30%"><a href="index.php?page=ajout_article&modif=<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a></td>

						<td>
							<?php echo $role[$data['role']]; ?>
						</td>
	
						<td>
						<div class="btn-group">
						  <a href="index.php?page=ajout_article&modif=<?php echo $data['id_article']; ?>" class="btn btn-primary btn-sm">Modifier</a>
						  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="../utilisateurs-<?php echo $data['id_user']; ?>.html">Consulter</a></li>
						    <li><a data-toggle="modal" href="#myModal-<?php echo $data['id_user']; ?>" >Supprimer</a></li>
						  </ul>
						</div>
						
						
						  <!-- Modal -->
						  <div class="modal fade" id="myModal-<?php echo $data['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title">Supprimer ?</h4>
						        </div>
						        <div class="modal-body">
						         Êtes vous sur de vouloir supprimer: "<?php echo $data['nom_user']; ?>" ?
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
						          <a href="index.php?page=liste_users&del=<?php echo $data['id_user']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
						        </div>
						      </div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						  </div><!-- /.modal -->
						  </td>
						</tr>
						<?php
						
						} // Fin de la boucle qui liste les utilisateurs.
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