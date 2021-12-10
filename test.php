<?php
   session_start();

   $database = "projet_piscine";
   $db_handle = mysqli_connect('localhost', 'root', '');
   $db_found = mysqli_select_db($db_handle, $database);

   $mail = isset($_POST["mailco"])? $_POST["mailco"] : "";
   $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
   $statut = isset($_POST["statut"])? $_POST["statut"] : "";
   $mail = "test@test.fr";

   if ($db_found) {
      $sql = "SELECT * FROM administrateur WHERE Mail='$mail'";
      $result = mysqli_query($db_handle, $sql);
      $user = mysqli_fetch_assoc($result);
      $idAdmin = $user['ID_admin'];
      $mailAdmin = $user['Mail'];
   }
   echo $idAdmin;
?>