<?php 

include 'connect.php';

$did = $_GET['did'];

$request = $dbcon->prepare("DELETE FROM observation WHERE id=$did");
$request-> execute();

// header('Location:home.php'); //afficher sur la page home

 ?>