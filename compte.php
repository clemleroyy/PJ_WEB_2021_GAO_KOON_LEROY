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
            $successAjoutA = "";
            $successAjoutP = "";

            $affB4 = true;
            $affB5 = true;
            $affB6 = true;
            $affB7 = true;
            $affAddSuppO = false;
            $affAddSuppV = false;
            $affAddAdresse = false;
            $affAddPaiement = false;


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

            $Adresse1 = isset($_POST["Adresse1"])? $_POST["Adresse1"] : "";
            $Adresse2 = isset($_POST["Adresse2"])? $_POST["Adresse2"] : "";
            $Ville1 = isset($_POST["Ville1"])? $_POST["Ville1"] : "";
            $CP1 = isset($_POST["CP1"])? $_POST["CP1"] : "";
            $Pays1 = isset($_POST["Pays1"])? $_POST["Pays1"] : "";
            $Tel1 = isset($_POST["Tel1"])? $_POST["Tel1"] : "";

            $TypeCarte = isset($_POST["TypeCarte"])? $_POST["TypeCarte"] : "";
            $NumCarte = isset($_POST["NumCarte"])? $_POST["NumCarte"] : "";
            $NomCarte = isset($_POST["NomCarte"])? $_POST["NomCarte"] : "";
            $DateExp = isset($_POST["DateExp"])? $_POST["DateExp"] : "";
            $CodeCVC = isset($_POST["CodeCVC"])? $_POST["CodeCVC"] : "";

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
                     $sql = "SELECT * FROM client WHERE Mail = '$mail2' AND Mdp = '$mdp2'";
                     $result = mysqli_query($db_handle, $sql);
                     $user = mysqli_fetch_assoc($result);
                     $tmp = $user['ID_client'];
                     $sql = "INSERT INTO panier (ID_client, Prix_panier) VALUES('$tmp', '0')";
                     $result = mysqli_query($db_handle, $sql);
                     $sql = "SELECT * FROM panier WHERE ID_client = '$tmp'";
                     $result = mysqli_query($db_handle, $sql);
                     $user = mysqli_fetch_assoc($result);
                     $tmp2 = $user['ID_panier'];
                     $sql = "UPDATE client SET ID_panier = '$tmp2' WHERE client . ID_client = '$tmp'";
                     $result = mysqli_query($db_handle, $sql);
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
                     }
                     else{$erreurPseudo2="Pseudo déja existant";
                     }
                  }
                  else{$erreurMailV2="Mail déja existant";
                  }
               }
            }
            if(isset($_POST["b6"])){
               $affB6 = false;
               $affAddAdresse = true;
            }
            if(isset($_POST["b7"])){
               $affB7 = false;
               $affAddPaiement = true;
            }
            if(isset($_POST["AjoutAdresse"])){
               $affB6 = false;
               $affAddAdresse = true;
               if($db_found){
                  $sql = "INSERT INTO adresse (ID_client, Adresse1, Adresse2, Ville, CP, Pays, Tel) VALUES ('$idCl', '$Adresse1', '$Adresse2', '$Ville1', '$CP1', '$Pays1', '$Tel1')";
                  $result = mysqli_query($db_handle, $sql);
                  $successAjoutA = "Vous avez ajouté une adresse";
               }
            }
            if(isset($_POST["AjoutPaiement"])){
               $affB7 = false;
               $affAddPaiement = true;
               if($db_found){
                  $sql = "INSERT INTO paiement (ID_client, Type, NumCarte, NomCarte, DateExp, Code) VALUES ('$idCl', '$TypeCarte', '$NumCarte', '$NomCarte', '$DateExp', '$CodeCVC')";
                  $result = mysqli_query($db_handle, $sql);
                  $successAjoutP = "Vous avez ajouté un mode de paiement";
               }
            }
         ?>


         <!DOCTYPE html>
         <html>
         <head>
         	<meta charset="utf-8">
         	<meta name="viewport" content="width=device-width, initial-scale=1">
         	<title>Mon Compte</title>
         	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         </head>
         <body>
         	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <header>
         <h1 style="text-align: center;"><a href="index.php"><img src="logo_maison_manolo_v4.png" width="200px" height="120px"></a></h1>
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
            <ul class="navbar-nav dropdown col-sm-2">
               <li class="nav-item px-5">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tout parcourir
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="parcourir2.php">Par rareté</a></li>
                  <li><a class="dropdown-item" href="parcourir.php">Par mode d'achat</a></li>
          </ul>
               </li>
           </ul>
           <ul class="navbar-nav  col-sm-2">
               <li class="nav-item px-5">
                  <a class="nav-link" href="notification.php">Notification</a>
               </li>
            </ul>
            <ul class="navbar-nav  col-sm-2">
               <li class="nav-item px-5">
                  <a class="nav-link" href="panier.php">Panier<img src="panier.png" style="width:15px; height:15px"></a>

               </li>
            </ul>
            <ul class="navbar-nav  col-sm-2">
               <li class="nav-item px-5">
                  <a class="nav-link active" href="compte.php">Mon compte</a>
               </li>
            </ul>
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
                                 <span style="color: green"><?= $success ?></span>
                     			</div>
                   			</div>
               			</form>
               		</div>
               	</div>
                  <?php
                  }
                  if($affAd){
                     $sql = "SELECT * FROM administrateur WHERE ID_admin = '$idAd'";
                     $result = mysqli_query($db_handle, $sql);
                     $user=mysqli_fetch_assoc($result);
                     $PrenomA=$user['Prenom'];
                     ?>
                     <section class="section about-section gray-bg pt-2" id="about">
                        <div class="container" style="text-align: center;">
                           <div class="row align-items-center flex-row-reverse">
                              <div class="about-text go-to">
                                 <h3 class="dark-color">Bonjour <?=$PrenomA?></h3>
                              </div>
                           </div>
                        </div>
                     </section>
                     <?php
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
                                       <input class="form-check-input" type="radio" name="Categorie" id="gridRadios3" value="Haut De gamme">
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
                                       <input class="form-check-input" type="radio" name="ModeDeVente" id="gridRadios2" value="Meilleure offre">
                                       <label class="form-check-label" for="gridRadios2">
                                          Par meilleure offre
                                       </label>
                                    </div>
                                    <div class="form-check disabled">
                                       <input class="form-check-input" type="radio" name="ModeDeVente" id="gridRadios3" value="Transaction">
                                       <label class="form-check-label" for="gridRadios3">
                                          Par transaction
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
                     $sql = "SELECT * FROM vendeur WHERE ID_vendeur='$idVe'";
                     $result = mysqli_query($db_handle, $sql);
                     $user=mysqli_fetch_assoc($result);
                     $NomV=$user['Nom'];
                     $PrenomV=$user['Prenom'];
                     $PhotoV=$user['Image_vendeur'];
                     $FondV=$user['Image_fond'];
                     $MailV=$user['Mail'];
                     $PseudoV=$user['Pseudo'];
                     ?>
                           <section class="section about-section gray-bg pt-2" id="about">
                              <div style="background-image: url('<?=$FondV?>');">
                        <div class="container">
                            <div class="row align-items-center flex-row-reverse">
                                <div class="col-lg-6">
                                    <div class="about-text go-to">
                                        <h3 class="dark-color">Bonjour <?=$PrenomV?></h3>
                                        <h6 class="theme-color lead">Voici vos informations</h6>
                                        <div class="row about-list">
                                            <div class="col-md-6">
                                                <div class="media">
                                                    <label><strong>E-mail</strong></label>
                                                    <p><?=$MailV?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="media">
                                                    <label><strong>Pseudo</strong></label>
                                                    <p><?=$PseudoV?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-avatar">
                                        <img src="<?=$PhotoV?>" title="" alt="" style="border-radius: 10%; height: 200px; width: 200px;">
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                     
                     <?php if($affB4){
                     ?>
                     <div style="text-align: center; padding-top: 20px;">
                        <form method="POST">
                           <p><button type="submit" class="btn btn-primary" name="b4">Ajout/Suppression d'un objet</button></p>
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
                  if($affCl){
                     $sql = "SELECT * FROM client WHERE ID_client='$idCl'";
                     $result = mysqli_query($db_handle, $sql);
                     $user=mysqli_fetch_assoc($result);
                     $NomC=$user['Nom'];
                     $PrenomC=$user['Prenom'];
                     $MailC=$user['Mail'];
                  ?>
                  <section class="section about-section gray-bg pt-2" id="about">
                        <div class="container" style="text-align: center;">
                           <div class="row align-items-center flex-row-reverse">
                              <div class="about-text go-to">
                                 <h3 class="dark-color">Bonjour <?=$PrenomC?></h3>
                                 <h6 class="theme-color lead" style="padding-top: 15px;">Voici vos informations</h6>
                                 <div class="row about-list">
                                    <div class="col-md-4">
                                       <div class="media">
                                          <label><strong>Nom</strong></label>
                                          <p><?=$NomC?></p>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="media">
                                          <label><strong>Prénom</strong></label>
                                          <p><?=$PrenomC?></p>
                                       </div>
                                    </div> 
                                    <div class="col-md-4">
                                       <div class="media">
                                          <label><strong>Email</strong></label>
                                          <p><?=$MailC?></p>
                                       </div>
                                    </div> 
                                 </div>
                              </div>
                            </div>
                        </div>
                    </section>
                    <section class="section about-section gray-bg pt-5" id="about">
                        <div class="container" style="text-align: center;">
                           <div class="row align-items-center flex-row-reverse">
                              <div class="about-text go-to">
                                 <h6 class="theme-color lead">Vos adresses</h6>
                                 <?php
                                 $sql = "SELECT * FROM adresse WHERE ID_client='$idCl'";
                                 $result = mysqli_query($db_handle, $sql);
                                 if(($user=mysqli_fetch_assoc($result))==0){
                                 $testadresse = 0;
                                 }
                                 else{
                                    $testadresse = 1;
                                 }
                                 if($testadresse == 1){
                                    $result = mysqli_query($db_handle, $sql);
                                    $user=mysqli_fetch_assoc($result);
                                    $AdresseC=$user['Adresse1'];
                                    $Adresse2C=$user['Adresse2'];
                                    $VilleC=$user['Ville'];
                                    $CPC=$user['CP'];
                                    $PaysC=$user['Pays'];
                                    $TelC=$user['Tel'];

                                 ?>
                                 <div class="row about-list">
                                    <div class="col-md-6">
                                       <div class="media">
                                          <label><strong>Adresse</strong></label>
                                          <p><?=$AdresseC . " " . $Adresse2C ?></p>
                                       </div>
                                       <div class="media">
                                          <label><strong>Pays</strong></label>
                                          <p><?=$PaysC?></p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="media">
                                          <label><strong>Ville</strong></label>
                                          <p><?=$VilleC?></p>
                                       </div>
                                       <div class="media">
                                          <label><strong>Code Postal</strong></label>
                                          <p><?=$CPC?></p>
                                       </div>
                                    </div> 
                                    <div class="col-md-12">
                                       <div class="media">
                                          <label><strong>Téléphone</strong></label>
                                          <p><?=$TelC?></p>
                                       </div>
                                    </div> 
                                 </div>
                                 <?php
                                 }
                                 else{
                                    echo "<p>Vous n'avez pas d'adresse enregistré</p>";
                                 }
                                 ?>
                              </div>
                            </div>
                        </div>
                    </section>
                    <section class="section about-section gray-bg pt-5" id="about">
                        <div class="container" style="text-align: center;">
                           <div class="row align-items-center flex-row-reverse">
                              <div class="about-text go-to">
                                 <h6 class="theme-color lead">Vos informations de paiement</h6>
                                 <?php
                                 $sql = "SELECT * FROM paiement WHERE ID_client='$idCl'";
                                 $result = mysqli_query($db_handle, $sql);
                                 if(($user=mysqli_fetch_assoc($result))==0){
                                 $testpaiement = 0;
                                 }
                                 else{
                                    $testpaiement = 1;
                                 }
                                 if($testpaiement == 1){
                                    $result = mysqli_query($db_handle, $sql);
                                    $user=mysqli_fetch_assoc($result);
                                    $TypeC=$user['Type'];
                                    $NumC=$user['NumCarte'];
                                    $NomCa=$user['NomCarte'];
                                    $DateC=$user['DateExp'];
                                    $CodeC=$user['Code'];
                                 ?>
                                 <div class="row about-list">
                                    <div class="col-md-6">
                                       <div class="media">
                                          <label><strong>Type</strong></label>
                                          <p><?=$TypeC?></p>
                                       </div>
                                       <div class="media">
                                          <label><strong>Numero de carte</strong></label>
                                          <p><?=$NumC?></p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="media">
                                          <label><strong>Nom de la carte</strong></label>
                                          <p><?=$NomCa?></p>
                                       </div>
                                       <div class="media">
                                          <label><strong>Date d'expiration</strong></label>
                                          <p><?=$DateC?></p>
                                       </div>
                                    </div> 
                                    <div class="col-md-12">
                                       <div class="media">
                                          <label><strong>Code</strong></label>
                                          <p><?=$CodeC?></p>
                                       </div>
                                    </div> 
                                 </div>
                                 <?php
                                 }
                                 else{
                                    echo "<p>Vous n'avez pas de moyen de paiement</p>";
                                 }
                                 ?>
                              </div>
                            </div>
                        </div>
                    </section>
                    <?php
                     if($affB6){
                     ?>
                     <div style="text-align: center; padding-top: 20px;">
                        <form method="POST">
                           <p><button type="submit" class="btn btn-primary" name="b6">Ajout d'une adresse</button></p>
                        </form>
                     </div>
                     <?php
                     }
                     if($affB7){
                     ?>
                     <div style="text-align: center; padding-top: 20px;">
                        <form method="POST">
                           <p><button type="submit" class="btn btn-primary" name="b7">Ajout d'un mode de paiement</button></p>
                        </form>
                     </div>
                     <?php
                     }
                     if($affAddAdresse){
                  ?>
                  <div style="text-align: center; padding-top: 10px" >
                        <h3>Ajout d'une adresse</h3>
                        <br>
                        <form method="post">
                           <div class="form-group row" style="padding-left: 10px">
                              <label for="inputEmail3" class="col-3 col-form-label">Adresse 1</label>
                              <div class="col-6">
                                 <input type="text" class="form-control" name="Adresse1" id="inputEmail3" placeholder="Adresse" required>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row" style="padding-left: 10px">
                              <label for="inputEmail3" class="col-3 col-form-label">Adresse 2</label>
                              <div class="col-6">
                                 <input type="text" class="form-control" name="Adresse2" id="inputEmail3" placeholder="Adresse 2 (facultatif)">
                              </div>
                           </div>
                           <br>
                           <div class="form-group row" style="padding-left: 10px">
                              <label for="inputEmail3" class="col-3 col-form-label">Ville</label>
                              <div class="col-6">
                                 <input type="text" class="form-control" name="Ville1" id="inputEmail3" placeholder="Ville" required>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row" style="padding-left: 10px">
                              <label for="inputEmail3" class="col-3 col-form-label">Code Postal</label>
                              <div class="col-6">
                                 <input type="text" class="form-control" name="CP1" id="inputEmail3" placeholder="Code Postal" minlength="5" maxlength="5" required>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row" style="padding-left: 10px">
                              <label for="inputEmail3" class="col-3 col-form-label">Pays</label>
                              <div class="col-6">
                                 <input type="text" class="form-control" name="Pays1" id="inputEmail3" placeholder="Pays" required>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row" style="padding-left: 10px">
                              <label for="inputEmail3" class="col-3 col-form-label">Téléphone</label>
                              <div class="col-6">
                                 <input type="text" class="form-control" name="Tel1" id="inputEmail3" placeholder="06 00 00 00 00" minlength="10" maxlength="10" required>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row">
                            <div class="col-sm-10" style="padding-left: 20%">
                              <button type="submit" name="AjoutAdresse" class="btn btn-primary">Ajouter</button><br>
                              <span style="color: green;"><?= $successAjoutA ?></span>
                            </div>
                          </div>

                        </form>
                     <br>
                     <br>
                  </div>
                  <?php 
                  }
                  if($affAddPaiement){
                  ?>
                  <h3 style="text-align: center; padding-top: 10px">Ajout d'un moyen de paiement</h3>
                  <div style="align-content: center; padding-top: 10px; padding-left: 300px;">
                        <br>
                        <form method="post">
                           <fieldset class="form-group">
                              <div class="row" style="padding-left: 100px">
                              <legend class="col-form-label col-sm-2 pt-0">Catégorie</legend>
                                 <div class="col-sm-4" style="padding-left: 75px;">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="TypeCarte" id="gridRadios1" value="Visa">
                                       <label class="form-check-label" for="gridRadios1">
                                          Visa
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="TypeCarte" id="gridRadios2" value="Mastercard">
                                       <label class="form-check-label" for="gridRadios2">
                                          Mastercard
                                       </label>
                                    </div>
                                    <div class="form-check disabled">
                                       <input class="form-check-input" type="radio" name="TypeCarte" id="gridRadios3" value="AmericanExpress">
                                       <label class="form-check-label" for="gridRadios3">
                                          American Express
                                       </label>
                                   </div>
                                 </div>
                              </div>
                           </fieldset>
                           <br>
                           <div class="form-group row">
                              <label for="inputEmail3" class="col-3 col-form-label">Numéro de la carte</label>
                              <div class="col-4">
                                 <input type="tel" class="form-control" name="NumCarte" id="inputEmail3" placeholder="Numéro de la carte" minlength="16" maxlength="16" required>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row">
                              <label for="inputEmail3" class="col-3 col-form-label">Nom de la carte</label>
                              <div class="col-4">
                                 <input type="text" class="form-control" name="NomCarte" id="inputEmail3" placeholder="Nom de la carte" required>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row">
                              <label for="inputPassword3" class="col-3 col-form-label">Date d'expiration</label>
                              <div class="col-4">
                                 <input type="date" class="form-control" name="DateExp" id="inputPassword3" placeholder="Date d'expiration" required>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row">
                              <label for="inputPassword3" class="col-3 col-form-label">Code CVC</label>
                              <div class="col-4">
                                 <input type="tel" class="form-control" name="CodeCVC" id="inputPassword3" placeholder="Code CVC" minlength="3" maxlength="3" required>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row">
                            <div class="col-sm-10" style="padding-left: 30%">
                              <button type="submit" name="AjoutPaiement" class="btn btn-primary">Ajouter</button><br>
                              <span style="color: green;"><?= $successAjoutP ?></span>
                            </div>
                          </div>
                        </form>
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