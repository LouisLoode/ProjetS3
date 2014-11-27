
<div class="page-header">
  <h1>Créer une échéance <small>ou <a href="liste_echeances.php">retourner à la liste</a></small></h1>
</div>

<form action="index.php?page=creer_article" method="post"  class="form-horizontal" role="form" >
<p><b>Titre :</b> <input type="text" size="30" name="titre" class="form-control" value="DEFAUT" /></p>

<p><b>À rendre pour le :</b> <input type="text" size="30" name="echeance" class="form-control" value="DEFAUT"  id="datepicker" /></p>
<p>
    <b>Contenu :</b><br />
    <textarea name="contenu" cols="50" rows="10"></textarea><br />
     
    <input type="hidden" name="id_echeance" value="213" />
        
    <p class="text-center"><input type="submit"  class="btn btn-primary" value="Publier l'échéance" /></p>
</p>
</form>
