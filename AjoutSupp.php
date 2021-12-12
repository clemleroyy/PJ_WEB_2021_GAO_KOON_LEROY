<?php

   $database = "projet_piscine";
   $db_handle = mysqli_connect('localhost', 'root', '');
   $db_found = mysqli_select_db($db_handle, $database);
   $sql="";

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

if ($db_found) {
  
  if(isset($_POST["Supp"])){ //Si click sur Supprimer

    $sql = "DELETE FROM objet WHERE ID_objet = '$ID_Objet'";
    $result = mysqli_query($db_handle, $sql);
}

if(isset($_POST["Ajout"])){ //Si click sur Ajouter (faudra differencier session admin et vendeur)

$sql="INSERT INTO objet (ID_vendeur, ID_admin, Nom, Description, Prix, Rarete, Mode_achat, Video, Photo_objet1, Photo_objet2, Photo_objet3, Fin_enchere) 
  VALUES ('1', '1', '$NomObjet', '$Description', '$Prix', '$Categorie', '$ModeDeVente', '$LienVideo', '$LienP1', '$LienP2', '$LienP3', '$DateFin')";
$result = mysqli_query($db_handle, $sql);

//echo $sql;
//$sql="SELECT ID_photo, Description FROM objet WHERE ModeDeVente = 'Indisponible";
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
<h1 style="padding-left:7%"><strong>Ajout d'un objet</strong></h1>
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

      </table>
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

<div class="col-sm-6 pt-2 " style="padding-left:100px">
<h1 style="padding-left:7%"><strong>Suppression d'un objet</strong></h1>
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
   </main>
   <footer class="bg-light text-center text-lg-start">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
         © 2021 Maison Manolo, Tous droits réservés
      </div>
   </footer>
</body>
</html>
