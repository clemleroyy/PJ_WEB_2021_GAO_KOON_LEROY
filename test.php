<?php
   session_start();

   $database = "projet_piscine";
   $db_handle = mysqli_connect('localhost', 'root', '');
   $db_found = mysqli_select_db($db_handle, $database);

   $mail = isset($_POST["mailco"])? $_POST["mailco"] : "";
   $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
   $statut = isset($_POST["statut"])? $_POST["statut"] : "";
   $mail = "test@test.fr";
   $id = 1;

   if ($db_found) {
      $supp = mysqli_real_escape_string($db_handle,htmlspecialchars($_POST['supp'])); 

      $supprimer = "DELETE FROM objet WHERE ID_objet = '$id'";
      $supression = mysqli_query($db_handle, $supprimer);
   }
?>