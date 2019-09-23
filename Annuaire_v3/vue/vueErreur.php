<?php
	$titre = "ailTECH: Erreur";
	ob_start();
?>
   <br><br><br>
   <h3>Une erreur de type : </h3><h2><?= $msgErreur ?></h2> <h3>est survenue</h3>
   <br><br><br>

<?php 
	$contenu = ob_get_clean();
	require 'template.html';
?>