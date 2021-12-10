<?php
$mail="";
$mdp="";
$erreurMail="";
$erreurMdp="";
$erreur=false;

if(!empty($_POST["mailco"])){
    $mail =$_POST["mailco"];
 }else{
        $erreur=true;
        $erreurMail="nom oublié";
}
if(!empty($_POST["mdp"])){
    $mdp =$_POST["mdp"];
 }else{
        $erreur=true;
        $erreurMdp="prenom oublié";
}

if($erreur == true){
    $erreur = "formulaire faux";
}
