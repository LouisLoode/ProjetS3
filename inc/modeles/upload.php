<?php

//Ajout d'un media
function ajout_media($file, $type){
	
	$i = 0;
	
		foreach ($file['pictures']['error'] as $key => $error) {
		    if ($error == UPLOAD_ERR_OK) {
		        $tmp_name = $file['pictures']['tmp_name'][$key];
		        $name = $file['pictures']['name'][$key];
		        move_uploaded_file($tmp_name, 'data/.'$name);
		    }
		}
		
	return $i;
}

?>