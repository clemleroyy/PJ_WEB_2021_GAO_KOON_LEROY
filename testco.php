<?php

$database = "projet_piscine";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$NomVendeur = isset($_POST["NomVendeur"])? $_POST["NomVendeur"] : "";
$Prenom = isset($_POST["Prenom"])? $_POST["Prenom"] : "";
$MailVendeur = isset($_POST["MailVendeur"])? $_POST["MailVendeur"] : "";
$MdpVendeur = isset($_POST["MdpVendeur"])? $_POST["MdpVendeur"] : "";
$Pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"] : "";
$Image_Fond = isset($_POST["Image_Fond"])? $_POST["Image_Fond"] : "";
$PhotoVendeur = isset($_POST["PhotoVendeur"])? $_POST["PhotoVendeur"] : "";

if ($db_found) {
  
  if(isset($_POST["Supprimer"])){ //Si click sur Supprimer
$sql = "SELECT * FROM $statut WHERE Mail='$MailVendeur'";
            $result = mysqli_query($db_handle, $sql);
            if(($user = mysqli_fetch_assoc($result))==0){
               $erreurMail = "Il n'y pas de mail associé a ce compte";
            }
            else{
               $sql .= "AND Mdp = '$MdpVendeur'";
               $result = mysqli_query($db_handle, $sql);
               if(($user = mysqli_fetch_assoc($result))==0){
                  $erreurMdp = "Mot de passe incorrect";
               }
               else{
               $sql .= "AND Nom = '$NomVendeur'";
               $result = mysqli_query($db_handle, $sql);
               if(($user = mysqli_fetch_assoc($result))==0){
                  $erreurNom = "Nom incorrect";
               }
}

if(isset($_POST["Ajouter"])){ //Si click sur Ajouter (faudra differencier session admin et vendeur)

$sql="INSERT INTO vendeur (ID_admin, Nom, Prenom, Mail, Mdp, Pseudo, Image_fond, Image_vendeur) 
  VALUES ('1', '$NomVendeur', '$Prenom', '$MailVendeur', '$MdpVendeur', '$PhotoVendeur')";
$result = mysqli_query($db_handle, $sql);

}
}
}
}

mysqli_close($db_handle);

?>


<html>
<head>
   <!--<meta charset="utf-8">-->
   <title>Formulaire</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=JtPqHA_wsxdjbfhgTaHABQ8pPh2_z3FAyoFcgQnTRqt-k1ImmA_iYGUBt0k7VQY8_NNmFonbEsDaViW-msOxBznHzGFBKBZ6ODAVvNENfb0vPxIqC9reoiFvmq3p1cHgBRTIUbE_qvjbySgut1nNwg" charset="UTF-8"></script></head>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Gérer les objets</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="FormulairesObjet.css" />
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
    <label for="inputEmail3" class="col-3 col-form-label">e-mail</label>
    <div class="col-4">
      <input type="email" class="form-control" name="MailVendeur" id="inputEmail3" placeholder="e-mail" required>
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
    </div>
  </div>
  <br>

  <div class="form-group row" style="padding-left: 10px">
    <label for="inputEmail3" class="col-3 col-form-label">Image de fond</label>
    <div class="col-4">
      <input type="file" class="form-control" name="Image_Fond" id="inputEmail3" placeholder="Image de fond" required>
    </div>
  </div>
  <br>

  <div class="form-group row" style="padding-left: 10px">
    <label for="inputEmail3" class="col-3 col-form-label">Photo profil</label>
    <div class="col-4">
      <input type="file" class="form-control" name="PhotoVendeur" id="inputEmail3" placeholder="Photo de profil" required>
    </div>
  </div>
  <br>

  <div class="form-group row" style="padding-left: 10px">
    <div class="col-sm-10" style="padding-left: 20%">
      <button type="submit" name="Ajouter" class="btn btn-primary">Ajouter</button>
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
    <label for="inputEmail3" class="col-3 col-form-label">e-mail</label>
    <div class="col-4">
      <input type="email" class="form-control" name="MailVendeur" id="inputEmail3" placeholder="e-mail" required>
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
    <label for="inputEmail3" class="col-3 col-form-label">Nom</label>
    <div class="col-4">
      <input type="text" class="form-control" name="NomVendeur" id="inputEmail3" placeholder="nom" required>
    </div>
  </div>
  <br>

  <div class="form-group row" style="padding-left: 10px">
    <div class="col-sm-10" style="padding-left: 20%">
      <button type="submit" name="Supprimer" class="btn btn-primary">Supprimer</button>
    </div>
  </div>
</form>
</div>
</div>
<br>
<br>
   </main>
   <footer class="bg-light text-center text-lg-start">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
         © 2021 Maison Manolo, Tous droits réservés
      </div>
   </footer>
</body>
</html>