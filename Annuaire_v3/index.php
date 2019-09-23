<?php
// Dispatcher
require('./controleur/Controleur.php');

try {
  if (isset($_GET['action'])) 
  {
    if ($_GET['action'] == 'Accueil') {
      accueil() ; // Acceuil du site
      exit;
    }
    if ($_GET['action'] == 'lister') {
      lister();  // Liste des employés
      exit;
    }

    if ($_GET['action'] == 'lire'){

      if (isset($_GET['id'])) {
        // intval renvoie la valeur alphanumérique du paramètre
        $id = intval($_GET['id']);
        if ($id) {
          lire($id);
          exit;
        }  
        else 
          {
            //throw stop l'exécution du programme et redirige l'exception
            throw new Exception("Pas d'information sur cet employé ");
          }
      }
    }
    if ($_GET['action'] == 'EmplByEquipe') {

    }
    if ($_GET['action'] == 'Login') {

          Login(); // pages de connexion
          exit;
    }

    if ($_GET['action'] == 'supprimer') {
      if (isset($_GET['id'])) {
        // intval renvoie la valeur alphanumérique du paramètre
        $id = intval($_GET['id']);
        if ($id) {
          supprimer($id);
          exit;
        }  
        else 
          {
            //throw stop l'exécution du programme et redirige l'exception
            throw new Exception("Pas d'information sur cet employé ");
          }
      }
      
    }

    if ($_GET['action'] == 'Services') {
      services();  // pages des services
      exit;
    }

    if ($_GET['action'] == 'Contact') {
      contact();  // Liste des employés
      exit;
    }
    if ($_GET['action'] == 'Mentions') {
      mentions() ; // affichage des mentions légales
      exit;
    }
    else
      throw new Exception("Action non valide");
  }

  else {
    accueil();  // action par défaut
  }
}
catch (Exception $e) {
    erreur($e->getMessage());
}
?>

