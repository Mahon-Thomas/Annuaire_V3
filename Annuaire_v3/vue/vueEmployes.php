<?php
	$titre = "Liste des employés";
	ob_start();
?>
<article>
   <table>
		<tr> 
			<th>#</th>
			<th> Nom </th> 
			<th> Email </th> 
			<th> Age </th> 
			<th>  Actions </th> 
		</tr>
		<?php
			foreach ($employes as $ligne) 
			{
				echo "<tr>";
					echo "<td>" . $ligne['emp_id'] . "</td>";
					echo "<td>" . "<a href='index.php?action=lire&id=" . $ligne['emp_id'] . "'>" . $ligne['emp_nom'] . "</a></td>" ;
					echo "<td>" . $ligne['emp_email'] . "</td>";
					echo "<td>" . $ligne['emp_dateemb'] 	. "</td>";
					echo "<td>";
						echo '<a title="Modifier" href = "#"><img src="style/edit.png"/></a> ';
						echo "&nbsp;&nbsp;&nbsp;";
						echo "<a title='Supprimer' href=index.php?action=supprimer&id" . $ligne['emp_id'] . "><img src='style/delete.png'/></a> ";
					echo "</td>" ;
				echo "</tr>";
			}

			// Fermeture de la connexion
				unset($cnx);
		?>

   </table>
</article>
<?php
	$contenu = ob_get_clean();
	require 'template.html';
?>