   <?php
      session_start();
      $idCl = $_SESSION['idCl'];

      $affI1 = true;
      $affI2 = true;
      $affI3 = true;
      $affM1 = true;
      $affM2 = true;
      $affM3 = true;
      $affT1 = true;
      $affT2 = true;
      $affT3 = true;

        $database = "projet_piscine";
        $db_handle = mysqli_connect('localhost', 'root', '');
        $db_found = mysqli_select_db($db_handle, $database);
        if ($db_found) {


            $sqlI1 = "SELECT * FROM objet WHERE Mode_achat = 'Immediat' AND Rarete = 'Haut de gamme'";
            $resultI1 = mysqli_query($db_handle, $sqlI1);
            if(($user = mysqli_fetch_assoc($resultI1)) == 0){
                $affI1 = false;
            }
            else{
                $affI1 = true;
                $sqlI1 = "SELECT * FROM objet WHERE Mode_achat = 'Immediat' AND Rarete = 'Haut de gamme'";
                $resultI1 = mysqli_query($db_handle, $sqlI1);
                while($immediat1 = mysqli_fetch_assoc($resultI1)){
                    $immediatI1[]=$immediat1;
                }
            }


            $sqlI2 = "SELECT * FROM objet WHERE Mode_achat = 'Immediat' AND Rarete = 'Rare'";
            $resultI2 = mysqli_query($db_handle, $sqlI2);
            if(($user = mysqli_fetch_assoc($resultI2)) == 0){
                $affI2 = false;
            }
            else{
                $affI2 = true;
                $sqlI2 = "SELECT * FROM objet WHERE Mode_achat = 'Immediat' AND Rarete = 'Rare'";
                $resultI2 = mysqli_query($db_handle, $sqlI2);
                while($immediat2 = mysqli_fetch_assoc($resultI2)){
                    $immediatI2[]=$immediat2;
                }
            }



            $sqlI3 = "SELECT * FROM objet WHERE Mode_achat = 'Immediat' AND Rarete = 'Regulier'";
            $resultI3 = mysqli_query($db_handle, $sqlI3);
            if(($user = mysqli_fetch_assoc($resultI3)) == 0){
                $affI3 = false;
            }
            else{
                $affI3 = true;
                $sqlI3 = "SELECT * FROM objet WHERE Mode_achat = 'Immediat' AND Rarete = 'Regulier'";
                $resultI3 = mysqli_query($db_handle, $sqlI3);
                while($immediat3 = mysqli_fetch_assoc($resultI3)){
                    $immediatI3[]=$immediat3;
                }
            }


            $sqlM1 = "SELECT * FROM objet WHERE Mode_achat = 'Meilleure offre' AND Rarete = 'Haut de gamme'";
            $resultM1 = mysqli_query($db_handle, $sqlM1);
            if(($user = mysqli_fetch_assoc($resultM1)) == 0){
                $affM1 = false;
            }
            else{
                $affM1 = true;
                $sqlM1 = "SELECT * FROM objet WHERE Mode_achat = 'Meilleure offre' AND Rarete = 'Haut de gamme'";
                $resultM1 = mysqli_query($db_handle, $sqlM1);
                while($meilleure1 = mysqli_fetch_assoc($resultM1)){
                    $meilleureM1[]=$meilleure1;
                }
            }


            $sqlM2 = "SELECT * FROM objet WHERE Mode_achat = 'Meilleure offre' AND Rarete = 'Rare'";
            $resultM2 = mysqli_query($db_handle, $sqlM2);
            if(($user = mysqli_fetch_assoc($resultM2)) == 0){
                $affM2 = false;
            }
            else{
                $affM2 = true;
                $sqlM2 = "SELECT * FROM objet WHERE Mode_achat = 'Meilleure offre' AND Rarete = 'Rare'";
                $resultM2 = mysqli_query($db_handle, $sqlM2);
                while($meilleure2 = mysqli_fetch_assoc($resultM2)){
                    $meilleureM2[]=$meilleure2;
                }
            }


            $sqlM3 = "SELECT * FROM objet WHERE Mode_achat = 'Meilleure offre' AND Rarete = 'Regulier'";
            $resultM3 = mysqli_query($db_handle, $sqlM3);
            if(($user = mysqli_fetch_assoc($resultM3)) == 0){
                $affM3 = false;
            }
            else{
                $affM3 = true;
                $sqlM3 = "SELECT * FROM objet WHERE Mode_achat = 'Meilleure offre' AND Rarete = 'Regulier'";
                $resultM3 = mysqli_query($db_handle, $sqlM3);
                while($meilleure3 = mysqli_fetch_assoc($resultM3)){
                    $meilleureM3[]=$meilleure3;
                }
            }


            $sqlT1 = "SELECT * FROM objet WHERE Mode_achat = 'Transaction' AND Rarete = 'Haut de gamme'";
            $resultT1 = mysqli_query($db_handle, $sqlT1);
            if(($user = mysqli_fetch_assoc($resultT1)) == 0){
                $affT1 = false;
            }
            else{
                $affT1 = true;
                $sqlT1 = "SELECT * FROM objet WHERE Mode_achat = 'Transaction' AND Rarete = 'Haut de gamme'";
                $resultT1 = mysqli_query($db_handle, $sqlT1);
                while($transac1 = mysqli_fetch_assoc($resultT1)){
                    $transacT1[]=$transac1;
                }
            }


            $sqlT2 = "SELECT * FROM objet WHERE Mode_achat = 'Transaction' AND Rarete = 'Rare'";
            $resultT2 = mysqli_query($db_handle, $sqlT2);
            if(($user = mysqli_fetch_assoc($resultT2)) == 0){
                $affT2 = false;
            }
            else{
                $affT2 = true;
                $sqlT2 = "SELECT * FROM objet WHERE Mode_achat = 'Transaction' AND Rarete = 'Rare'";
                $resultT2 = mysqli_query($db_handle, $sqlT2);
                while($transac2 = mysqli_fetch_assoc($resultT2)){
                    $transacT2[]=$transac2;
                }
            }


            $sqlT3 = "SELECT * FROM objet WHERE Mode_achat = 'Transaction' AND Rarete = 'Regulier'";
            $resultT3 = mysqli_query($db_handle, $sqlT3);
            if(($user = mysqli_fetch_assoc($resultT3)) == 0){
                $affT3 = false;
            }
            else{
                $affT3 = true;
                $sqlT3 = "SELECT * FROM objet WHERE Mode_achat = 'Transaction' AND Rarete = 'Regulier'";
                $resultT3 = mysqli_query($db_handle, $sqlT3);
                while($transac3 = mysqli_fetch_assoc($resultT3)){
                    $transacT3[]=$transac3;
                }
            }
        }

        $panier = isset($_POST["panier"])? $_POST["panier"] : "";
        
        if(isset($_POST["panier"])){
            if ($db_found) {
                $sql = "SELECT * FROM panier WHERE ID_client = '$idCl'";
                $result = mysqli_query($db_handle, $sql);
                $user = mysqli_fetch_assoc($result);
                $tmp = $user['ID_panier'];
                $sql = "UPDATE objet SET ID_panier = '$tmp' WHERE objet . ID_objet = '$panier'";
                $result = mysqli_query($db_handle, $sql);
            }
        }


   ?>
   <!DOCTYPE html>
   <html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Maison Manolo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
        <style>
        .card-thumbnail {
            min-height: 250px;
            max-height: 250px;
            overflow: hidden;
        }
        </style>
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
                     <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                     <a class="nav-link" href="panier.php">Panier<img src="panier.png" style="width:15px; height:15px"></a>

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
            <h2 style="padding:50px 0 0 50px">Tout parcourir</h2>


        <!-- Bootstrap 5 Cards in Grid -->
        <section class="bg-light py-4 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 text-danger">Achat immédiat</h2>
                    </div>
                    <?php if($affI1){
                        foreach ($immediatI1 as $immediat1) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3" style="height: 550px">
                            <div class="card-thumbnail">
                                <img src="<?=$immediat1['Photo_objet1']?>" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Article <?=$immediat1['Rarete']?></h3>
                                <p class="card-text"><?=$immediat1['Description']?><br>ID : <?=$immediat1['ID_objet']?></p>

                                <h3 class="theme-color lead"><strong>Prix : <?=$immediat1['Prix']?>&euro;</strong></h3>
                                <form method="POST">
                                    <button type="submit" class="btn btn-danger" name="panier" value="<?=$immediat1['ID_objet']?>">Ajouter dans mon panier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } } ?>
                    <?php if($affI2){ 
                        foreach ($immediatI2 as $immediat2) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3" style="height: 550px">
                            <div class="card-thumbnail">
                                <img src="<?=$immediat2['Photo_objet1']?>" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Article <?=$immediat2['Rarete']?></h3>
                                <p class="card-text"><?=$immediat2['Description']?><br>ID : <?=$immediat2['ID_objet']?></p>
                                <h3 class="theme-color lead"><strong>Prix : <?=$immediat2['Prix']?>&euro;</strong></h3>
                                <form method="POST">
                                    <button type="submit" class="btn btn-danger" name="panier" value="<?=$immediat2['ID_objet']?>">Ajouter dans mon panier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                    <?php if($affI3){
                        foreach ($immediatI3 as $immediat3) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3" style="height: 550px">
                            <div class="card-thumbnail">
                                <img src="<?=$immediat3['Photo_objet1']?>" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Article <?=$immediat3['Rarete']?></h3>
                                <p class="card-text"><?=$immediat3['Description']?><br>ID : <?=$immediat3['ID_objet']?></p>
                                <h3 class="theme-color lead"><strong>Prix : <?=$immediat3['Prix']?>&euro;</strong></h3>
                                <form method="POST">
                                    <button type="submit" class="btn btn-danger" name="panier" value="<?=$immediat3['ID_objet']?>">Ajouter dans mon panier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } } ?>
                </div>
            </div>
        </section>

         <section class="bg-light py-4 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 text-danger">Transaction client-vendeur</h2>
                    </div>
                    <?php if($affT1){ 
                    foreach ($transacT1 as $transac1) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3" style="height: 550px">
                            <div class="card-thumbnail">
                                <img src="<?=$transac1['Photo_objet1']?>" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Article <?=$transac1['Rarete']?></h3>
                                <p class="card-text"><?=$transac1['Description']?><br>ID : <?=$transac1['ID_objet']?></p>
                                <h3 class="theme-color lead"><strong>Prix : <?=$transac1['Prix']?>&euro;</strong></h3>
                                <a href="#" class="btn btn-danger">Je veux négocier</a>
                            </div>
                        </div>
                    </div>
                    <?php } } ?>
                    <?php if($affT2){
                    foreach ($transacT2 as $transac2) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3" style="height: 550px">
                            <div class="card-thumbnail">
                                <img src="<?=$transac2['Photo_objet1']?>" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Article <?=$transac2['Rarete']?></h3>
                                <p class="card-text"><?=$transac2['Description']?><br>ID : <?=$transac2['ID_objet']?></p>
                                <h3 class="theme-color lead"><strong>Prix : <?=$transac2['Prix']?>&euro;</strong></h3>
                                <a href="#" class="btn btn-danger">Je veux négocier</a>
                            </div>
                        </div>
                    </div>
                    <?php } } ?>
                    <?php if($affT3){
                    foreach ($transacT3 as $transac3) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3" style="height: 550px">
                            <div class="card-thumbnail">
                                <img src="<?=$transac3['Photo_objet1']?>" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Article <?=$transac3['Rarete']?></h3>
                                <p class="card-text"><?=$transac3['Description']?><br>ID : <?=$transac3['ID_objet']?></p>
                                <h3 class="theme-color lead"><strong>Prix : <?=$transac3['Prix']?>&euro;</strong></h3>
                                <a href="#" class="btn btn-danger">Je veux négocier</a>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                </div>
            </div>
        </section>

         <section class="bg-light py-4 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 text-danger">Meilleure offre</h2>
                    </div>
                    
                    <?php if($affM1){
                    foreach ($meilleureM1 as $meilleure1) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3" style="height: 550px">
                            <div class="card-thumbnail">
                                <img src="<?=$meilleure1['Photo_objet1']?>" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Article <?=$meilleure1['Rarete']?></h3>
                                <p class="card-text"><?=$meilleure1['Description']?><br>ID : <?=$meilleure1['ID_objet']?></p>
                                <h3 class="theme-color lead"><strong>Prix : <?=$meilleure1['Prix']?>&euro;</strong></h3>
                                <a href="#" class="btn btn-danger">Je veux enchérir</a>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                    <?php if($affM2){
                    foreach ($meilleureM2 as $meilleure2) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3" style="height: 550px">
                            <div class="card-thumbnail">
                                <img src="<?=$meilleure2['Photo_objet1']?>" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Article <?=$meilleure2['Rarete']?></h3>
                                <p class="card-text"><?=$meilleure2['Description']?><br>ID : <?=$meilleure2['ID_objet']?></p>
                                <h3 class="theme-color lead"><strong>Prix : <?=$meilleure2['Prix']?>&euro;</strong></h3>
                                <a href="#" class="btn btn-danger">Je veux enchérir</a>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                    <?php if($affM3){
                    foreach ($meilleureM3 as $meilleure3) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card my-3" style="height: 550px">
                            <div class="card-thumbnail">
                                <img src="<?=$meilleure3['Photo_objet1']?>" class="img-fluid" alt="thumbnail">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Article <?=$meilleure3['Rarete']?></h3>
                                <p class="card-text"><?=$meilleure3['Description']?><br>ID : <?=$meilleure3['ID_objet']?></p>
                                <h3 class="theme-color lead"><strong>Prix : <?=$meilleure3['Prix']?>&euro;</strong></h3>
                                <a href="#" class="btn btn-danger">Je veux enchérir</a>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                </div>
            </div>
        </section>
         </main>
         <footer  class="bg-light text-center text-lg-start">
         <?php include ('footer.php') ?>
         </footer>