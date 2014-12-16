<?php
/*
http://stackoverflow.com/questions/9852536/one-article-multiple-categories-system-in-php-sql	
*/
	// On précise qu'on veut charger toutes les ressources qui sont nécéssaire à l'utilisation du formulaire.
	$page_type = true;
	
if ($_POST)
{
		$chaine = customHash(); // Chaine de caractére unique par publication
	    $titre = $myConnexion->real_escape_string($_POST['titre']);	// Titre
	    $date = $myConnexion->real_escape_string($_POST['date']);
		$introduction = $myConnexion->real_escape_string($_POST['contenu']); //Description
	    $contenu = $myConnexion->real_escape_string($_POST['contenu']); //Description
	    $categories = str_replace('cat-', '', $_POST['categorie']);
	    $id_publication = $myConnexion->real_escape_string($_POST['id_publication']);
	    
	    
	   var_dump($_FILES['illustration']);
	    
	    // Configuration pour l'upload de fichier
	    $illustration = $_FILES['illustration']['tmp_name'];
	    var_dump($illustration);
	    $extension = strrchr($_FILES['illustration']['name'], '.'); // Extension du fichier

		if($_POST['fichier']==''){
		$fichier = $chaine.$extension; // Nouveau nom du fichier	
		}else{
		$fichier = addslashes($_POST['fichier']); // Nouveau nom du fichier	
		}
	    
	    if((isset($_POST['public'])) && ($_POST['public']=='public')){
		    $valide = '1';
	    }else{
		    $valide = '0';
	    }
	     
		$en_avant = (((isset($_POST['en_avant']))&&($_POST['en_avant']=='1')) ? '1' : '0'); //En avant


  	// On vérifie si c'est une modification de news ou non.
		if ($_POST['id_publication'] == 0)
	    {

			if (ajout_article($titre, $date, $introduction, $contenu, $categories, $en_avant, $valide, $illustration,$fichier,$extension)==0)
			{

				 $alert = message('L\'article a bien été créé.', 1);
				 header('Location: index.php?page=liste_articles');
				 exit;
				 
			}else{
				
				$alert = message('Il y a eu un probléme durant la création de l\'article.', 3);
				/*header('Location: index.php?page=ajout_article');
				exit;*/
			}
		}	
		else
		{

			if (modif_article($id_publication, $titre, $date, $introduction, $contenu, $categories, $en_avant, $valide)==0)
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
	$fichier = $data['media'];
	$en_avant = $data['en_avant'];
    $id_publication = $data['id_article']; // Cette variable va servir pour se souvenir que c'est une modification.
}
else // C'est qu'on rédige une nouvelle echeance.
{
    // Les variables $titre et $contenu sont vides, puisque c'est une nouvelle echeance.
    $titre = '';
    $contenu = '';
    $introduction = '';
	$en_avant = '0';
	$categorie = '';
	$fichier = '';
    $id_publication = 0; // La variable vaut 0, donc on se souviendra que ce n'est pas une modification.
}


		?>



                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Création d'un article <small>ou <a href="index.php?page=liste_articles">retourner à la liste d'articles</a></small></h1>
                    </div>
                    <div class="col-lg-12">
	                          <form role="form" method="post" action="<?php $_SERVER['PHP_SELF']?>">

					        <div class="form-group col-md-12">
					          <label for="titre">Titre</label>
					            <input type="text" class="form-control" name="titre" id="Titre" <?php echo (($titre=='') ? 'placeholder="Titre"' : 'value="'.$titre.'"'); ?>>
					        </div>
					
					        <div class="form-group col-md-12">
					          <label for="date">Date</label>
					            <input type="date" class="form-control" name="date" id="Date" <?php echo (($titre=='') ? 'placeholder="Date"' : 'value="'.$date.'"'); ?>>
					        </div>      
					
					        <div class="form-group textarea col-md-12">
					          <label for="introduction">Introduction</label>
					            <textarea type="text" class="form-control" name="introduction" rows="5" <?php echo (($introduction=='') ? 'placeholder="Introduction de l\'article">' : '>'.$introduction); ?></textarea>
					        </div>
					        
					        <div class="form-group textarea col-md-12">
					          <label for="contenu">Contenu</label>
					            <textarea type="text" class="form-control" name="contenu" rows="10" <?php echo (($contenu=='') ? 'placeholder="Contenu de l\'article">' : '>'.$contenu); ?></textarea>
					        </div>

<!-- Ou qu'il est pas beau le br -->		        
<br />
					        
<div class="textarea col-md-12">
	
	
					<div  class="form-group col-md-12">         
					<div class="chat-panel panel panel-default">
						<div class="panel-heading">
                            <i class="fa fa-folder fa-fw"></i>
                            Image
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="chat">
					            <div class="form-group">
								      <label for="illustration">Illustration (<span class="text-danger">*</span>)</label>
								      <?php if($fichier!=''){
											?>
								      <br />
								      <img src="../<?php echo UPLOAD_DIRECTORY.$fichier;?>" alt="<?php echo $fichier;?>" class="img-responsive"/>
								      <p class="text-center">Pour changer d'image, remplissez le formulaire ci-dessous.</p>
								      <?php	
											}
										?>
								      <input type="file" id="illustration" name="illustration">
								      <p class="help-block">Les illustrations sont facultatives, la taille maximale doit être de XXXXxXXXXpx et le poids de XXXMo.</p>
								</div>

					              <input type="hidden" name="MAX_FILE_SIZE" value="100000">
								  <input type="hidden" name="fichier" value="<?php echo $fichier; ?>" />
					        
                            </div>
                        </div>
                    </div>
				</div>    
	
	
				<div  class="form-group col-md-6">         
					<div class="chat-panel panel panel-default">
						<div class="panel-heading">
                            <i class="fa fa-folder fa-fw"></i>
                            Catégories <small>(entre parenthése pour les catégories hors du menu)</small>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
<?php
// Récupération des catégories pour le formulaire et on boucle tout ça
$categories_menu = liste_categories();	
	
// On fait la boucle qui génére le menu.
foreach($categories_menu as $data_cat)
{
?>
                                <li class="left clearfix">
                                  	<input type="radio" name="categorie" id="<?php echo $data_cat['id_cat']; ?>" value="cat-<?php echo $data_cat['id_cat']; ?>" <?php echo (($data_cat['id_cat']==$categorie) ? 'checked' : ''); ?>> <label for="<?php echo $data_cat['id_cat']; ?>"><?php echo (($data_cat['menu']=='1') ? $data_cat['nom_cat'] : '('.$data_cat['nom_cat'].')'); ?> </label>
					          
                                </li>
<?php
}
?>
                            </ul>
                        </div>
                    </div>
				</div>
                    
				<div  class="form-group col-md-6">         
					<div class="chat-panel panel panel-default">
						<div class="panel-heading">
                            <i class="fa fa-folder fa-fw"></i>
                            Option
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="chat">
					        <label class="radio-inline">
					          <input type="radio" name="public" id="public" value="public"> Public
					        </label>
					        <label class="radio-inline">
					          <input type="radio" name="public" id="brouillon" value="brouillon">Non Public
					        </label>
					        </div>
					        <div class="checkbox">
					          <label>

					            <input type="checkbox" name="en_avant" value="1" <?php echo (($en_avant=='0') ? '' : 'checked'); ?>> Mettre en avant
					          </label>
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
