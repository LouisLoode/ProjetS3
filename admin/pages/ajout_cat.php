<?php
/*
http://stackoverflow.com/questions/9852536/one-article-multiple-categories-system-in-php-sql	
*/
	
if ($_POST)
{
		
	    $titre = $myConnexion->real_escape_string($_POST['titre']);	// Titre
	    $menu = (($_POST['menu']=='1') ? '1' : '0'); //Dans le menu ?
		$ordre = $myConnexion->real_escape_string($_POST['ordre']); //Description
	    $id_publication = $myConnexion->real_escape_string($_POST['id_publication']);

  	// On vérifie si c'est une modification de news ou non.
		if ($_POST['id_publication'] == 0)
	    {


			if (ajout_cat($titre, $menu, $ordre)==0)
			{

				 $alert = message('L\'article a bien été créé.', 1);
				 header('Location: index.php?page=liste_articles');
				 exit;
				 
			}else{
				
				$alert = message('Il y a eu un probléme durant la création de l\'article.', 3);
				header('Location: index.php?page=ajout_article');
				exit;
			}
		}	
		else
		{

			if (modif_cat($id_publication, $titre, $menu, $ordre)==0)
			{

				 $alert = message('L\'article a bien été modifié.', 1);
				 /*header('Location: index.php?page=liste_articles');
				 exit;*/
				 
			}else{
				
				$alert = message('Il y a eu une erreur dans la modification de votre article.', 3);
				header('Location: index.php?page=ajout_article');
				exit;
			}
		
    	}
}	
			


if (isset($_GET['modif'])) // Si on demande de modifier une news.
{
    // On protège la variable « modifier_news » pour éviter une faille SQL.
    $id_modif = addslashes($_GET['modif']);
    // On récupère les informations de la news correspondante.
    $data = display_article($id_modif);
    $titre = stripslashes($data['titre']);
    $date = $data['date'];
    $introduction = stripslashes($data['introduction']);
    $contenu = stripslashes($data['contenu']);
    $categorie = $data['id_cat'];
	//$fichier = $data['fichier'];
	$en_avant = $data['en_avant'];
    $id_publication = $data['id_article']; // Cette variable va servir pour se souvenir que c'est une modification.
}
else // C'est qu'on rédige une nouvelle echeance.
{
    // Les variables $titre et $contenu sont vides, puisque c'est une nouvelle echeance.
    $titre = '';
    $ordre = '';
    $menu = 0;
    $id_publication = 0; // La variable vaut 0, donc on se souviendra que ce n'est pas une modification.
}


		?>



                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Création d'un article <small>ou <a href="index.php?page=liste_articles">retourner à la liste d'articles</a></small></h1>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group col-md-6">
	                    
	                          <form role="form" method="post" action="<?php $_SERVER['PHP_SELF']?>">

					        <div class="form-group col-md-12">
					          <label for="titre">Titre</label>
					            <input type="text" class="form-control" name="titre" id="Titre" <?php echo (($titre=='') ? 'placeholder="Titre"' : 'value="'.$titre.'"'); ?>>
					        </div>
					
					        <div class="form-group col-md-12">
					          <label for="date">Ordre</label>
					            <input type="date" class="form-control" name="ordre" id="Ordre" <?php echo (($ordre=='') ? 'placeholder="Ordre"' : 'value="'.$ordre.'"'); ?>>
					        </div>   
	                </dv>   
                    
				<div  class="form-group col-md-6">         
					<div class="chat-panel panel panel-default">
						<div class="panel-heading">
                            <i class="fa fa-folder fa-fw"></i>
                            Option
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="chat">
					        <div class="checkbox">
					          <label>

					            <input type="checkbox" name="en_avant" value="1" <?php echo (($en_avant=='0') ? '' : 'checked'); ?>> Mettre en avant
					          </label>
					        </div>
                            </div>
                        </div>
                    </div>
				</div>                 
                    </div>
                    
					    <input type="hidden" name="id_publication" value="<?php echo $id_publication; ?>" />
					          
					          
					        <div class="col-xs-12 col-md-6">
					          <input type="submit" value="Validation" class="btn btn-success btn-block btn-lg" tabindex="7"><br>
					        </div>
					        <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-danger btn-block btn-lg">Annuler</a><br>
					        </div>
					
					        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
