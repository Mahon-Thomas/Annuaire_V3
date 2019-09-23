<?php 
	$titre = "Gestion de projet";
	ob_start(); 
	/*
		Démarre la temporisation de sortie. 
		Tant qu'elle est enclenchée, aucune donnée, hormis les en-têtes, 
		n'est envoyée au navigateur, mais temporairement mise en tampon. 
	*/
?>
	<article>
		<p>Vous désirez connaître des informations sur un employé. </p>
		<br>
		<p>L'annaire est destiné à faciliter la localisation d’un employé à partir de différents critères.</p>
		<br>
		<p>Les critères peuvent porter sur l’index alphabétique, la recherche de noms, etc ... </p>
	</article>

<?php 

	$contenu = ob_get_clean();
	require 'template.html';
?>