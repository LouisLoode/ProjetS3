<h1> Accueil du site </h1>

<ul>
	<li><a href="index.php?page=articles">Lien vers tout les articles</a></li>
	<li><a href="index.php?page=categories">Liste des categories</a></li>
	<li><a href="index.php?page=utilisateurs">Liste de tous les utilisateurs</a></li>
	<li><a href="index.php?page=login">Page de connexion</a></li>
	<li><a href="index.php?page=inscription">Page d'inscription</a></li>
</ul>



<?php
	$alert = message('dqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqmdqsfjdsfklmjdsfklmqdjsfmlkjqmjqdsflmqjflmkjqdlfjqdslkfjlmqkdsfjkmlqdsjfkldqsjqm');
	
	
	
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