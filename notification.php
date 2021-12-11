<?php

   $database = "projet_piscine";
   $db_handle = mysqli_connect('localhost', 'root', '');
   $db_found = mysqli_select_db($db_handle, $database);
   $sql="";

$NomPaire = isset($_POST["NomPaire"])? $_POST["NomPaire"] : "";
$PrixMax = isset($_POST["PrixMax"])? $_POST["PrixMax"] : "";

$erreur = "";

if (isset($_POST["submit"])){
   
   if ($db_found) {
      
      //commencer le query
      $sql = "SELECT * FROM objet";

         if ($NomPaire != "") {
            //on recherche le'objet par son Nom
            $sql .= " WHERE Prix = '$PrixMax'";
            //on cherche la paire par son prix aussi
                              }
$result = mysqli_query($db_handle, $sql);
//regarder s'il y a des resultats
if (mysqli_num_rows($result) == 0) {
echo "<p>Shoes not found.</p>";
//check le nb de lignes
} else {
//on trouve le 
   //RAVoir avec la bdd
   //genere le tableau
echo "<table border='1'>";
echo "<tr>";
echo "<th>" . "Nom" . "</th>";
echo "<th>" . "Description" . "</th>";
echo "<th>" . "Prix" . "</th>";
echo "<th>" . "Rarete" . "</th>";
echo "<th>" . "Mode_Achat" . "</th>";
echo "<th>" . "Video" . "</th>";
echo "<th>" . "Photo_objet1" . "</th>";
echo "<th>" . "Photo_objet2" . "</th>";
echo "<th>" . "Photo_objet3" . "</th>";
echo "<th>" . "Debut_enchere" . "</th>";
echo "<th>" . "Fin_enchere" . "</th>";

//afficher le resultat
while ($data = mysqli_fetch_assoc($result)) {
   //recup une ligne de mon result
echo "<tr>";
echo "<td>" . $data['Nom'] . "</td>";
echo "<td>" . $data['Description'] . "</td>";
echo "<td>" . $data['Prix'] . "</td>";
echo "<td>" . $data['Rarete'] . "</td>";
echo "<td>" . $data['Mode_achat'] . "</td>";
$image1 = $data['Photo_objet1'];
$image2 = $data['Photo_objet2'];


echo "<td>" . "<img src='$image1' height='120' width='100'>" . "</td>";
echo "<td>" . "<img src='$image2' height='120' width='100'>" . "</td>";
echo "</tr>";
}
echo "</table>";
}
} else {
echo "<p>Database not found.</p>";
}
} //end Rechercher

mysqli_close($db_handle);

?>





<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Notification</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>



    <body>
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

<<<<<<< HEAD
<main>
      <div class="row">
        <div class="col-sm-6 pt-2 mb-4" style="padding-left: 270px;"><br>
          <h1 style="padding-left:7%"><strong>Recherche</strong></h1>
          <br>
          <form method="POST">             
     
            <div class="form-group row" style="padding-left: 10px">
              <label for="NomPaire" class="col-4 col-form-label">Nom de la paire</label>
              <div class="col-6">
                <input name="NomPaire" type="text" class="form-control" id="inputEmail3" placeholder="Nom de la paire" required>

              </div>
            </div>
            <br>

            <div class="form-group row" style="padding-left: 10px">
              <label for="PrixMax" class="col-4 col-form-label">Prix maximun</label>
              <div class="col-6">
                <input name="PrixMax" type="number" class="form-control" id="inputEmail3" placeholder="Prix maximun" required>
              </div>
            </div>
            <br>


<fieldset class="form-group">
              <div class="row" style="padding-left: 10px">
               
                <div class="col-sm-10" style="padding-left: 75px;">


=======
    <main>
          <div class="row">
            <div class="col-sm-6 pt-2 mb-4" style="padding-left: 270px; text-align: center"><br>
              <h1 style="padding-left:7%"><strong>Recherche</strong></h1>
              <br>
              <form>             
         
                <div class="form-group row" style="padding-left: 100px">
                  <label for="NomPaire" class="col-3 col-form-label">Nom de la paire</label>
                  <div class="col-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nom de la paire" required>
                  </div>
                </div>
                <br>

                <div class="form-group row" style="padding-left: 100px">
                  <label for="PrixMax" class="col-3 col-form-label">Prix maximun</label>
                  <div class="col-4">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Prix maximun" required>
                  </div>
                </div>
                <br>


    <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Mode d'achat</legend>
                    <div class="col-sm-10" style="padding-left: 75px;">

               <select class="form-select" required aria-label="select" style="padding">
      <option value="">Mode d'achat</option>
      <option value="1">Immédiat</option>
      <option value="2">Par meilleure offre</option>
      <option value="3">Par négociation</option>
    </select>
              
>>>>>>> 3cbb442007e2d4e08c92ecf74486b5c728f14dac

                     
                    </div>
                  </div>
                </fieldset><br>

<<<<<<< HEAD
   <div class="form-group row" style="padding-left: 10px"></div>

          <div class="form-group row" style="padding-left: 7px">
            <div class="col-sm-10" style="padding-left: 20%">
              <button name="submit" type="submit" class="btn btn-primary">Rechercher</button>
            </div>
=======
       
               
              </form>
              <div class="form-group row" style="padding-left: 10px"></div>

              <div class="form-group row" style="padding-left: 7px">
                <div class="col-sm-10" style="padding-left: 20%">
                  <button type="submit" class="btn btn-primary">Rechercher</button>
                </div>
              </div>
            </form>
>>>>>>> 3cbb442007e2d4e08c92ecf74486b5c728f14dac
          </div>
          <br>
<<<<<<< HEAD
         
          <div class="form-group row" style="padding-left: 7px">
            <div class="col-sm-10" style="padding-left: 20%">
            
            </div>
=======
          <br>
          <div class="col-sm-6 pt-2 " style="text-align: center; padding-right: 100px;"><br>
            <h1 style="padding-left:7%"><strong>Résultat de votre recherche</strong></h1>
            <br>
            <form>
              <br>
             
              <div class="form-group row" style="padding-left: 7px">
                <div class="col-sm-10" style="padding-left: 20%">
                  <button type="submit" class="btn btn-primary">Supprimer</button>
                </div>
              </div>
            </form>
>>>>>>> 3cbb442007e2d4e08c92ecf74486b5c728f14dac
          </div>
          <br>
          <br>
        </div>
      </main>

<<<<<<< HEAD
           
          </form>
          
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <br><br><br><br><br><br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br><br><br><br><br><br>
   <?php include ('footer.php') ?>
</body>
</html>
=======
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
          <footer class="bg-light text-center text-lg-start">
              <?php include ('footer.php') ?>
          </footer>
       
    </body>
    </html>
>>>>>>> 3cbb442007e2d4e08c92ecf74486b5c728f14dac
