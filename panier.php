   <!DOCTYPE html>
   <html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Maison Manolo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!--<link rel='stylesheet' type='text/css' href='panier.css'>-->
   </head>
   <body>
      <header>
            <h1 style="text-align: center;"><img src="logo_maison_manolo_v4.png" width="200px" height="120px"></h1>
         </header>
         <nav class="navbar navbar-expand-sm sticky-top bg-light navbar-light">
           <div class="container-fluid">
               <a class="navbar-brand col-sm-2" style="margin-left: 20px; width:180px" href="index.php"><img src="logo_maison_manolo_v4.png" width="80px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
               <ul class="navbar-nav col-sm-2" style="width:200px">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php">Accueil</a>
                  </li>
               </ul>
               <ul class="navbar-nav col-sm-2" style="width:200px">
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
                     <a class="nav-link active" href="panier.php">Panier</a>
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
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <div class="container bg-light rounded">
   <div class="row">
   <div class="col-md-12 mt-3">
   <div class="row mt-3">
   <div class="col-md-4">
   <p>Produit 01 (8.00 €)</p>
   </div>
   <div class="col-md-2">
   <select class="form-control" id="01">
   <option value="XS">XS</option>
   <option value="S">S</option>
   <option value="M">M</option>
   <option value="L">L</option>
   <option value="XL">XL</option>
   <option value="2XL">2XL</option>
   <option value="3XL">3XL</option>
   <option value="4XL">4XL</option>
   </select>
   </div>
   <div class="col-md-2">
   <div class="form-check">
   <input class="form-check-input produit_001" type="checkbox" data-nom="Option 1" data-prix="6.00" id="case_01">
   <label class="form-check-label" for="case_01">
   Option 1 (+6.00 €)
   </label>
   </div>
   <div class="form-check">
   <input class="form-check-input produit_001" type="checkbox" data-nom="Option 2" data-prix="5.00" id="case_02">
   <label class="form-check-label" for="case_02">
   Option 2 (+5.00 €)
   </label>
   </div>
   </div>
   <div class="col-md-4 text-end">
   <a style="cursor:pointer;" data-nom="Produit 01" data-prix="8.00" data-select="01" data-checkbox="produit_001" class="btn btn-primary ajouter-panier">ajouter au panier</a>
   </div>
   </div>
   <div class="row mt-3">
   <div class="col-md-4">
   <p>Produit 02 (15.00 €)</p>
   </div>
   <div class="col-md-6 text-end">
   <a style="cursor:pointer;" data-nom="Produit 02" data-prix="15.00" data-select="02" class="btn btn-primary ajouter-panier">ajouter au panier</a>
   </div>
   </div>
   <div class="row mt-4">
   <div class="col-md-4">
   <p>Produit 03 (12.00 €)</p>
   </div>
   <div class="col-md-8 text-end">
   <a style="cursor:pointer;" data-nom="Produit 03" data-prix="12.00" class="btn btn-primary ajouter-panier">ajouter au panier</a>
   </div>
   </div>
   </div>
   </div>
   <div class="row">
   <div class="col-md-12 mt-3">
   <h4>Votre commande</h4>
   </div>
   </div>
   <div class="row">
   <div class="col-md-12 mt-3">
   Nombre de produit(s) dans le panier : <span class="total-count"></span>
   <br /><br />
   <table width="100%" class="show-panier" id="macommande"></table>
   <br />
   <br />
   <div>*Prix total: <b><span class="total-panier" id="prix_total">0.00</span> euros</b></div>
   <br />
   <i id="livraison-detail">*Livraison incluse</i>
   <div class="text-end"><button class="clear-panier btn btn-danger">Vider le panier</button></div>
   </div>
   </div>
   <div class="row">
   <div class="col-md-12 mt-3">

   <div id="qte_minimum_report"></div>
   </div>
   </div>
   <div class="modal" id="mymodal" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
   <h5 class="modal-title">Commande confirmée</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
     </div>
     <div class="modal-body">
   <div id="commande_report">Merci de votre commande</div>
     </div>
     <div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
     </div>
   </div>
     </div>
   </div>
   <div class="modal" id="mymodal_erreur" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
   <h5 class="modal-title">Erreur de commande</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
     </div>
     <div class="modal-body">
   <div id="commande_report">Une erreur est survenue</div>
     </div>
     <div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
     </div>
   </div>
     </div>
   </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   <script src="panier.js"></script>
   <script>
   function commander(nom,prenom,cp,email,commande,prix_total,message,ville){
   $.ajax({
   url : 'mail.php',
   type : 'GET', 
   data : 'nom=' + nom + '&prenom=' + prenom + '&cp=' + cp + '&email=' + email + '&commande=' + commande + '&prix_total=' + prix_total + '&message=' + message + '&ville=' + ville, 
   dataType : 'html',
   success : function(reponse){
   if (reponse == "1"){
   MonPanier.clearpanier();
   afficherpanier();
   document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
   $('#mymodal').modal('show');
   }
   if (reponse == "0"){$('#mymodal_erreur').modal('show');}
   }
   });
   }
   $('#commander').click( function(){
   var nom = document.getElementById("nom").value;
   var prenom = document.getElementById("prenom").value;
   var cp = document.getElementById("cp").value;
   var ville = document.getElementById("ville").value;
   var email = document.getElementById("email").value;
   var commande = JSON.stringify(panier);
   var prix_total = document.getElementById("prix_total").innerHTML;
   var message = encodeURIComponent(document.getElementById("message").value);
   commander(nom,prenom,cp,email,commande,prix_total,message,ville);
   });
   </script>
   </body>
      <?php include ('footer.php') ?>
   </body>
   </html>