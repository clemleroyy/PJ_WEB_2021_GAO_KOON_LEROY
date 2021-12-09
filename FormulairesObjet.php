<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Gérer les objets</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <header>
         <h1 style="text-align: center;"><img src="logo_maison_manolo_v4.png" width="200px" height="120px"></h1>
   </header>
   <nav class="navbar navbar-expand-sm sticky-top bg-light navbar-light">
      <div class="container-fluid">
         <a class="navbar-brand col-sm-2" style="margin-left: 25px; width:180px" href="index.php"><img src="logo_maison_manolo_v4.png" width="80px" height="50px"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav col-sm-2" style="width:200px">
               <li class="nav-item">
                  <a class="nav-link active" href="index.php">Accueil</a>
               </li>
            </ul>
            <ul class="navbar-nav col-sm-2" style="width:200px; ">
               <li class="nav-item">
                  <a class="nav-link" href="parcourir.php">Tout parcourir</a>
               </li>
           </ul>
           <ul class="navbar-nav col-sm-2" style="width:200px">
               <li class="nav-item">
                  <a class="nav-link" href="notification.php">Notification</a>
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

<br>
<h1><strong>Ajout d'un objet</strong></h1>
<br>
<form>
   
   <fieldset class="form-group">
    <div class="row" style="padding-left: 10px">
      <legend class="col-form-label col-sm-2 pt-0">Catégorie</legend>
      <div class="col-sm-10">
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
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nom de l'objet</label>
    <div class="col-2">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nom de l'objet" required>
    </div>
  </div>
  <br>

  
  <fieldset class="form-group">
    <div class="row" style="padding-left: 10px">
      <legend class="col-form-label col-sm-2 pt-0">Mode de vente</legend>
      <div class="col-sm-10">
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
    <label for="inputPassword3" class="col-sm-2 col-form-label">Date fin d'enchère</label>
    <div class="col-2">
      <input type="date" class="form-control" id="inputPassword3" placeholder="Lien" required>
    </div>
  </div>
  <br>

  <div class="form-group row" style="padding-left: 10px">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Lien (1ère photo)</label>
    <div class="col-2">
      <input type="url" class="form-control" id="inputPassword3" placeholder="Lien" required>
    </div>
  </div>
  <br>

  <div class="form-group row" style="padding-left: 10px">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Lien (2ème photo)</label>
    <div class="col-2">
      <input type="url" class="form-control" id="inputPassword3" placeholder="Lien" required>
    </div>
  </div>
  <br>

  <div class="form-group row" style="padding-left: 10px">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Lien (3ème photo)</label>
    <div class="col-2">
      <input type="url" class="form-control" id="inputPassword3" placeholder="Lien" required>
    </div>
  </div>
  <br>

  <div class="form-group row" style="padding-left: 10px">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Lien (vidéo)</label>
    <div class="col-2">
      <input type="url" class="form-control" id="inputPassword3" placeholder="Lien" required>
    </div>
  </div>
  <br>

  <div class="form-group row" style="padding-left: 10px">
    <div class="col-sm-10" style="padding-left: 15%">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
  </div>
</form>
<br>
<br>

<h1><strong>Suppression d'un objet</strong></h1>
<br>
<form>
   
  <br>
  
  <div class="form-group row" style="padding-left: 10px">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ID de l'objet</label>
    <div class="col-2">
      <input type="number" class="form-control" id="inputEmail3" placeholder="ID de l'objet" required>
    </div>
  </div>
  <br>
  <div class="form-group row" style="padding-left: 10px">
    <div class="col-sm-10" style="padding-left: 15%">
      <button type="submit" class="btn btn-primary">Supprimer</button>
    </div>
  </div>
  
</form>
<br>
<br>

   </main>
   <footer>
      <?php include ('footer.php') ?>
   </footer>
</body>
