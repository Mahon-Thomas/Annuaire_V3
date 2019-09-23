<?php
// variable globale aux fonctions
$requete = "SELECT emp_id, emp_datenais, emp_nom, 
                    emp_pnom,emp_genre, emp_dateemb, 
                    emp_email, emp_tel, emp_PhotoPath, emp_photo, pwd 
                    FROM tbl_employe WHERE 1=1";

// Renvoie la liste des employés
function getEmployes() {
    $cnx = getCnx();
    GLOBAL $requete;
    $strSQL = $requete." ORDER BY emp_id desc;";
    $employes = $cnx->query($strSQL);
    return $employes;
}


// Renvoie les informations sur un employé
function getEmploye($idemp) {
    $cnx = getCnx();
    GLOBAL $requete;
    $strSQL = $requete." AND tbl_employe.emp_id = ". $idemp . ";";
    $Resultat = $cnx->query($strSQL);
    if ($Resultat->rowCount() == 1) { // Vérification de l'existant d'un employé
    	 //Méthode fetch() extration ligne par ligne ici une seule ligne
    	$employe = $Resultat->fetch();
    	return $employe;
    }
    else 
	  {
	    //Stop l'exécution du programme sur une exception
	    throw new Exception("employé inconnu");
	    return;
	  }
}

// Renvoie la liste des employé par équipe
function getEmployesByEquipe($idc) {
    //. . .
}

// Essai de connexion à la Base De Données
// Instancie et renvoie l'objet PDO associé ($cnx)
function getCnx() {
	// Paramètres de connexion 
    $PARAM_sgbd         ="mysql";       // SGBDR
    $PARAM_hote         ="localhost";   // le chemin vers le serveur 
    $PARAM_port         ="3306";        // Port de connexion
    $PARAM_nom_bd       ="db_projet";   // le nom de votre base de données
    $PARAM_utilisateur  ="root";      // nom utilisateur 
    $PARAM_mot_passe    ="root";      // mot de passe utilisateur
    $PARAM_dsn          =$PARAM_sgbd.":host=".$PARAM_hote.";dbname=".$PARAM_nom_bd; // Nom de la source de données

    $dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",);

    $cnx = new PDO($PARAM_dsn, $PARAM_utilisateur, $PARAM_mot_passe, $dboptions);
    return $cnx;

}

//$cnx­>commit()
//$cnx­>rollBack();

 function getsup($id) {
    $cnx = getCnx();
     $strSQL = "DELETE emp_id, emp_datenais, emp_nom, emp_pnom,emp_genre, emp_dateemb, emp_email, emp_tel, emp_PhotoPath, emp_photo, pwd FROM tbl_employe.emp_id = ". $id . ";";
    $Resultat = $cnx->query($strSQL);
    if ($Resultat->rowCount() == 1) { // Vérification de l'existant d'un employé
    	 //Méthode fetch() extration ligne par ligne ici une seule ligne
    	$employes = $Resultat->fetch();
    	return $employes;
    }
    else 
	  {
	    //Stop l'exécution du programme sur une exception
	    throw new Exception("employé inconnu");
	  }

 }
 
?>