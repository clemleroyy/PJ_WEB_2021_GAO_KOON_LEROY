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
         <div style="word-wrap: break-word;">
            <div style="float: left; width: 50%; height: 400px">
               <p>
                  Description de la boutique : Crée en 2021, Maison MANOLO est un site en ligne dédiée à la vente de chaussures. Vous trouvez des articles réguliers, hauts de gammes et rares. 
               </p>
            </div>
            <div style="float: right;padding-left: 50px;width: 50%; height: 400px;">
               <h4 style="text-align:center;">SELECTION DU JOUR</h4>
               <div id="carousel" class="carousel carousel-dark slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img class="d-block w-100" src="shoe/Best_seller1.jpg" alt="First slide" width="200px" height="325px">
                        <div class="carousel-caption d-none d-md-block">
                           <h5>Nom de la paire</h5>
                           <p>Potentiel texte pour la paire</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="shoe/Best_seller2.jpg" alt="Second slide" width="200px" height="325px">
                        <div class="carousel-caption d-none d-md-block">
                           <h5>Nom de la paire</h5>
                           <p>Potentiel texte pour la paire</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="shoe/Best_seller3.jpg" alt="Third slide" width="200px" height="325px">
                        <div class="carousel-caption d-none d-md-block">
                           <h5>Nom de la paire</h5>
                           <p>Potentiel texte pour la paire</p>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </a>
               </div>
            </div>
         </div>
         <div style="text-align:center">
            <p>
               IMAGE BEST SELLER :<br>
               <img src="shoe/Best_seller1.jpg" width="80px" height="80px">
               <img src="shoe/BJ.jpg" width="100px" height="70px">
               <img src="shoe/sail.jpg" width="100px" height="70px">
               <img src="shoe/Best_seller4.jpg" width="100px" height="70px">
            </p>
         </div>
      </main>
   <?php include ('footer.php') ?>
</body>
</html>