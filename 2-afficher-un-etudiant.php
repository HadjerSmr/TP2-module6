<?php


$connexion = new PDO("mysql://host=localhost;dbname=module6;charset=utf8", "root", "demo");
var_dump($connexion);

$id = $_GET["id"];

$sql = "SELECT * FROM etudiants WHERE id = $id";

$stmt = $connexion->query($sql);

if ($stmt->rowCount() > 0) {
  //si L'étudiant existe
  $etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
  // si L'étudiant n'existe pas
  $etudiant = null;
  echo"Erreur: l'étudiant de l'id $id n'est pas présent dans la base de données";
}

var_dump($etudiant);
