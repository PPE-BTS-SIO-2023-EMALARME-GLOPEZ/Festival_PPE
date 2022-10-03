<?php
   try 
   {
      require 'Controleur/controleur.php';
      $modele = new Modele();
      $controleur = new Controleur();
      $connexion = $modele->getBdd(); // Creates a new connexion to the database
      $modele->tryConnexion($connexion); // Tests database connexion
      $controleur->displayVue($connexion); // This public function implements a front controller
   } 
   catch (Exception $e) 
   {
      $modele = new Modele();
      $msgErreur = $e->getMessage();
      $modele->ajouterErreur($msgErreur);
      require 'Vue/vueErreur.php';
   }
?>