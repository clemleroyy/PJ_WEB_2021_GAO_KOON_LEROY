<?php
   session_start();

   $database = "projet_piscine";
   $db_handle = mysqli_connect('localhost', 'root', '');
   $db_found = mysqli_select_db($db_handle, $database);

   $erreurMail = "";
   $erreurMdp = "";
   $success = "";
   $test = "";

   $nom = isset($_POST["nom"])? $_POST["nom"] : "";
   $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
   $mail = isset($_POST["mailco"])? $_POST["mailco"] : "";
   $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
   $mail2 = isset($_POST["mailco"])? $_POST["mail2"] : "";
   $mdp2 = isset($_POST["mdp"])? $_POST["mdp2"] : "";
   $statut = isset($_POST["statut"])? $_POST["statut"] : "";

   if(isset($_POST["b1"])){
      if($statut == 1){
         $statut = "administrateur";
         if ($db_found) {
            $sql = "SELECT * FROM $statut WHERE Mail='$mail'";
            $result = mysqli_query($db_handle, $sql);
            if(($user = mysqli_fetch_assoc($result))==0){
               $erreurMail = "Il n'y pas de mail associé a ce compte";
            }
            else{
               $sql .= "AND Mdp = '$mdp'";
               $result = mysqli_query($db_handle, $sql);
               if(($user = mysqli_fetch_assoc($result))==0){
                  $erreurMdp = "Mot de passe incorrect";
               }
            }
         }
      }
      elseif ($statut == 2) {
         $statut = "vendeur";
         if ($db_found) {
            $sql = "SELECT * FROM $statut WHERE Mail='$mail'";
            $result = mysqli_query($db_handle, $sql);
            if(($user = mysqli_fetch_assoc($result))==0){
               $erreurMail = "Il n'y pas de mail associé a ce compte";
            }
            else{
               $sql .= "AND Mdp = '$mdp'";
               $result = mysqli_query($db_handle, $sql);
               if(($user = mysqli_fetch_assoc($result))==0){
                  $erreurMdp = "Mot de passe incorrect";
               }
            }
         }
      }
      elseif ($statut == 3) {
         $statut = "client";
         if ($db_found) {
            $sql = "SELECT * FROM $statut WHERE Mail='$mail'";
            $result = mysqli_query($db_handle, $sql);
            if(($user = mysqli_fetch_assoc($result))==0){
               $erreurMail = "Il n'y pas de mail associé a ce compte";
            }
            else{
               $sql .= "AND Mdp = '$mdp'";
               $result = mysqli_query($db_handle, $sql);
               if(($user = mysqli_fetch_assoc($result))==0){
                  $erreurMdp = "Mot de passe incorrect";
               }
            }
         }
      }
   }

   if(isset($_POST["b2"])){
      $statut = "client";
      if ($db_found) {
         $sql = "SELECT * FROM $statut WHERE Mail='$mail2'";
         $result = mysqli_query($db_handle, $sql);
         if(($user = mysqli_fetch_assoc($result))==0){
            //$sql = "INSERT INTO client(Nom, Prénom, Mail, test) VALUES($nom, $prenom, $mail2, $mdp2)";
            //$success = "Merci de vous être inscris" . $prenom;
            $test = "oui";
         }
         else{
            $test = "non";
         }
      }
   }
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connexion</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <header>
         <h1 style="text-align: center;"><img src="logo_maison_manolo_v4.png" width="200px" height="120px"></h1>
   </header>
   <nav class="navbar navbar-expand-lg sticky-top bg-light navbar-light">
      <div class="container-fluid">
         <a class="navbar-brand col-sm-2" style="margin-left: 25px;" href="index.php"><img src="logo_maison_manolo_v4.png" width="80px" height="50px"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  col-sm-2">
               <li class="nav-item px-5">
                  <a class="nav-link active" href="index.php">Accueil</a>
               </li>
            </ul>
            <ul class="navbar-nav  col-sm-2">
               <li class="nav-item px-5">
                  <a class="nav-link" href="parcourir.php">Tout parcourir</a>
               </li>
           </ul>
           <ul class="navbar-nav  col-sm-2">
               <li class="nav-item px-5">
                  <a class="nav-link" href="notification.php">Notification</a>
               </li>
            </ul>
            <ul class="navbar-nav  col-sm-2">
               <li class="nav-item px-5">
                  <a class="nav-link" href="panier.php">Panier</a>
               </li>
            </ul>
            <ul class="navbar-nav  col-sm-2">
               <li class="nav-item px-5">
                  <a class="nav-link" href="compte.php">Mon compte</a>
               </li>
            </ul>
         </div>
      </div>
      </nav>
      <main>
      	<div class="row">
      		<div class="col-sm-6 pt-2" style="text-align: center">
      			<h2>Connectez-vous</h2>
      			<form method="POST">
      				<div class="form-group row" style="padding-left: 10px; margin: 10px; padding-top: 10px;">
              			<label for="mailco" class="col-3 col-form-label">Email</label>
              			<div class="col-6">
                			<input type="email" class="form-control" name="mailco" placeholder="Veuillez saisir votre mail" required>
                        <span style="color: red;"><?=$erreurMail?></span>
              			</div>
            		</div>
            		<div class="form-group row" style="padding-left: 10px; margin: 10px">
              			<label for="mdp" class="col-3 col-form-label">Mot de passe</label>
              			<div class="col-6">
                			<input type="password" class="form-control" name="mdp" placeholder="Veuillez saisir votre mot de passe" required>
                        <span style="color: red;"><?=$erreurMdp?></span>
              			</div>
            		</div>
      				<select class="form-select" required aria-label="select" name="statut" style="margin: 10px">
  							<option value="">Choisissez votre statut</option>
  							<option value="1">Administrateur</option>
  							<option value="2">Vendeur</option>
  							<option value="3">Client</option>
  						</select>
  						<div class="form-group row" style="padding-left: 10px; margin: 10px">
            			<div class="col-sm-10" style="padding-left: 20%">
              				<button type="submit" class="btn btn-primary" name="b1">Connexion</button>
            			</div>
          			</div>
      			</form>
      		</div>
      		<div class="col-sm-6 pt-2" style="text-align: center">
      			<h2>Inscrivez-vous</h2>
               <span><?= $mail2 ?></span>
      			<form method="POST" >
                  <div class="form-group row" style="padding-left: 10px; margin: 10px;  padding-top: 10px;">
                     <label for="mailco" class="col-3 col-form-label">Nom</label>
                     <div class="col-6">
                        <input type="text" class="form-control" name="nom" placeholder="Veuillez saisir votre nom" required>
                     </div>
                  </div>
                  <div class="form-group row" style="padding-left: 10px; margin: 10px">
                     <label for="mdp" class="col-3 col-form-label">Prénom</label>
                     <div class="col-6">
                        <input type="text" class="form-control" name="prenom" placeholder="Veuillez saisir votre prénom" required>
                     </div>
                  </div>
      				<div class="form-group row" style="padding-left: 10px; margin: 10px;">
              			<label for="mailco" class="col-3 col-form-label">Email</label>
              			<div class="col-6">
                			<input type="email" class="form-control" name="mail2" placeholder="Veuillez saisir votre mail" required>
                        <span style="color: red"><?= $erreurMail ?></span>
              			</div>
            		</div>
            		<div class="form-group row" style="padding-left: 10px; margin: 10px">
              			<label for="mdp" class="col-3 col-form-label">Mot de passe</label>
              			<div class="col-6">
                			<input type="password" class="form-control" name="mdp2" placeholder="Veuillez saisir votre mot de passe" required>
              			</div>
            		</div>
  						<div class="form-group row" style="padding-left: 10px; margin: 10px">
            			<div class="col-sm-10" style="padding-left: 20%">
              				<button type="submit" class="btn btn-primary" name="b2">Inscription</button>
                        <span style="color: red"><?= $success ?></span>
            			</div>
          			</div>
      			</form>
      		</div>
      	</div>
      </main>
      <footer class="bg-light text-center text-lg-start">
      	<?php include ('footer.php') ?>	
      </footer>
</body>
</html>