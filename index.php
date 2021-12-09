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
         <a class="navbar-brand" style="margin-left: 10px;" href="index.php"><img src="logo_maison_manolo_v4.png" width="80px" height="50px"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
               <li class="nav-item px-5">
                  <a class="nav-link active" href="index.php">Accueil</a>
               </li>
            </ul>
            <ul class="navbar-nav">
               <li class="nav-item px-5">
                  <a class="nav-link" href="parcourir.php">Tout parcourir</a>
               </li>
           </ul>
           <ul class="navbar-nav">
               <li class="nav-item px-5">
                  <a class="nav-link" href="notification.php">Notification</a>
               </li>
            </ul>
            <ul class="navbar-nav">
               <li class="nav-item px-5">
                  <a class="nav-link" href="panier.php">Panier</a>
               </li>
            </ul>
            <ul class="navbar-nav">
               <li class="nav-item px-5">
                  <a class="nav-link" href="compte.php">Mon compte</a>
               </li>
            </ul>
         </div>
      </div>
      </nav>
      <main>
         <div style="word-wrap: break-word;">
            <div style="float: left; width: 50%; text-align: center; padding-top: 100px;">
               <p>
                  Maison MANOLO est un site de revente de chaussures rares & imitées<br>pour Homme et Femme :<br>Nos chaussures sont certifiées  neuves & authentiques. <br>
                  Paiement en 1, 2, 3 ou 4 fois <br>
                  Livraison & retour offerts en France <br>
                  Noté 4,7/5 avec plus de 2000 avis Le site voit son nombre de ventes exploser depuis sa mise en ligne en décembre 2021. <br>
                  XOXO Baby Girl
               </p>
            </div>
            <div style="float: right;padding-left: 50px;width: 50%;">
               <h4 style="text-align:center;">SELECTION DU JOUR</h4>
               <div id="carousel1" class="carousel carousel-dark slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img class="d-block w-100" src="shoe/Best_seller1.jpg" alt="First slide">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="shoe/BJ.jpg" alt="Second slide">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="shoe/sail.jpg" alt="Third slide">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="shoe/yeezyblack.jpg" alt="Fourth slide">
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
         <div style="text-align:center">
            <p>
               <h4>NOS BEST SELLER DU MOIS :<br></h4>
               <img src="shoe/Best_seller1.jpg" width="80px" height="80px">
               <img src="shoe/BJ.jpg" width="100px" height="70px">
               <img src="shoe/sail.jpg" width="100px" height="70px">
               <img src="shoe/yeezyblack.jpg" width="100px" height="70px">
            </p>
         </div>
      </main>
      <footer>
         <?php include ('footer.php') ?>
      </footer>
</body>
</html>