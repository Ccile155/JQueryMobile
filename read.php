<?php 

include 'connect.php';

// $nom=$_POST['nom'];
// $organ=$_POST['organ'];
// $date=$_POST['dateObs'];
// $partage=$_POST['partage'];

$request = $dbcon->prepare("SELECT FROM `observation` (`id`, `nom`, `organ`, `dateObs`, `partage`)");
$request->execute();

// header('Location:home.php'); //afficher sur la page home


 ?>