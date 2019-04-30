<?php
include_once("connexion.php");
$result=mysqli_query($mysqli,"select * from utilisateur order by Num desc");
?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="style.css">

<head>
	<meta charset="utf-8">
	<title>Affichage</title>
</head>
<body>
<a href="index.html">Inscription</a>
<table width="80%" >
<tr bgcolor="#13455c">
	<td>IDENTIFIANT</td>
	<td>Votre Nom</td>
	<td>Votre Prenom</td>
	<td>Votre Genre</td>
	<td>Votre Age</td>
	<td>Mise à jour</td>
</tr>
	
?>
</table>
</body>
</html>
