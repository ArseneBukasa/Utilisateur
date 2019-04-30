<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajout</title>
</head>
<body>
	<?php  
	include_once("connexion.php");
	if (isset($_POST['submit'])) {
		# code...
		$b=$_POST['nom'];
		$c=$_POST['Prenom'];
		$d=$_POST['Sexe'];
		$e=$_POST['Age'];
		$result=mysqli_query($mysqli,"insert into utilisateur (nom,Prenom,Sexe,Age) values ('$b','$c','$d','$e')");
	//	echo '<p>$username inscription effectée avec succès!</p>';
		{echo "<h3>$b est inscrit(e)</h3>";
		echo "<br/><a href='liste.php'> Afficher la liste</a>";}
	}
	else
	{
		echo "echec d'inscription";


	}






	?>

</body>
</html>