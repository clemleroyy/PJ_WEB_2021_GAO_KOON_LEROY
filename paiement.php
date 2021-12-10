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
                  <a class="nav-link" href="compte.php">Mon compte</a>
               </li>
            </ul>
         </div>
      </div>
      </nav>




      <div id="header">
         <h2>Paiement</h2>
      </div>
      
	
	<form action="paiement1.php" method="post">
		<table>


		<tr>
			<td>Montant à payer:</td>
			<td><input type="number" step="0.01" name="amount"></td>
			</tr>
		<tr>
				<td>
               <h3><li>Coordonnées de livraison : </li></h3>
				</td>
			</tr>
	
		   <tr>
            <td>Nom et prénom:</td>
            <td><input type ="text" name="name"></td>
         </tr>
         <tr>
            <td>Adresse Ligne 1:</td>
            <td><input type ="text" name="adress1"></td>
         </tr>
         <tr>
            <td>Adresse Ligne 2:</td>
            <td><input type ="text" name="adress2"></td>
         </tr>
         <tr>
            <td>Ville:</td>
            <td><input type ="text" name="city"></td>
         </tr>
         <tr>
            <td>Code postal:</td>
            <td><input type ="number" name="zipcode"></td>
         </tr>
         <tr>
            <td>Pays:</td>
            <td><input type ="text" name="country"></td>
         </tr>
         <tr>
            <td>Numero de telephone:</td><br>
            <td><input type ="number" name="phone"></td>
         </tr>

         </div>
		<tr>
				<td>
               <div id="image">
					<h3>
					<li>Paiement : </li>
					</h3>
                  </div>
				</td>
		</tr>

		<tr>
				<td>Payer par:</td>
				<td>
					<input type="radio" name="creditCard" value="MasterCard">MasterCard<br>
					<input type="radio" name="creditCard" value="Visa">Visa<br>
					<input type="radio" name="creditCard" value="Amex">American Express<br>
					<input type="radio" name="creditCard" value="Paypal">Paypal<br>
				</td>
			</tr>
         <tr>
            <td>Numero de carte:</td>
            <td><input type ="number" name="cardnumber"></td>
         </tr>
         <tr>
            <td>Nom affiché sur la carte:</td>
            <td><input type ="text" name="namecard"></td>
         </tr>
         
         <tr>
            <td>Date d'expiration:</td>
            <td><input type ="date" name="dateE"></td>
         </tr>

         <tr>
            <td>Code de sécurité:</td>
            <td><input type ="number" name="security"></td>
         </tr>

			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="button1" value="Soumettre">
				</td>
			</tr>
		</table>
   </div>
		
	</form>
	<footer>
		<?php include ('footer.php') ?>
	</footer>
</body>
</html>