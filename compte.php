   <?php
      session_start();

      if($_SESSION['connexion']==0){
         $affForm = true;
         $affAd = false;
         $affVe = false;
         $affCl = false;
      }
      elseif($_SESSION['connexion']==1){
         $affForm = false;
         $affAd = true;
         $affVe = false;
         $affCl = false;
         $idAd = $_SESSION['idAd'];
         $idVe = 0;
      }
      elseif($_SESSION['connexion']==2){
         $affForm = false;
         $affAd = false;
         $affVe = true;
         $affCl = false;
         $idAd = 0;
         $idVe = $_SESSION['idVe'];
      }
      elseif($_SESSION['connexion']==3){
         $affForm = false;
         $affAd = false;
         $affVe = false;
         $affCl = true;
         $idCl = $_SESSION['idCl'];
      }

      $database = "projet_piscine";
      $db_handle = mysqli_connect('localhost', 'root', '');
      $db_found = mysqli_select_db($db_handle, $database);

      $erreurMail = "";
      $erreurMail2 = "";
      $erreurMdp = "";
      $success = "";
      $test = "";
      $erreurMailV = "";
      $erreurPseudoV = "";
      $erreurNomV = "";
      $successSuppV = "";
      $successAjoutV = "";
      $erreurMailV2="";
      $erreurPseudo2 = "";
      $successSuppO = "";
      $successAjoutO = "";

      $affB4 = true;
      $affB5 = true;
      $affAddSuppO = false;
      $affAddSuppV = false;

      $nom = isset($_POST["nom"])? $_POST["nom"] : "";
      $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
      $mail = isset($_POST["mailco"])? $_POST["mailco"] : "";
      $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
      $mail2 = isset($_POST["mail2"])? $_POST["mail2"] : "";
      $mdp2 = isset($_POST["mdp2"])? $_POST["mdp2"] : "";
      $statut = isset($_POST["statut"])? $_POST["statut"] : "";

      $Categorie = isset($_POST["Categorie"])? $_POST["Categorie"] : "";
      $NomObjet = isset($_POST["NomObjet"])? $_POST["NomObjet"] : "";
      $Description = isset($_POST["Description"])? $_POST["Description"] : "";
      $Prix = isset($_POST["Prix"])? $_POST["Prix"] : "";
      $ModeDeVente = isset($_POST["ModeDeVente"])? $_POST["ModeDeVente"] : "";
      $DateFin = isset($_POST["DateFin"])? $_POST["DateFin"] : "";
      $LienP1 = isset($_POST["LienP1"])? $_POST["LienP1"] : "";
      $LienP2 = isset($_POST["LienP2"])? $_POST["LienP2"] : "";
      $LienP3 = isset($_POST["LienP3"])? $_POST["LienP3"] : "";
      $LienVideo = isset($_POST["LienVideo"])? $_POST["LienVideo"] : "";
      $ID_Objet = isset($_POST["ID_Objette"])? $_POST["ID_Objette"] : "";
      $erreur = "";

      $NomVendeur = isset($_POST["NomVendeur"])? $_POST["NomVendeur"] : "";
      $Prenom = isset($_POST["Prenom"])? $_POST["Prenom"] : "";
      $MailVendeur = isset($_POST["MailVendeur"])? $_POST["MailVendeur"] : "";
      $MdpVendeur = isset($_POST["MdpVendeur"])? $_POST["MdpVendeur"] : "";
      $Pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"] : "";
      $Image_Fond = isset($_POST["Image_Fond"])? $_POST["Image_Fond"] : "";
      $PhotoVendeur = isset($_POST["PhotoVendeur"])? $_POST["PhotoVendeur"] : "";

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
                  else{
                     $affForm = false;
                     $affAd = true;
                     $affVe = false;
                     $affCl = false;
                     $_SESSION['connexion']=1;
                     $result = mysqli_query($db_handle, $sql);
                     $user = mysqli_fetch_assoc($result);
                     $_SESSION['idAd'] = $user['ID_admin'];
                     $idAd = $_SESSION['idAd'];
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
                  else{
                     $affForm = false;
                     $affAd = false;
                     $affVe = true;
                     $affCl = false;
                     $_SESSION['connexion']=2;
                     $result = mysqli_query($db_handle, $sql);
                     $user = mysqli_fetch_assoc($result);
                     $_SESSION['idVe'] = $user['ID_vendeur'];
                     $idVe = $_SESSION['idVe'];
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
                  else{

                     $affForm = false;
                     $affAd = false;
                     $affVe = false;
                     $affCl = true;
                     $_SESSION['connexion']=3;
                     $result = mysqli_query($db_handle, $sql);
                     $user = mysqli_fetch_assoc($result);
                     $_SESSION['idCl'] = $user['ID_client'];
                     $idCl = $_SESSION['idCl'];
                  }
               }
            }
         }
      }

      if(isset($_POST["b2"])){
         $statut = "client";
         if ($db_found) {
            $sql = "SELECT * FROM client WHERE Mail = '$mail2'";
            $result = mysqli_query($db_handle, $sql);
            if(($user = mysqli_fetch_assoc($result))==0){
               $sql = "INSERT INTO client (Nom, Prenom, Mail, Mdp) VALUES('$nom', '$prenom', '$mail2', '$mdp2')";
               $result = mysqli_query($db_handle, $sql);
               echo " " . $sql;
               $success = "Merci de vous être inscrit " . $prenom;
            }
            else{
               $erreurMail2 = "Ce mail est déjà lié à une adresse email";
            }
         }
      }

      if(isset($_POST["b3"])){
         $_SESSION['connexion']=0;
         $_SESSION['idAd'] = 0;
         $_SESSION['idVe'] = 0;
         $_SESSION['idCl'] = 0;
         $affForm = true;
         $affAd = false;
         $affVe = false;
         $affCl = false;

      }
      if(isset($_POST["b4"])){
         $affB4 = false;
         $affAddSuppO = true;
      }
      if(isset($_POST["b5"])){
         $affB5 = false;
         $affAddSuppV = true;
      }
      if(isset($_POST["Supp"])){ //Si click sur Supprimer
         $affB4 = false;
         $affAddSuppO = true;
         if ($db_found) {
            $sql = "DELETE FROM objet WHERE ID_objet = '$ID_Objet'";
            $result = mysqli_query($db_handle, $sql);
            $successSuppO="Objet supprimé avec succès!";
         }
      }
      if(isset($_POST["Ajout"])){ //Si click sur Ajouter (faudra differencier session admin et vendeur)
         $affB4 = false;
         $affAddSuppO = true;
         if ($db_found) {
            $sql="INSERT INTO objet (ID_vendeur, ID_admin, Nom, Description, Prix, Rarete, Mode_achat, Video, Photo_objet1, Photo_objet2, Photo_objet3, Fin_enchere) VALUES ('$idVe', '$idAd', '$NomObjet', '$Description', '$Prix', '$Categorie', '$ModeDeVente', '$LienVideo', '$LienP1', '$LienP2', '$LienP3', '$DateFin')";
            $result = mysqli_query($db_handle, $sql);
            $successAjoutO="Objet ajouté avec succès!";
         }
      }
      if(isset($_POST["Supprimer"])){ //Si click sur Supprimer
         $affB5 = false;
         $affAddSuppV = true;
         if($db_found){
            $sql = "SELECT * FROM vendeur WHERE Mail='$MailVendeur'";
            $result = mysqli_query($db_handle, $sql);
            if(($user = mysqli_fetch_assoc($result))==0){
               $erreurMailV = "Il n'y pas de mail associé a ce compte";
            }
            else{
               $sql .= " AND Pseudo = '$Pseudo'";
               $result = mysqli_query($db_handle, $sql);
               if(($user = mysqli_fetch_assoc($result))==0){
                  $erreurPseudoV = "Pseudo incorrect";
               }
               else{
                  $sql .= " AND Nom = '$NomVendeur'";
                  $result = mysqli_query($db_handle, $sql);
                  if(($user = mysqli_fetch_assoc($result))==0){
                     $erreurNomV = "Nom incorrect";
                  }
                  else{
                     $result = mysqli_query($db_handle, $sql);
                     $user = mysqli_fetch_assoc($result);
                     $idV = $user['ID_vendeur'];
                     $sql = "DELETE FROM vendeur WHERE ID_vendeur = '$idV'";
                     $result = mysqli_query($db_handle, $sql);
                     $successSuppV = "L'utilisateur a été supprimé de la base de données";
                  }
               }
            }
         }
      }

      if(isset($_POST["Ajouter"])){ //Si click sur Ajouter (faudra differencier session admin et vendeur)
         $affB5 = false;
         $affAddSuppV = true; 
         if($db_found){
            $sql = "SELECT * FROM vendeur WHERE Mail='$MailVendeur'";
            $result = mysqli_query($db_handle, $sql);
         if(($user = mysqli_fetch_assoc($result))==0){//mail non existant
            $sql = "SELECT * FROM vendeur WHERE Pseudo='$Pseudo'";
            $result = mysqli_query($db_handle, $sql);
         if(($user = mysqli_fetch_assoc($result))==0){//pseudo non existant
            $sql="INSERT INTO vendeur (ID_admin, Nom, Prenom, Mail, Mdp, Pseudo, Image_fond, Image_vendeur) VALUES ('$idAd', '$NomVendeur', '$Prenom', '$MailVendeur', '$MdpVendeur','$Pseudo','$Image_Fond', '$PhotoVendeur')";
            $result = mysqli_query($db_handle, $sql);
            $successAjoutV="Vendeur ajouté avec succès!";
         }else{$erreurPseudo2="Pseudo déja existant";}
         }else{$erreurMailV2="Mail déja existant";}
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
                     <a class="nav-link" href="index.php">Accueil</a>
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
                     <a class="nav-link active" href="compte.php">Mon compte</a>
                  </li>
               </ul>
               <?php
                  /*if($_SESSION['connexion']!=0){
                     echo "<ul class=" . "/navbar-nav  col-sm-2" . ">";
                  echo "<li class=" . "nav-item px-5" . ">";
                  echo "<form method="."POST" .">";
                     echo "<button type="."submit" ."class="."btn btn-primary" ."name="."b3".">Déconnexion</button>";
                     echo "</form>";
                  echo "</li>";
               echo "</ul>";
                  }*/
               ?>
            </div>
         </div>
         </nav>
         <main>
         <?php
            if($affForm){
         ?>
         <div class="row">
         	<div class="col-sm-6 pt-5 pb-5" style="text-align: center">
         		<h2>Connectez-vous</h2>
         		<form method="POST">
         			<div class="form-group row" style="padding-left: 10px; margin: 10px; padding-top: 10px;">
                 		<label for="mailco" class="col-3 col-form-label">Email</label>
                 		<div class="col-6">
                   		<input type="email" class="form-control" name="mailco" placeholder="Veuillez saisir votre email" required>
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
         		<div class="col-sm-6 pt-5 pb-5" style="text-align: center">
         			<h2>Inscrivez-vous</h2>
                  <span><?= $test ?></span>
         			<form method="POST">
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
                   			<input type="email" class="form-control" name="mail2" placeholder="Veuillez saisir votre email" required>
                           <span style="color: red"><?= $erreurMail2 ?></span>
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
                 				<button type="submit" class="btn btn-primary" name="b2">Inscription</button><br>
                           <span style="color: red"><?= $success ?></span>
               			</div>
             			</div>
         			</form>
         		</div>
         	</div>
            <?php
            }
            if($affAd){
               if($affB4){
               ?>
               <div style="text-align: center; padding-top: 20px;">
                  <form method="POST">
                     <p><button type="submit" class="btn btn-primary" name="b4">Ajout/Suppression d'un objet</button></p>
                  </form>
               </div>
               <?php
               }
               if($affB5){
               ?>
               <div style="text-align: center; padding-top: 20px;">
                  <form method="POST">
                     <p><button type="submit" class="btn btn-primary" name="b5">Ajout/Suppression d'un vendeur</button></p>
                  </form>
               </div>
            
            <?php
            }
            if($affAddSuppO){
            ?>
            <div class="row">
               <br>
               <div class="col-sm-6 pt-2 mb-4" style="padding-left: 270px;">
                  <h3 style="padding-left:7%"><strong>Ajout d'un objet</strong></h3>
                  <br>
                  <form method="post">
                     <fieldset class="form-group">
                        <div class="row" style="padding-left: 10px">
                        <legend class="col-form-label col-sm-2 pt-0">Catégorie</legend>
                           <div class="col-sm-10" style="padding-left: 75px;">
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="Categorie" id="gridRadios1" value="Regulier">
                                 <label class="form-check-label" for="gridRadios1">
                                    Régulier
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="Categorie" id="gridRadios2" value="Rare">
                                 <label class="form-check-label" for="gridRadios2">
                                    Rare
                                 </label>
                              </div>
                              <div class="form-check disabled">
                                 <input class="form-check-input" type="radio" name="Categorie" id="gridRadios3" value="HautDeGamme">
                                 <label class="form-check-label" for="gridRadios3">
                                    Haut de gamme
                                 </label>
                             </div>
                           </div>
                        </div>
                     </fieldset>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputEmail3" class="col-3 col-form-label">Nom de l'objet</label>
                        <div class="col-4">
                           <input type="text" class="form-control" name="NomObjet" id="inputEmail3" placeholder="Nom de l'objet" required>
                        </div>
                     </div>
                     <br>
                     <div class="inputEmail3" style="padding-left: 10px">
                        <label for="exampleFormControlTextarea1" class="col-3 col-form-label">Description de l'objet</label>
                        <textarea class="col-4" id="exampleFormControlTextarea1" name="Description" placeholder="Description de l'objet" rows="3"></textarea>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputEmail3" class="col-3 col-form-label">Prix</label>
                        <div class="col-4">
                           <input type="number" class="form-control" name="Prix" id="inputEmail3" placeholder="Prix" required>
                        </div>
                     </div>
                     <br>
                     <fieldset class="form-group">
                        <div class="row" style="padding-left: 10px">
                           <legend class="col-form-label col-sm-2 pt-0">Mode de vente</legend>
                           <div class="col-sm-10" style="padding-left: 75px;">
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="ModeDeVente" id="gridRadios1" value="Immediat">
                                 <label class="form-check-label" for="gridRadios1">
                                    Immédiat
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="ModeDeVente" id="gridRadios2" value="MeilleureOffre">
                                 <label class="form-check-label" for="gridRadios2">
                                    Par meilleure offre
                                 </label>
                              </div>
                              <div class="form-check disabled">
                                 <input class="form-check-input" type="radio" name="ModeDeVente" id="gridRadios3" value="Negociation">
                                 <label class="form-check-label" for="gridRadios3">
                                    Par négociation
                                 </label>
                              </div>
                           </div>
                        </div>
                     </fieldset>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputPassword3" class="col-3 col-form-label">Date fin d'enchère</label>
                        <div class="col-4">
                           <input type="date" class="form-control" name="DateFin" id="inputPassword3" placeholder="Lien" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputPassword3" class="col-3 col-form-label">Lien (1ère photo)</label>
                        <div class="col-4">
                           <input type="text" class="form-control" name="LienP1" id="inputPassword3" placeholder="Lien" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputPassword3" class="col-3 col-form-label">Lien (2ème photo)</label>
                        <div class="col-4">
                           <input type="text" class="form-control" name="LienP2" id="inputPassword3" placeholder="Lien" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputPassword3" class="col-3 col-form-label">Lien (3ème photo)</label>
                        <div class="col-4">
                           <input type="text" class="form-control" name="LienP3" id="inputPassword3" placeholder="Lien" required>
                        </div>
                     </div> 
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputPassword3" class="col-3 col-form-label">Lien (vidéo)</label>
                        <div class="col-4">
                           <input type="text" class="form-control" name="LienVideo" id="inputPassword3" placeholder="Lien" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <div class="col-sm-10" style="padding-left: 20%">
                           <button type="submit" name="Ajout" class="btn btn-primary">Ajouter</button>
                           <br>
                           <span style="color: green;"><?=$successAjoutO?></span>
                        </div>
                     </div>
                  </form>
               </div>
               <br>
               <br>
               <div class="col-sm-6 pt-2" style="padding-left:100px">
                  <h3 style="padding-left:7%"><strong>Suppression d'un objet</strong></h3>
                  <br>
                  <form method="post">
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ID de l'objet</label>
                        <div class="col-4">
                           <input type="number" class="form-control" name="ID_Objette" id="inputEmail3" placeholder="ID de l'objet" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <div class="col-sm-10" style="padding-left: 20%">
                           <button type="submit" name="Supp" class="btn btn-primary">Supprimer</button>
                           <br>
                           <span style="color: green;"><?=$successSuppO?></span>
                        </div>
                     </div>
                  </form>
               </div>
               <br>
               <br>
            </div>
            <?php
            }
            if($affAddSuppV){
            ?>
            <div class="row">
               <br>
               <div class="col-sm-6 pt-2 mb-4" style="padding-left: 270px;">
                  <h3 style="padding-left:7%"><strong>Ajout d'un vendeur</strong></h3>
                  <br>
                  <form method="post">  
                     <br>              
                 <div class="form-group row" style="padding-left: 10px">
                   <label for="inputEmail3" class="col-3 col-form-label">Nom</label>
                   <div class="col-4">
                     <input type="text" class="form-control" name="NomVendeur" id="inputEmail3" placeholder="Nom" required>
                   </div>
                 </div>
                 <br>

                 <div class="form-group row" style="padding-left: 10px">
                   <label for="inputEmail3" class="col-3 col-form-label">Prénom</label>
                   <div class="col-4">
                     <input type="text" class="form-control" name="Prenom" id="inputEmail3" placeholder="Prénom" required>
                   </div>
                 </div>
                 <br>

                 <div class="form-group row" style="padding-left: 10px">
                   <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                   <div class="col-4">
                     <input type="email" class="form-control" name="MailVendeur" id="inputEmail3" placeholder="Email" required>
                     <span style="color:red"><?=$erreurMailV2 ?></span>
                   </div>
                 </div>
                 <br>

                 <div class="form-group row" style="padding-left: 10px">
                   <label for="inputEmail3" class="col-3 col-form-label">Mot de passe</label>
                   <div class="col-4">
                     <input type="password" class="form-control" name="MdpVendeur" id="inputEmail3" placeholder="Mot de passe" required>
                   </div>
                 </div>
                 <br>

                 <div class="form-group row" style="padding-left: 10px">
                   <label for="inputEmail3" class="col-3 col-form-label">Pseudo</label>
                   <div class="col-4">
                     <input type="text" class="form-control" name="Pseudo" id="inputEmail3" placeholder="Pseudo" required>
                     <span style="color:red"><?=$erreurPseudo2 ?></span>
                   </div>
                 </div>
                 <br>

                 <div class="form-group row" style="padding-left: 10px">
                   <label for="inputEmail3" class="col-3 col-form-label">Image de fond</label>
                   <div class="col-4">
                     <input type="text" class="form-control" name="Image_Fond" id="inputEmail3" placeholder="Image de fond" required>
                   </div>
                 </div>
                 <br>

                 <div class="form-group row" style="padding-left: 10px">
                   <label for="inputEmail3" class="col-3 col-form-label">Photo profil</label>
                   <div class="col-4">
                     <input type="text" class="form-control" name="PhotoVendeur" id="inputEmail3" placeholder="Photo de profil" required>
                   </div>
                 </div>
                 <br>

                 <div class="form-group row" style="padding-left: 10px">
                   <div class="col-sm-10" style="padding-left: 20%">
                     <button type="submit" name="Ajouter" class="btn btn-primary">Ajouter</button>
                     <br>
                     <span style="color:green"><?=$successAjoutV ?></span>
                   </div>
                 </div>
               </form>
               </div>
               <br>
               <br>

               <br>
               <div class="col-sm-6 pt-2" style="padding-left: 100px;">
               <h3 style="padding-left:7%"><strong>Suppression d'un vendeur</strong></h3>
               <br>
               <form method="post">                
                        
                  
                 <br>
                 
                 <div class="form-group row" style="padding-left: 10px">
                   <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                   <div class="col-4">
                     <input type="email" class="form-control" name="MailVendeur" id="inputEmail3" placeholder="Email" required>
                     <span style="color: red;"><?= $erreurMailV ?></span>
                   </div>
                 </div>
                 <br>

                 <div class="form-group row" style="padding-left: 10px">
                   <label for="inputEmail3" class="col-3 col-form-label">Pseudo</label>
                   <div class="col-4">
                     <input type="text" class="form-control" name="Pseudo" id="inputEmail3" placeholder="Pseudo" required>
                     <span style="color: red;"><?= $erreurPseudoV ?></span>
                   </div>
                 </div>
                 <br>

                 <div class="form-group row" style="padding-left: 10px">
                   <label for="inputEmail3" class="col-3 col-form-label">Nom</label>
                   <div class="col-4">
                     <input type="text" class="form-control" name="NomVendeur" id="inputEmail3" placeholder="Nom" required>
                     <span style="color: red;"><?= $erreurNomV ?></span>
                   </div>
                 </div>
                 <br>

                 <div class="form-group row" style="padding-left: 10px">
                   <div class="col-sm-10" style="padding-left: 20%">
                     <button type="submit" name="Supprimer" class="btn btn-primary">Supprimer</button><br>
                     <span style="color: green;"><?= $successSuppV ?></span>
                   </div>
                 </div>
               </form>
               </div>
               </div>
               <br>
               <br>
            <?php
            }
            ?>
            <div style="text-align: center; padding-top: 20px;">
               <form method="POST">
                  <p><button type="submit" class="btn btn-primary" name="b3">Déconnexion</button></p>
               </form>
            </div>
            <?php
            }
            if($affVe){
               if($affB4){
               ?>
               <div style="text-align: center; padding-top: 20px;">
                  <form method="POST">
                     <p><button type="submit" class="btn btn-primary" name="b4">Ajout/Suppression d'un objet</button></p>
                  </form>
               </div>
               <?php
               }
            ?>
            <?php
            if($affAddSuppO){
            ?>
            <div class="row">
               <br>
               <div class="col-sm-6 pt-2 mb-4" style="padding-left: 270px;">
                  <h3 style="padding-left:7%"><strong>Ajout d'un objet</strong></h3>
                  <br>
                  <form method="post">
                     <fieldset class="form-group">
                        <div class="row" style="padding-left: 10px">
                        <legend class="col-form-label col-sm-2 pt-0">Catégorie</legend>
                           <div class="col-sm-10" style="padding-left: 75px;">
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="Categorie" id="gridRadios1" value="Regulier">
                                 <label class="form-check-label" for="gridRadios1">
                                    Régulier
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="Categorie" id="gridRadios2" value="Rare">
                                 <label class="form-check-label" for="gridRadios2">
                                    Rare
                                 </label>
                              </div>
                              <div class="form-check disabled">
                                 <input class="form-check-input" type="radio" name="Categorie" id="gridRadios3" value="HautDeGamme">
                                 <label class="form-check-label" for="gridRadios3">
                                    Haut de gamme
                                 </label>
                             </div>
                           </div>
                        </div>
                     </fieldset>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputEmail3" class="col-3 col-form-label">Nom de l'objet</label>
                        <div class="col-4">
                           <input type="text" class="form-control" name="NomObjet" id="inputEmail3" placeholder="Nom de l'objet" required>
                        </div>
                     </div>
                     <br>
                     <div class="inputEmail3" style="padding-left: 10px">
                        <label for="exampleFormControlTextarea1" class="col-3 col-form-label">Description de l'objet</label>
                        <textarea class="col-4" id="exampleFormControlTextarea1" name="Description" placeholder="Description de l'objet" rows="3"></textarea>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputEmail3" class="col-3 col-form-label">Prix</label>
                        <div class="col-4">
                           <input type="number" class="form-control" name="Prix" id="inputEmail3" placeholder="Prix" required>
                        </div>
                     </div>
                     <br>
                     <fieldset class="form-group">
                        <div class="row" style="padding-left: 10px">
                           <legend class="col-form-label col-sm-2 pt-0">Mode de vente</legend>
                           <div class="col-sm-10" style="padding-left: 75px;">
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="ModeDeVente" id="gridRadios1" value="Immediat">
                                 <label class="form-check-label" for="gridRadios1">
                                    Immédiat
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="ModeDeVente" id="gridRadios2" value="MeilleureOffre">
                                 <label class="form-check-label" for="gridRadios2">
                                    Par meilleure offre
                                 </label>
                              </div>
                              <div class="form-check disabled">
                                 <input class="form-check-input" type="radio" name="ModeDeVente" id="gridRadios3" value="Negociation">
                                 <label class="form-check-label" for="gridRadios3">
                                    Par négociation
                                 </label>
                              </div>
                           </div>
                        </div>
                     </fieldset>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputPassword3" class="col-3 col-form-label">Date fin d'enchère</label>
                        <div class="col-4">
                           <input type="date" class="form-control" name="DateFin" id="inputPassword3" placeholder="Lien" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputPassword3" class="col-3 col-form-label">Lien (1ère photo)</label>
                        <div class="col-4">
                           <input type="text" class="form-control" name="LienP1" id="inputPassword3" placeholder="Lien" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputPassword3" class="col-3 col-form-label">Lien (2ème photo)</label>
                        <div class="col-4">
                           <input type="text" class="form-control" name="LienP2" id="inputPassword3" placeholder="Lien" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputPassword3" class="col-3 col-form-label">Lien (3ème photo)</label>
                        <div class="col-4">
                           <input type="text" class="form-control" name="LienP3" id="inputPassword3" placeholder="Lien" required>
                        </div>
                     </div> 
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputPassword3" class="col-3 col-form-label">Lien (vidéo)</label>
                        <div class="col-4">
                           <input type="text" class="form-control" name="LienVideo" id="inputPassword3" placeholder="Lien" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <div class="col-sm-10" style="padding-left: 20%">
                           <button type="submit" name="Ajout" class="btn btn-primary">Ajouter</button>
                        </div>
                     </div>
                  </form>
               </div>
               <br>
               <br>
               <div class="col-sm-6 pt-2" style="padding-left:100px">
                  <h3 style="padding-left:7%"><strong>Suppression d'un objet</strong></h3>
                  <br>
                  <form method="post">
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ID de l'objet</label>
                        <div class="col-4">
                           <input type="number" class="form-control" name="ID_Objette" id="inputEmail3" placeholder="ID de l'objet" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row" style="padding-left: 10px">
                        <div class="col-sm-10" style="padding-left: 20%">
                           <button type="submit" name="Supp" class="btn btn-primary">Supprimer</button>
                        </div>
                     </div>
                  </form>
               </div>
               <br>
               <br>
            </div>
            <?php
            }
            ?>
            <div style="text-align: center; padding-top: 20px;">
               <form method="POST">
                  <p><button type="submit" class="btn btn-primary" name="b3">Déconnexion</button></p>
               </form>
            </div>
            <?php
            }
            ?>
   </main>
         <footer class="bg-light text-center text-lg-start">
         	<?php include ('footer.php') ?>	
         </footer>
   </body>
   </html>