<?php 
    $titre = "Administration ailTECH";
    ob_start(); 
?>

<h2>Connexion utilisateur</h2>
<div id="formulaire">
    <table>
        <form action="#" method="post">
            <tr>
                <td> Nom :</td>
                <td><input type="text" name="login" id="nom" required></td>
            </tr>
            <tr>
                <td>Mot de passe :</td>
                <td><input type="password" name="mdp" id="mdp" required></td>
            </tr>
            <tr >
                <td colspan="2"><input type="submit" value="Connexion"></td>
            </tr>
        </form>
    </table>
</div>
<?php 
    $contenu = ob_get_clean();
    require 'template.html';
?>