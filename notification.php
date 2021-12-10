<!DOCTYPE html>
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
      <nav class="navbar navbar-expand-sm sticky-top bg-light navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand col-sm-2" style="margin-left: 20px; width:180px" href="index.php"><img src="logo_maison_manolo_v4.png" width="80px" height="50px"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav col-sm-2" style="width:200px">
               <li class="nav-item">
                  <a class="nav-link" href="index.php">Accueil</a>
               </li>
            </ul>
            <ul class="navbar-nav col-sm-2" style="width:200px">
               <li class="nav-item">
                  <a class="nav-link" href="parcourir.php">Tout parcourir</a>
               </li>
           </ul>
           <ul class="navbar-nav col-sm-2" style="width:200px">
               <li class="nav-item">
                  <a class="nav-link active" href="notification.php">Notification</a>
               </li>
            </ul>
            <ul class="navbar-nav col-sm-2" style="width:200px">
               <li class="nav-item">
                  <a class="nav-link" href="panier.php">Panier</a>
               </li>
            </ul>
            <ul class="navbar-nav col-sm-2" style="width:200px">
               <li class="nav-item">
                  <a class="nav-link" href="compte.php">Mon compte</a>
               </li>
            </ul>
         </div>
      </div>
      </nav>

<main>
      <div class="row">
        <div class="col-sm-6 pt-2 mb-4" style="padding-left: 270px;"><br>
          <h1 style="padding-left:7%"><strong>Recherche</strong></h1>
          <br>
          <form>             
     
            <div class="form-group row" style="padding-left: 10px">
              <label for="NomPaire" class="col-3 col-form-label">Nom de la paire</label>
              <div class="col-4">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Nom de la paire" required>
              </div>
            </div>
            <br>

            <div class="form-group row" style="padding-left: 10px">
              <label for="PrixMax" class="col-3 col-form-label">Prix maximun</label>
              <div class="col-4">
                <input type="number" class="form-control" id="inputEmail3" placeholder="Prix maximun" required>
              </div>
            </div>
            <br>


<fieldset class="form-group">
              <div class="row" style="padding-left: 10px">
                <legend class="col-form-label col-sm-2 pt-0">Mode d'achat</legend>
                <div class="col-sm-10" style="padding-left: 75px;">

           <select class="custom-select">
  <option selected>Mode d'achat</option>
  <option value="1">Immédiat</option>
  <option value="2">Par meilleure offre</option>
  <option value="3">Par négociation</option>
</select>
          

                 
                </div>
              </div>
            </fieldset><br>

   
           
          </form>
          <div class="form-group row" style="padding-left: 10px"></div>

          <div class="form-group row" style="padding-left: 7px">
            <div class="col-sm-10" style="padding-left: 20%">
              <button type="submit" class="btn btn-primary">Rechercher</button>
            </div>
          </div>
        </form>
      </div>
      <br>
      <br>
      <div class="col-sm-6 pt-2 " style="padding-left:100px"><br>
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
      </div>
      <br>
      <br>
    </div>
  </main>

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