<?php 

// if(isset($_POST['formData']))


//try-catch permet d'éviter les erreurs fatales, utilisable dans plein de situations
try {
	$dbuser = 'root';
	$dbpass = '';
	$db='floronline';

	$dbcon = new PDO('mysql:host=localhost;dbname='.$db, $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	// l'instanciation de la connexion
	//si la connection echoue, PDO lance une exception
	$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// $sql=$dbcon->query('INSERT INTO observation VALUES( NULL, "nom", "organ", "0000-00-00", "partage")');

	//cette ligne demande de transformer les erreurs en exception
	echo "<script>console.log('Connexion réussie');</script>";

} catch(Exception $e) {
	echo "Oups, fail";
	echo "<script>console.log('Erreur code :'".$e->getMessage()."');</script>";
	die();
}


 ?>