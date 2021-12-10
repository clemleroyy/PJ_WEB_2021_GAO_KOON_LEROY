<?php
   session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connexion</title>
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
      <main>
      	<div class="row">
      		<div class="col-sm-6 pt-2" style="text-align: center">
      			<h2>Connectez-vous</h2>
      			<form action="testco.php" method="POST" >
      				<div class="form-group row" style="padding-left: 10px; margin: 10px; padding-top: 10px;">
              			<label for="mailco" class="col-3 col-form-label">Email</label>
              			<div class="col-6">
                			<input type="email" class="form-control" id="mailco" placeholder="Veuillez saisir votre mail" required>
              			</div>
            		</div>
            		<div class="form-group row" style="padding-left: 10px; margin: 10px">
              			<label for="mdp" class="col-3 col-form-label">Mot de passe</label>
              			<div class="col-6">
                			<input type="password" class="form-control" id="mdp" placeholder="Veuillez saisir votre mot de passe" required>
              			</div>
            		</div>
      				<select class="form-select" required aria-label="select" id="choix" style="margin: 10px">
  							<option value="">Choisissez votre statut</option>
  							<option value="1">Administrateur</option>
  							<option value="2">Vendeur</option>
  							<option value="3">Client</option>
  						</select>
  						<div class="form-group row" style="padding-left: 10px; margin: 10px">
            			<div class="col-sm-10" style="padding-left: 20%">
              				<button type="submit" class="btn btn-primary">Connexion</button>
            			</div>
          			</div>
      			</form>
      		</div>
      		<div class="col-sm-6 pt-2" style="text-align: center">
      			<h2>Inscrivez-vous</h2>
      			<form action="testco.php" method="POST" >
      				<div class="form-group row" style="padding-left: 10px; margin: 10px;  padding-top: 10px;">
              			<label for="mailco" class="col-3 col-form-label">Email</label>
              			<div class="col-6">
                			<input type="email" class="form-control" id="mailco" placeholder="Veuillez saisir votre mail" required>
              			</div>
            		</div>
            		<div class="form-group row" style="padding-left: 10px; margin: 10px">
              			<label for="mdp" class="col-3 col-form-label">Mot de passe</label>
              			<div class="col-6">
                			<input type="password" class="form-control" id="mdp" placeholder="Veuillez saisir votre mot de passe" required>
              			</div>
            		</div>
  						<div class="form-group row" style="padding-left: 10px; margin: 10px">
            			<div class="col-sm-10" style="padding-left: 20%">
              				<button type="submit" class="btn btn-primary">Inscription</button>
            			</div>
          			</div>
      			</form>
      		</div>
      	</div>
      </main>
      <footer class="bg-light text-center text-lg-start">
      	<?php include ('footer.php') ?>	
      </footer>
</body>
</html>