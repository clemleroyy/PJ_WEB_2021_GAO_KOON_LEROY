<!DOCTYPE html>
<html>
<head>
<title>The Virtual Library</title>
<meta charset="utf-8">
<style type="text/css">
body {
background-color: #eeeeee;
}
h2 {
text-align: center;
color: white;
background-color: black;
padding: 20px;
width: 600px;
margin: 0 auto 20px auto;
border-radius: 5px;
}
table {
width: 660px;
margin: auto;
background-color: #9999EE;
}
input {
background-color: #6699EE;
}
</style>
</head>
<body>
<h2>Ma Bibliothèque Virtuelle 2021</h2>
<form action="notification.php" method="post">
<table border="1">
<tr>
<td size="20">Titre</td>
<td><input type="text" name="titre" size="60"></td>
</tr>
<tr>
<td>Auteur</td>
<td><input type="text" name="auteur" size="60"></td>
</tr>
<tr>
<td>Année</td>
<td><input type="text" name="annee" size="60"></td>
</tr>
<tr>
<td>Editeur</td>
<td><input type="text" name="editeur" size="60"></td>
</tr>
<tr>
<td>Couverture</td>
<td><input type="text" name="photo" size="60"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="button1" value="Rechercher">
<input type="submit" name="button2" value="Ajouter">
<input type="submit" name="button3" value="Supprimer">
</td>
</tr>
</table>
</form>
</body>
</html>