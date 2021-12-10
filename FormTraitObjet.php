<?php

echo "<meta charset=\"utf-8\">";

	$database = "projet_piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	$sql="";

$Categorie = isset($_POST["Categorie"])? $_POST["Categorie"] : "";
$NomObjet = isset($_POST["NomObjet"])? $_POST["NomObjet"] : "";
$ModeDeVente = isset($_POST["ModeDeVente"])? $_POST["ModeDeVente"] : "";
$DateFin = isset($_POST["DateFin"])? $_POST["DateFin"] : "";
$LienP1 = isset($_POST["LienP1"])? $_POST["LienP1"] : "";
$LienP2 = isset($_POST["LienP2"])? $_POST["LienP2"] : "";
$LienP3 = isset($_POST["LienP3"])? $_POST["LienP3"] : "";
$LienVideo = isset($_POST["LienVideo"])? $_POST["LienVideo"] : "";
$ID_Objet = isset($_POST["ID_Objette"])? $_POST["ID_Objette"] : "";
$erreur = "";

if ($db_found) {
$sql="SELECT ID_objet FROM objet WHERE ID_Objet LIKE $ID_Objet";
$result = mysqli_query($db_handle, $sql);
if(mysqli_num_rows($result))
    {echo "Non trouvé";}else{echo"Trouvé";}
}

mysqli_close($db_handle);

?>

