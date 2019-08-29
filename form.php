<?php

// $nom= $_POST["nom"];
$nom=isset($_POST['form']);
$date=isset($_POST['form']);
$organ=isset($_POST['form']);
$slider=isset($_POST['form']);
// $organ= $_POST["organ"];
// $date= $_POST["date"];
// $slider= $_POST["slider"];

echo ("Nom : ".$nom."Date de l'observation : ".$date."<br> Légende photo: ".$organ."<br> Partage avec la communauté : " .$slider. "<br>");

?>