<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Maison Manolo</title>
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
                  <a class="nav-link" href="connexion.php">Mon compte</a>
               </li>
            </ul>
         </div>
      </div>
      </nav>
      <main>
         <div style="word-wrap: break-word;">
            <div style="float: left; width: 50%; text-align: center; padding-top: 100px;">
               <p>
                  Maison MANOLO est un site de revente de chaussures rares & limitées<br>pour Homme et Femme :<br>Nos chaussures sont certifiées neuves & authentiques. <br>
                  Paiement en 1, 2, 3 ou 4 fois <br>
                  Livraison & retour offerts en France <br>
                  Noté 4,7/5 avec plus de 2000 avis Le site voit son nombre de ventes exploser depuis sa mise en ligne en décembre 2021. <br>
                  XOXO Baby Girl
               </p>
            </div>
            <div style="float: right;padding-right: 200px; height: 400px; padding-top: 40px;">
               <h4 style="text-align:center;">SELECTION DU JOUR</h4>
               <div id="carousel1" class="carousel carousel-dark slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <a href="compte.php"><img class="d-block w-100" src="poisson.jpg" alt="First slide" width="100px"height="250px"></a>
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="BJ.jpg" alt="Second slide" width="100px" height="250px">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="sail.jpg" alt="Third slide" width="100px" height="250px">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="yeezyblack.jpg" alt="Fourth slide" width="100px" height="250px">
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </a>
               </div>
            </div>
         </div>
         <div style="text-align:center; padding-top: 400px;">
            <p>
               <h4>NOS BEST SELLER DU MOIS :<br></h4>
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
               <div class="col">
                  <div class="card mb-3">
                     <img src="BJ.jpg" class="card-img-top" alt="BJ">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card mb-3">
                     <img src="BJ.jpg" class="card-img-top" alt="BJ">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card mb-3">
                     <img src="BJ.jpg" class="card-img-top" alt="BJ">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <footer  class="bg-light text-center text-lg-start">
         <div class="container p-4">
            <div class="row">
               <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                  <h5 class="text-uppercase">Contact</h5>
                  <br>
                  <p>37 quai de Grenelle</p>
                  <p>75015 Paris</p>
                  <p>(+33) 01 23 45 67 89</p>
                  <p><a class="btn btn-primary btn-sm" href="mailto:maison.manolo@gmail.com">Envoyez-nous un mail</a></p>
               </div>
               <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                  <h5 class="text-uppercase">Plan</h5>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3518639498834!2d2.2850437156741417!3d48.85150037928685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6700497ee3ec5%3A0xdd60f514adcdb346!2s37%20Quai%20de%20Grenelle%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1638912673895!5m2!1sfr!2sfr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
         </div>
         <?php include ('footer.php') ?>
      </footer>
</body>
</html>