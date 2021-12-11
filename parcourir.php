    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tout parcourir</title>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
        <style>
        .card-thumbnail {
            max-height: 250px;
            overflow: hidden;
        }
        </style>
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

             <h2><br>Tout parcourir</h2>


        <!-- Bootstrap 5 Cards in Grid -->
        <section class="bg-light py-4 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 text-danger">Achat immédiat</h2>
                    </div>
                  
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3">
                            <div class="card-thumbnail">
                                <img src="AI.jpg" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="#" class="text-secondary">Article rare</a></h3>
                                <p class="card-text">La Nike Dunk Low Black White arbore une tige en cuir blanc, rehaussée par des empiècements en cuir noir pour un contraste tout en sobriété.</p>
                                <a href="#" class="btn btn-danger">Ajouter dans mon panier</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3">
                            <div class="card-thumbnail">
                                <img src="AI2.jpg" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="#" class="text-secondary">Article haut de gamme</a></h3>
                                <p class="card-text">La Nike SB Dunk Low Sean Cliver est une création conçue avec soin et avec des matériaux de qualité supérieure. Elle présente un upper en cuir premium.</p>
                                <a href="#" class="btn btn-danger">Ajouter dans mon panier</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3">
                            <div class="card-thumbnail">
                                <img src="AI3.jpg" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="#" class="text-secondary">Article régulier</a></h3>
                                <p class="card-text">Un des coloris les plus populaires de la célèbre Moore, la Archeo Pink vous permettra d’apposer une touche de glamour sur chacun de vos looks.</p>
                                <a href="#" class="btn btn-danger">Ajouter dans mon panier</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="bg-light py-4 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 text-danger">Transaction client-vendeur</h2>
                    </div>
                  
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3">
                            <div class="card-thumbnail">
                                <img src="CV.jpg" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="#" class="text-secondary">Article rare</a></h3>
                                <p class="card-text">Le blanc et le bleu de l'Université de Caroline du Nord sont mis à l'honneur et habille la Nike Dunk Low UNC, le blanc prenant le rôle de base à laquelle se superpose le bleu.</p>
                                <a href="#" class="btn btn-danger">Je veux négocier</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3">
                            <div class="card-thumbnail">
                                <img src="CV2.jpg" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="#" class="text-secondary">Article haut de gamme</a></h3>
                                <p class="card-text">La Nike Dunk Low Laser Orange se pare d'une base en cuir blanc, simplement rehaussée de superpositions d'un jaune vif, du swoosh central au mudguard en passant par le talon et les oeillets.</p>
                                <a href="#" class="btn btn-danger">Je veux négocier</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3">
                            <div class="card-thumbnail">
                                <img src="CV3.jpg" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="#" class="text-secondary">Article régulier</a></h3>
                                <p class="card-text">Cette Dunk Low Green Glow women mélange un coloris vert pastel brillant et blanc dans un style efficace parfait pour la saison estivale. Faites parties des premiers à posséder cette paire</p>
                                <a href="#" class="btn btn-danger">Je veux négocier</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="bg-light py-4 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 text-danger">Meilleure offre</h2>
                    </div>
                  
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3">
                            <div class="card-thumbnail">
                                <img src="MO.jpg" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="#" class="text-secondary">Article rare</a></h3>
                                <p class="card-text">La Nike SB Dunk Low Grateful Dead Bears Green opte pour une base verte alternant cuir suédé et revêtement en fausse fourrure. On retrouve des accents de bleu vif au niveau des Swoosh latéraux terminés par un contour dentelé noir.</p>
                                <a href="#" class="btn btn-danger">Je veux enchérir</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3">
                            <div class="card-thumbnail">
                                <img src="MO2.jpg" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="#" class="text-secondary">Article haut de gamme</a></h3>
                                <p class="card-text">La Nike SB Dunk Low Grateful Dead ‘Opti Yellow’ sent bon le début des années 2000. La chaussure à base de peluche jaune remet au goût du jour le concept de la « sneaker nounours » impulsée par le pack Teddy Bears. </p>
                                <a href="#" class="btn btn-danger">Je veux enchérir</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3">
                            <div class="card-thumbnail">
                                <img src="MO3.jpg" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="#" class="text-secondary">Article régulier</a></h3>
                                <p class="card-text">Cette fois-ci la division skateboarding de Nike s'associe avec le groupe Grateful Dead. Le coloris est inspiré de l'ourson orange présent sur la pochette d'un de leurs albums. Ce coloris est le plus limité du pack.</p>
                                <a href="#" class="btn btn-danger">Je veux enchérir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap JS -->
        <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>

        <footer class="bg-light text-center text-lg-start">
          <?php include ('footer.php') ?>
       </footer>

    </body>
    </html>