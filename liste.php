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
<?php
	while ($res=mysqli_fetch_array($result)) {
	# code...
	echo "<tr>";
	echo "<td>".$res['Num']."</td>";
	echo "<td>".$res['nom']."</td>";
	echo "<td>".$res['Prenom']."</td>";
	echo "<td>".$res['Sexe']."</td>";
	echo "<td>".$res['Age']."</td>";
	echo "<td><a href=\"modifier.php?id=$res[Num]\">Modifier</a>│<a href=\"supprimer.php?id=$res[Num]\" onClick=\"return confirm('voulez-vous vraiment supprimé cet utilisateur?')\">Supprimer</a></td>";
}

?>	
?>
</table>
</body>
</html>
