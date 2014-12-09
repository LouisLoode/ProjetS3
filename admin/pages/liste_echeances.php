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

$title = 'Les échéances';
include('header.php');
?>
<div class="page-header">
  <h1>Échéances</h1>
</div>


<?php

  
//--------------------------------------------------------
// Vérification 2 : est-ce qu'on veut supprimer une news ?
//--------------------------------------------------------
if (isset($_GET['del'])) // Si l'on demande de supprimer une news.
{
    // Alors on supprime la news correspondante.
    // On protège la variable « id_news » pour éviter une faille SQL.
    $_GET['del'] = addslashes($_GET['del']);
    $reponse = $bdd->query('DELETE FROM agenda WHERE id=\''.$_GET['del'].'\'');
    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>Bravo !</strong> L\'échéance a bien été supprimée.</div>';
}

?>
<p>Tu veux voir quelles échéances ?</p>
<div class="btn-group btn-group-sm pull-left">
<a href="liste_echeances.php" class="btn btn-primary">Toutes</a>
<a href="liste_echeances.php?voir=publiques" class="btn btn-danger">Publiques</a>
<a href="liste_echeances.php?voir=promo" class="btn btn-success">Ma promo</a>
<a href="liste_echeances.php?voir=td" class="btn btn-warning">Mon TD</a>
<a href="liste_echeances.php?voir=tp" class="btn btn-warning">Mon TP</a>
<a href="liste_echeances.php?voir=moi" class="btn btn-default">Les miennes</a>

</div><br /><br />
<a href="creer_echeance.php" class="btn btn-primary btn-sm pull-right">Ajouter une échéance</a><br /><br />
<?php

if ($_GET['voir'] == 'publiques') // Si l'on demande d'afficher les échéances publiques.
{

	$where='visible=""';
	
} elseif ($_GET['voir'] == 'promo') // Si l'on demande d'afficher les échéances de la promo.
{
	
	$where='visible="'.$user['promo'].'"';
		
} elseif ($_GET['voir'] == 'td') // Si l'on demande d'afficher les échéances du TD.
{

	$where='visible="'.$user['promo'].'-'.$user['td'].'"';
		
		
} elseif ($_GET['voir'] == 'tp') // Si l'on demande d'afficher les échéances du TP.
{

		$where='visible="'.$user['promo'].'-'.$user['tp'].'"';
		
} elseif ($_GET['voir'] == 'moi') // Si l'on demande d'afficher les échéances de l'utilisateur.
{

		$where='visible="moi" AND id_membre="'.$user['id'].'"';
		
} else
{
		
		$where='visible="moi" AND id_membre="'.$user['id'].'" OR visible="" OR visible="'.$user['promo'].'" OR visible="'.$user['promo'].'-'.$user['td'].'" OR visible="'.$user['promo'].'-'.$user['tp'].'"';
		
}




// On va chercher les échéances et on décide ensuite si on affiche le tableau ou non.
$reponse = $bdd->query('SELECT * FROM agenda WHERE '.$where.' ORDER BY echeance ASC');
$echeances = $reponse->rowCount(); // On compte le nombre d'échéances pour ne pas afficher le tableau si il y a rien.

// Si les échéances sont différentes de 0, on affiche le tableau, sinon c'est deaaaaaaad !
if ($echeances != 0)

{

?>
<table class="table">
<tr>
<th>Date limite</th>
<th>Titre</th>
<th>Visibilité</th>
<th>Gestion</th>
</tr>
<?php

while ($donnees = $reponse->fetch()) // On fait une boucle pour lister les news.
{
	$id = $donnees['id'];
	$couleur_echeance = couleur_echeances($donnees['visible']);
	$echeance = date_fr("D d M Y", stripslashes($donnees['echeance']));
	$titre = stripslashes($donnees['titre']);
	$visible = $groupes[$donnees['visible']];
?>
<tr class="<?php echo $couleur_echeance; ?>">
<td><?php echo $echeance; ?></td>
<td style="width: 30%"><a href="voir_echeance.php?id=<?php echo $id; ?>"><?php echo $titre; ?></a></td>
<td><span class="label label-<?php echo $couleur_echeance; ?>"><?php echo $visible; ?></span></td>
<td>

<div class="btn-group">
  <a href="creer_echeance.php?modif=<?php echo $id; ?>" class="btn btn-primary btn-sm">Modifier</a>
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="voir_echeance.php?id=<?php echo $id; ?>">Consulter</a></li>
    <li><a data-toggle="modal" href="#myModal-<?php echo $id; ?>" >Supprimer</a></li>
  </ul>
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Supprimer ?</h4>
        </div>
        <div class="modal-body">
         Êtes vous sur de vouloir supprimer: "<?php echo $titre; ?>" ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
          <a href="liste_echeances.php?del=<?php echo $id ?>" class="btn btn-danger btn-sm">Supprimer</a>
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
}
else
{
?>
<div class="alert alert-info">
  <strong>Info !</strong> Il n'y a pas d'échéance ! Félicitation ! :p
</div>
<?php
}
?>
<a href="creer_echeance.php" class="btn btn-primary btn-sm pull-right">Ajouter une échéance</a>
<?php
include('footer.php');
?>