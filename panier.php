   <!DOCTYPE html>
   <html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Mon panier</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!--<link rel='stylesheet' type='text/css' href='panier.css'>-->
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
                  <a class="nav-link active" href="panier.php">Panier<img src="panier.png" style="width:15px; height:15px"></a>

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

<div class="container bg-white rounded-top mt-5" id="zero-pad">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-13 col-12 pt-0">
            <div class="d-flex flex-column pt-1">
                <div class="pt-0" style="text-align:center">
                    <h4>Mon panier</h4>
                </div>
            <div class="d-flex flex-column pt-4">
            <div class="d-flex flex-row px-lg-5 mx-lg-5 mobile" id="heading">
                <div class="p-2 w-75 bd-highlight" style="text-align:center" id="produc">PRODUIT</div>
                <div class="p-2" style="width:500px; text-align: right" id="prc">PRIX</div>
                <div class="p-2 bd-highlight" id="quantity" style="width:300px; text-align: center">RARETE</div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center pt-lg-4 pt-2 pb-3 border-bottom mobile">
                <div class="d-flex flex-row align-items-center">
                    <div><img src="indispo.jpg" width="150" height="150" alt="" id="image"></div>
                    <div class="d-flex flex-column pl-md-3 pl-1">
                        <div class="p-2">
                            <h6>Nike Dunk Low Cider</h6>
                        </div>

                        <div class="p-2 w-75">La Nike Dunk Low PRM Cider se compose d'une empeigne mixant cuir lisse et suede et alternant empiecements d'une palette de couleurs automnales.<span class="pl-2"></span></div><br>

                    </div>
                </div>
                <div class="pe-5" style="width:0px; text-align: center"><b>100€</b></div>
                <div class="pl-md-0" style="width:320px; text-align: center"><b>Régulier</b></div>
                <div> <button class="btn btn-sm bg-danger text-black px-lg-2 px-3">Supprimer</button> </div>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container bg-light rounded-bottom py-4" id="zero-pad">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div class="px-md-0 px-1" id="footer-font"> <b class="pl-md-4">TOTAL DE VOTRE COMMANDE :<span class="pl-md-4"> X€X</span></b> </div>
                <div> <button class="btn btn-sm bg-dark text-white px-lg-5 px-3">PAYER</button> </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
</main>
   
  

  <footer  class="bg-light text-center text-lg-start">
      <?php include ('footer.php') ?>
    </footer>
   </body>
   </html>