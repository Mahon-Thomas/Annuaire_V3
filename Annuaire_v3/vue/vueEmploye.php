<?php 
    mb_internal_encoding('UTF-8');
    $titre = "Fiche employé";
    ob_start();

?>

    <article>
        <h2>Fiche employé 
            <?php $genre = ($employe['emp_genre'] == "M") ? $genre ="Mr" : $genre ="Mme"; ?>
            <strong> <?php echo $genre. " " . $employe['emp_nom']; ?></strong></h2>
            <table>
               <tbody>
                  </tr>
                  <tr>
                     <td>Nom</td>
                     <td><input type="text" name="nom" size="25" value ='<?php echo $employe['emp_nom']; ?>'></td>
                  </tr>
                  <tr>
                     <td>Pr&eacute;nom</td>
                     <td><input type="text" name="prenom" size="25" value ='<?php echo $employe['emp_pnom']; ?>'></td>
                  </tr>
                  <tr>
                     <td>Date d'embauche</td>
                     <td><input type="date" name="dateamb"   value ='<?php echo $employe['emp_dateemb']; ?>'></td></td>
                  </tr>
                  <tr>
                     <td>Téléphone</td>
                     <td><input type="text" name="telephone" size="25"  value ='<?php echo $employe['emp_tel']; ?>'></td>
                  </tr>
                  <tr>
                     <td>Courriel</td> 
                     <td><input type="email" name="email" size="25"  value ='<?php echo $employe['emp_email']; ?>'></td>
                  </tr>
                  <tr>
                     <td>Date de naissance</td>
                     <td><input type="date" name="datenais"  value ='<?php echo $employe['emp_datenais']; ?>'></td>
                  </tr>
                  <!--
                  <tr>
                     <td colspan="2">
                        <input type="submit" name="action" value="Envoyer">
                     </td>
                  </tr>
                  -->
               </tbody>
            </table>

    </article>  
<?php   
    // Fermeture de la connexion
    unset($cnx);
    $contenu = ob_get_clean();
    require 'template.html';



/* 
   emp_id, emp_datenais, emp_nom,  emp_pnom,emp_genre, emp_dateemb, emp_email, emp_tel, emp_PhotoPath, emp_photo
*/

?>