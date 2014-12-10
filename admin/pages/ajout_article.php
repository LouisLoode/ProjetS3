<?php
/*	
if ($_POST)
{
		
		$valide = '0'; // Valide de base dans l'admin
		
	    $titre = addslashes($_POST['titre']);	// Titre
	    $explications = addslashes($_POST['contenu']); //Description
	
		$dossier = '../'.UPLOAD_DIRECTORY; // Dossier de stockage
		$taille_maxi = TAILLE_MAXI; // Taille maximale
		$taille = filesize($_FILES['illustration']['tmp_name']); // Taille du fichier
		$extensions = array('.png', '.gif', '.jpg', '.jpeg', '.JPG', '.JPEG'); // Extensions autorisées
		$extension = strrchr($_FILES['illustration']['name'], '.'); // Extension du fichier


		if($_POST['fichier']==''){
			$fichier = $chaine.$extension; // Nouveau nom du fichier	
		}else{
			$fichier = addslashes($_POST['fichier']); // Nouveau nom du fichier	
		}
		
		

  	// On vérifie si c'est une modification de news ou non.
		if ($_POST['id_publication'] == 0)
	    {
	
			if(empty($_POST['titre'])){
			
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> Vous n\'avez pas mis de titre.</div>';
					
			}elseif(empty($_POST['explications'])){
				
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> Vous n\'avez pas mis de contenu.</div>';
					
			}elseif($_FILES['illustration']['tmp_name']==''){
				
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> Vous n\'avez pas mis de fichier.</div>';
					
			}elseif(!in_array($extension, $extensions)){
				
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> Vous devez uploader un fichier de type png, gif, jpg ou jpeg.</div>';
					
			}elseif($taille>$taille_maxi){
			
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> L\'illustration a un poids trop important.</div>';
					
			}
			else
		    {

 				if(move_uploaded_file($_FILES['illustration']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
 				{
				
				echo '<div class="panel-group" id="accordion">
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
	          Contenu des variables
	        </a>
	      </h4>
	    </div>
	    <div id="collapseOne" class="panel-collapse collapse">
	      <div class="panel-body">';
					echo 'Chaine : '.$chaine;
					echo '<br>';
					echo 'Valide : '.$valide;
					echo '<br>';
					echo 'IP encodée: '.$ip;
					echo '<br>';
					echo 'IP décodée: '.decode_ip($ip);
					
					echo '<br>';
					echo 'Fichier : '.$fichier;
					echo '<br>';
					echo 'Couleur : '.$couleur;
					echo '<br>';
					echo 'Titre : '.$titre;
					echo '<br>';
					echo 'Explications : '.$explications;
				echo '     </div>
	    </div>
	  </div>
	</div>';
	        		 // On crée une nouvelle entrée dans la table.
		    		$reponse = $bdd->query('INSERT INTO visions(id, chaine, valide, ip, couleur, fichier, proposition, modification, titre, explication) VALUES("", "'.$chaine.'" ,"'.$valide.'", "'.$ip.'", "'.$couleur.'", "'.$fichier.'", NOW(), "", "'.$titre.'", "'.$explications.'")') or die(print_r($bdd->errorInfo()));
					
						echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Succès !</strong> Votre vision a bien été proposée, elle sera par la suite vérifiée par un Administrateur.</div>';
						
	   		 	}
	   		 else //Sinon (la fonction renvoie FALSE).
	     		{
					
	        		 echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> Le chargement de l\'image a échoué.</div>';
	     		}
	
		
    		}
	
		}	
		else
		{
	        // On protège la variable "id_news" pour éviter une faille SQL.
			$id_publication = addslashes($_POST['id_publication']);
			$modification = date("Y-m-d H:i:s");
			
				if(empty($_POST['titre'])){
	
					echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> Vous n\'avez pas mis de titre.</div>';
			
				}elseif(empty($_POST['explications'])){
		
					echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> Vous n\'avez pas mis de contenu.</div>';
			
				}elseif($_FILES['illustration']['tmp_name']!=''){
			
					if(!in_array($extension, $extensions)){
		
						echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> Vous devez uploader un fichier de type png, gif, jpg ou jpeg.</div>';
			
					}elseif($taille>$taille_maxi){
	
						echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> L\'illustration a un poids trop important.</div>';
			
				 	}else{

						 if(move_uploaded_file($_FILES['illustration']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...			
						 {
					// C'est une modification, on met juste à jour le titre et le contenu.
	        $bdd->query('UPDATE visions SET titre="'.$titre.'", explication="'.$explications.'", modification="'.$modification.'" WHERE id="'.$id_publication.'"');
					 	echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Bravo !</strong> L\'image a bien été mise à jour.</div>';
						}else{
						echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Erreur !</strong> L\'image n\'a pas pu être mise à jour.</div>';	
						}
					}	
   		 	}else{
			
			// C'est une modification, on met juste à jour le titre et le contenu.
	        $bdd->query('UPDATE visions SET titre="'.$titre.'", explication="'.$explications.'", modification="'.$modification.'" WHERE id="'.$id_publication.'"');
        
			echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Bravo !</strong> La publication a bien été modifiée.<br /> <a href="liste_publications.php">Retourner à la liste de toutes les publications</a></div>';
		
    }
	}	
			
}*/

