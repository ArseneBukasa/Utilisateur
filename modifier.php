<?php
include_once("connexion.php");
if (isset($_POST['update'])) {
	# code...
		$a=$_POST['Num'];
		$b=$_POST['nom'];
		$c=$_POST['Prenom'];
		$d=$_POST['Sexe'];
		$e=$_POST['Age'];
	$result=mysqli_query($mysqli,"update utilisateur set nom='$b',Prenom='$c',Sexe='$d' where Num=$a");
	header("Location:index.html");
}
?>
<?php
$a=$_GET['Num'];
$result=mysqli_query($mysqli,"select * from utilisateur where Num=$a");
while ($res=mysqli_fetch_array($result)) {
		$b=$_POST['nom'];
		$c=$_POST['Prenom'];
		$d=$_POST['Sexe'];
		$e=$_POST['Age'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Modification</title>
</head>
<body>
	<a href="index.html">Accueil</a>
<form name="form1" method="post" action="modifier.php">
	<legend>Modifications</legend>
<fieldset>
	<table width="25%">
		<tr>
			<td></td>
			<td><input type="text" name="nom" placeholder="Votre Nom" required="" value="<?php echo $b;?>" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="text" name="Prenom" size="20" maxlength="60" value="<?php echo $c;?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="text" name="Sexe" placeholder="Votre Genre" required=""value="<?php echo $d;?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="text" name="Age" placeholder="Votre Age" required=""value="<?php echo $e;?>"></td>
		</tr>
		<td><input type="hidden" name="Num" value="<?php echo $_GET ['Num'];?>"></td>
				
	</table>
</fieldset>
	<p>
	<input type="submit" name="update" value="Modification"/>
	</p>
</form>
</body>
</html>