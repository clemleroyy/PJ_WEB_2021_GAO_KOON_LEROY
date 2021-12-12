<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Comment créer un panier en JavaScript">
    <meta name="author" content="1FORMATIK.com">
    <title>Comment créer un panier en JavaScript</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  </head>
<body>
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
<div class="col-md-2">
<select class="form-control" id="02">
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
<h4>Adresse de livraison</h4>
</div>
</div>
<div class="row">
<div class="col-md-12 mt-3">
<input class="form-control" type="text" name="nom" value="" id="nom" placeholder="Nom">
<br>
<input class="form-control" type="text" name="prenom" value="" id="prenom" placeholder="Prénom">
<br>
<input class="form-control" type="text" name="cp" value="" id="cp" placeholder="Code postal">
<br>
<input class="form-control" type="text" name="ville" value="" id="ville" placeholder="Ville">
<br>
<input class="form-control" type="text" name="email" value="" id="email" placeholder="e-Mail">
<br>
<textarea class="form-control" id="message" placeholder="Message Optionnel"></textarea>
<br>
<div class="text-end"><button type="button" class="btn btn-success" id="commander">Commander</button></div>
<br>
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
</html>