if (isset($_GET['modif'])) // Si on demande de modifier une news.
{
    // On protège la variable « modifier_news » pour éviter une faille SQL.
    $id_modif = addslashes($_GET['modif']);
    // On récupère les informations de la news correspondante.
    $data = display_article($id_modif);
    $titre = stripslashes($data['titre']);
    $date = $data['date'];
    $contenu = stripslashes($data['contenu']);
    
	//$fichier = $data['fichier'];
	$en_avant = $data['en_avant'];
    $id_publication = $data['id_article']; // Cette variable va servir pour se souvenir que c'est une modification.
}
else // C'est qu'on rédige une nouvelle echeance.
{
    // Les variables $titre et $contenu sont vides, puisque c'est une nouvelle echeance.
    $titre = '';
    $contenu = '';
	$fichier = '';
	$en_avant = '0';
    $id_publication = 0; // La variable vaut 0, donc on se souviendra que ce n'est pas une modification.
}


		?>



                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Création d'un article <small>ou <a href="index.php?page=liste_articles">retourner à la liste d'articles</a></small></h1>
                    </div>
                    <div class="col-lg-12">
	                          <form role="form">

					        <div class="form-group col-md-12">
					          <label for="Titre">Titre</label>
					            <input type="text" class="form-control" name="titre" id="Titre" <?php echo (($titre=='') ? 'placeholder="Titre"' : 'value="'.$titre.'"'); ?>>
					        </div>
					
					        <div class="form-group col-md-12">
					          <label for="Date">Date</label>
					            <input type="date" class="form-control" name="date" id="Date" <?php echo (($titre=='') ? 'placeholder="Date"' : 'value="'.$date.'"'); ?>>
					        </div>      
					

					        
					        <div class="form-group textarea col-md-12">
					          <label for="Contenu">Contenu</label>
					            <textarea type="text" class="form-control" name="contenu" rows="20" <?php echo (($contenu=='') ? 'placeholder="Contenu de l\'article"' : '>'.$contenu); ?></textarea>
					        </div>

<!-- Ou qu'il est pas beau le br -->		        
<br />
					        
<div class="textarea col-md-12">
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
                                  	<input type="checkbox" id="cat-<?php echo $data_cat['id_cat']; ?>" value="cat-<?php echo $data_cat['id_cat']; ?>"> <label for="cat-<?php echo $data_cat['id_cat']; ?>"><?php echo (($data_cat['menu']=='1') ? $data_cat['nom_cat'] : '('.$data_cat['nom_cat'].')'); ?> </label>
					          
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
					          <input type="radio" name="brouillon" id="brouillon" value="brouillon">Non Public
					        </label>
					        </div>
					        <div class="checkbox">
					          <label>

					            <input type="checkbox" name="en_avant" <?php echo (($data['en_avant']=='0') ? '' : 'checked'); ?>> Mettre en avant
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
