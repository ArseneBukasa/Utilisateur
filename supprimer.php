<?php

include_once("connexion.php");
$id=$_GET['Num'];
$result=mysqli_query($mysqli,"delete from utilisateur where Num=$a");
header("Location:index.html");
?>