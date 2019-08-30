<?php

$nom=$_POST['nom'];
$date=$_POST['date'];
$organ=$_POST['organ'];
$partage=$_POST['partage'];

echo ("Nom : ".$nom."<br>Date de l'observation : ".$date."<br> Légende photo: ".$organ."<br> Partage avec la communauté : " .$partage. ".<br>");

?>