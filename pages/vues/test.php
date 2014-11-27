<?php

// Gestion des messages d'alerte
foreach($alerts as $data)
{
	echo '
<div class="alert '.$data['CSS'].' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
  <strong>'.$data['TITRE'].'</strong> '.$data['MESSAGE'].'
</div>';

}

?>