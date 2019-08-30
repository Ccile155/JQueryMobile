<?php 

include 'connect.php';

$exid = $_GET['exid'];

$request = $dbcon->prepare("SELECT * FROM observation WHERE id=$exid");
$request->execute();

while($row=$request->fetch(PDO::FETCH_ASSOC)){
extract($row);

$request = $dbcon->prepare("UPDATE `observation` SET `nom`='$nom',`organ`='$organ', 'partage'='$slider' WHERE id=$exid");
$request->execute();

// header('Location:home.php'); //afficher sur la page home
}


 ?>