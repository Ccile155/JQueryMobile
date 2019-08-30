<?php 

include 'connect.php';

$nom=$_POST['nom'];
$organ=$_POST['organ'];
// $date=$_POST['date'];
$partage=$_POST['partage'];

$request = $dbcon->prepare("INSERT INTO `observation` (`id`, `nom`, `organ`, `dateObs`, `partage`) VALUES (NULL, '$nom', '$organ', NULL , '$partage')");
$request->execute();

// header('Location:home.php'); //afficher sur la page home
// echo ("Nom : ".$nom."<br>Date de l'observation : ".$date."<br> Légende photo: ".$organ."<br> Partage avec la communauté : " .$partage. ".<br>");
echo ("Nom : ".$nom."<br> Légende photo: ".$organ."<br> Partage avec la communauté : " .$partage. ".<br>");

 ?>