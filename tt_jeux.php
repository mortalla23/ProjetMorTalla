<?php
  session_start(); // Pour les massages

$nom=$_POST['NOMJ'];
$photo=$_FILES['FILE']['name'];//recupérer le nom de fichier
$fichierTemp=$_FILES['FILE']['tmp_name'];//recupérer le nom du fichier temporaire téléchargé sur le serveur.
move_uploaded_file($fichierTemp,'./img/'.$photo);//transférer le fichier dans le dossier image du projet
require_once("connpdo.php");
$req="INSERT INTO jeux(NOMJ,FILE) VALUES (?,?)";
$ps=$pdo->prepare($req);
$params=array($nom,$photo);

if($ps->execute($params)) {
$_SESSION['message'] = "Ajout réussi.";

header("location:listjeux.php");
} else {  $_SESSION['message'] = "Problème Ajout.";

  
    header("location:listjeux.php");  }
?>