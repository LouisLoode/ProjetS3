<?php
include('inc/config.php');
include('inc/fonctions.php');

if (isset ($_COOKIE['id']) && empty($id))
{
$_SESSION['id'] = $_COOKIE['id']; 
 
/* On créé la variable de session à partir du cookie pour ne pas avoir à vérifier 2 fois sur les pages qu'un membre est connecté. */
 
}
if (!isset ($_SESSION['id']) && empty($id))
{
	header('Location: connexion.php'); 
}



$title = 'Les membres';

include('header.php');

if(authorisation(ADMIN, $user['role']))
{
?>
<div class="page-header">
  <h1>Gestion des membres</h1>
</div>


<?php

//--------------------------------------------------------
// Vérification : est-ce qu'on veut supprimer un membre ?
//--------------------------------------------------------
if (isset($_GET['del'])) // Si l'on demande de supprimer une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $_GET['del'] = addslashes($_GET['del']);
    $reponse = $bdd->query('DELETE FROM membres WHERE id=\'' . $_GET['del'] . '\'');
    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Bravo !</strong> Le membre a bien été supprimée.</div>';
}

//--------------------------------------------------------
// Vérification : est-ce qu'on veut devalider un membre ?
//--------------------------------------------------------
if (isset($_GET['devalid'])) // Si l'on demande de supprimer une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $_GET['devalid'] = addslashes($_GET['devalid']);
    $reponse = $bdd->query('UPDATE membres SET role="0" WHERE id=\'' . $_GET['devalid'] . '\'');
    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Bravo !</strong> Le membre a bien été dévalidé.</div>';
}

//--------------------------------------------------------
// Vérification : est-ce qu'on veut valider un membre ?
//--------------------------------------------------------
if (isset($_GET['valid'])) // Si l'on demande de supprimer une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $_GET['valid'] = addslashes($_GET['valid']);
    $reponse = $bdd->query('UPDATE membres SET role="1" WHERE id=\'' . $_GET['valid'] . '\'');
    
    // On chope les infos de l'utilisateur.
	$reponse = $bdd->query('SELECT * FROM membres WHERE id="'.$_GET['valid'].'"');
	$membre = $reponse->fetch();
    
    //Message
    $message = 'Bonjour '.$membre['prenom'].', votre compte sur MMIbook.fr est dorénavant actif ! Vous pouvez maintenant vous connecter';
    //Titre
	$titre = 'Activation de votre compte sur MMIbook.fr';
 
	mail($_POST['email'], $titre, $message);
    
    
    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Bravo !</strong> Le membre a bien été validé.</div>';
}

//--------------------------------------------------------
// Vérification : est-ce qu'on veut mettre un membre admin ?
//--------------------------------------------------------
if (isset($_GET['become_admin'])) // Si l'on demande de supprimer une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $_GET['become_admin'] = addslashes($_GET['become_admin']);
    $reponse = $bdd->query('UPDATE membres SET role="2" WHERE id=\'' . $_GET['become_admin'] . '\'');
    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Bravo !</strong> Le membre a bien été promu Administrateur.</div>';
}


?>
<table class="table">
<tr>
<th>Role</th>
<th>Nom</th>
<th>Statut</th>
<th>Supprimer</th>
</tr>
<?php
$reponse = $bdd->query('SELECT * FROM membres ORDER BY signup_date DESC');
while ($donnees = $reponse->fetch()) // On fait une boucle pour lister les news.
{

?>
<tr class="<?php //echo couleur_echeances($donnees['visible']);?>">
<?php if ($donnees['role'] == '0'){ ?>
<td><a href="liste_membres.php?valid=<?php echo $donnees['id'];?>" ><span class="label label-danger">Invalidé</span></a></td>
<?php }else{?>
<td><a href="liste_membres.php?devalid=<?php echo $donnees['id'];?>" ><span class="label label-success">Validé</span></a></td>
<?php } ?>
<td style="width: 50%"><?php echo $donnees['prenom'].' '.$donnees['nom'];?></td>
<?php if ($donnees['role'] == '2'){ ?>
<td><a href="liste_membres.php?valid=<?php echo $donnees['id'];?>" ><span class="label label-warning">Admin</span></a></td>
<?php }else{?>
<td><a href="liste_membres.php?become_admin=<?php echo $donnees['id'];?>" ><span class="label label-info">User</span></a></td>
<?php } ?>
<td>
  <!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal-<?php echo $donnees['id'];?>" class="btn btn-danger btn-sm">Supprimer</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal-<?php echo $donnees['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Supprimer ?</h4>
        </div>
        <div class="modal-body">
         Êtes vous sur de vouloir supprimer: "<?php echo $donnees['prenom'].' '.$donnees['nom'];?>" ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
          <?php echo '<a href="liste_membres.php?del='.$donnees['id'].'" class="btn btn-danger btn-sm">'; ?>Supprimer</a>
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
<?php
}else {

echo '<div class="alert alert-danger"><strong>Erreur !</strong> Vous n\'avez pas accés à cette zone.</div>';

}
include('footer.php');
?>