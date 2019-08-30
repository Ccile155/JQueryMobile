<?php 

include 'connect.php';

$uid = $_POST['id'];
$nom=$_POST['nom'];
$organ=$_POST['organ'];
$date=$_POST['date'];
$partage=$_POST['partage'];

$request = $dbcon->prepare("SELECT * FROM observation WHERE id=$uid");
$request->execute();

while($row=$request->fetch(PDO::FETCH_ASSOC)){
extract($row);

$request = $dbcon->prepare("UPDATE observation SET nom = '$nom', organ = '$organ', dateObs = '$date', partage='$partage' WHERE crud.id = $uid");
$request->execute();

// header('Location:home.php'); //afficher sur la page home

}



?>

<!-- 
<?php

// function upperCase(){
// 	$request = $dbcon->prepare("UPDATE `crud` SET `Nom`='strtoupper($name)' WHERE 1");
// 	$request->execute();
// }

 ?> -->