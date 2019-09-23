<?php

require './modele/Modele.php';

// Affiche la page d'accueil
function accueil() {
  require './vue/vueAccueil.php';
}

// Affiche la description d'un employé
function lire($id) {
  $employe = getEmploye($id);
  require './vue/vueEmploye.php';
}

// Affiche la liste de tous les employés
function lister() {
  $employes = getEmployes();
  require './vue/vueEmployes.php';
}

// Affiche la liste des employés par équipe
function EmplByEquipe($idc) {
  $employes = getEmplByEquipe($idc);
  require './vue/vueEmployes.php';
}

// Affiche la page des  équipe
function equipes() {
  require './vue/vueEquipes.php';
}

// Affiche une erreur
function erreur($msgErreur) {
	require './vue/vueErreur.php';
}

function Login(){
  // Accède aux liste des employés
 
  require './vue/vuelogin.php';
}

 function supprimer($id) {
   $employes = getsup($id);
  require './vue/vueEmployes.php';
 }
?>