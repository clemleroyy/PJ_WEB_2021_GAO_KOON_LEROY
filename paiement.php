<?php 

session_start();
$database = "projet_piscine";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$TypeCarte = isset($_POST["TypeCarte"])? $_POST["TypeCarte"] : "";
$NumCarte = isset($_POST["NumCarte"])? $_POST["NumCarte"] : "";
$NomCarte = isset($_POST["NomCarte"])? $_POST["NomCarte"] : "";
$DateExp = isset($_POST["DateExp"])? $_POST["DateExp"] : "";
$CodeCVC = isset($_POST["CodeCVC"])? $_POST["CodeCVC"] : "";
$successVerif = "";
$erreurClient = "";
$erreurType = "";
$erreurNum = "";
$erreurNom = "";
$erreurDate = "";
$erreurCode = "";
$success = "";
$idCl = $_SESSION['idCl'];

 if(isset($_POST["AjoutPaiement"])){ //Si click sur Ajouter (faudra differencier session admin et vendeur)
                if($db_found){
                  $sql = "SELECT * FROM paiement WHERE ID_client='$idCl'";
                  $result = mysqli_query($db_handle, $sql);
                  if(($user = mysqli_fetch_assoc($result))==0){
                     $erreurClient = "Vous n'avez pas de moyen de paiement enregistré sur votre compte. Veuillez vous diriger vers l'espace Mon Compte";
                  }
                  else{
                     $sql .= " AND Type = '$TypeCarte'";
                     $result = mysqli_query($db_handle, $sql);
                     if(($user = mysqli_fetch_assoc($result))==0){
                        $erreurType = "Le type de carte est incorrect";
                     }
                     else{
                        $sql .= " AND NumCarte = '$NumCarte'";
                        $result = mysqli_query($db_handle, $sql);
                        if(($user = mysqli_fetch_assoc($result))==0){
                           $erreurNum = "Le numéro de la carte est incorrect";
                        }
                         else{
                     $sql .= " AND NomCarte = '$NomCarte'";
                     $result = mysqli_query($db_handle, $sql);
                     if(($user = mysqli_fetch_assoc($result))==0){
                        $erreurNom = "Le nom est incorrect";
                     }
                     else{
                        $sql .= " AND DateExp = '$DateExp'";
                        $result = mysqli_query($db_handle, $sql);
                        if(($user = mysqli_fetch_assoc($result))==0){
                           $erreurDate = "La date d'expiration est incorrecte";
                        }
                        else{
                        $sql .= " AND Code = '$CodeCVC'";
                        $result = mysqli_query($db_handle, $sql);
                        if(($user = mysqli_fetch_assoc($result))==0){
                           $erreurCode = "Le code CVC est incorrect";
                        }
                        else {
                           /*$sql = "DELETE FROM objet WHERE ID_objet = '$ID_Objet'";
                           $result = mysqli_query($db_handle, $sql);*/
                           $successVerif = "Vos informations sont valides et votre paiement est validé ! ";
                        }
                     }
            }
         }
      }
   }
}
}

 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Paiement</title>

<style type="text/css">

      #header {

         background-color: #aaaaaa;
         color: white;
         text-align: center;
         padding: 5px;
      }

       #fond {

         background-color: #eeeeee;
         color: black;
         text-align: right;
         padding: 0px;
      }
</style>

	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

      <h3 style="text-align: center; padding-top: 10px">Vérification de votre moyen de paiement</h3>
                  <div style="align-content: center; padding-top: 10px; padding-left: 300px;">
                        <br>
                        <form method="post">
                           <fieldset class="form-group">
                              <div class="row" style="padding-left: 100px">
                              <legend class="col-form-label col-sm-2 pt-0">Type de carte</legend>
                                 <div class="col-sm-4" style="padding-left: 75px;">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="TypeCarte" id="gridRadios1" value="Visa">
                                       <label class="form-check-label" for="gridRadios1">
                                          Visa
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="TypeCarte" id="gridRadios2" value="Mastercard">
                                       <label class="form-check-label" for="gridRadios2">
                                          Mastercard
                                       </label>
                                    </div>
                                    <div class="form-check disabled">
                                       <input class="form-check-input" type="radio" name="TypeCarte" id="gridRadios3" value="American Express">
                                       <label class="form-check-label" for="gridRadios3">
                                          American Express
                                       </label>
                                   </div>
                                 </div>
                              </div>
                              <span style="color: red;"><?=$erreurType?></span>
                           </fieldset>
                           <br>
                           <div class="form-group row">
                              <label for="inputEmail3" class="col-3 col-form-label">Numéro de la carte</label>
                              <div class="col-4">
                                 <input type="tel" class="form-control" name="NumCarte" id="inputEmail3" placeholder="Numéro de la carte" maxlength="16" required>
                                 <span style="color: red;"><?=$erreurNum?></span>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row">
                              <label for="inputEmail3" class="col-3 col-form-label">Nom de la carte</label>
                              <div class="col-4">
                                 <input type="text" class="form-control" name="NomCarte" id="inputEmail3" placeholder="Nom de la carte" required>
                                 <span style="color: red;"><?=$erreurNom?></span>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row">
                              <label for="inputPassword3" class="col-3 col-form-label">Date d'expiration</label>
                              <div class="col-4">
                                 <input type="date" class="form-control" name="DateExp" id="inputPassword3" placeholder="Date d'expiration" required>
                                 <span style="color: red;"><?=$erreurDate?></span>
                              </div>
                           </div>
                           <br>
                           <div class="form-group row">
                              <label for="inputPassword3" class="col-3 col-form-label">Code CVC</label>
                              <div class="col-4">
                                 <input type="tel" class="form-control" name="CodeCVC" id="inputPassword3" placeholder="Code CVC" maxlength="3" required>
                                 <span style="color: red;"><?=$erreurCode?></span>
                              </div>
                           </div>
                           <br>

                                          <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                     <label class="form-check-label" for="flexCheckDefault">
                                     Veuillez accepter la clause disant que si vous formulez une offre sur un article, vous êtes sous contrat légal pour l'acheter si le vendeur accepte l'offre.
                                        </label>
                                    </div>

                           <div class="form-group row">
                            <div class="col-sm-10" style="padding-left: 30%; padding-bottom: 20px;">
                              <button type="submit" name="AjoutPaiement" class="btn btn-primary">Ajouter</button><br>
                               <span style="color: green;"><?= $successVerif ?></span>
                               <span style="color: red;"><?=$erreurClient?></span>
                            </div>
                          </div>
                        </form>
                     </div>
		</table>
   </div>
</main>
	</form>
	<footer>
		<?php include ('footer.php') ?>
	</footer>
</body>
</html>