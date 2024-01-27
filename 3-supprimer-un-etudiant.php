<?php

// Connexion à la base de données MySQL
$connexion= new PDO("mysql://host=localhost;dbname=module6;charset=utf8","root","demo");
var_dump($connexion);

// Récupération de l'ID de l'étudiant à supprimer
$id = $_GET['id'];

// Requête SQL pour supprimer l'étudiant
$sql = "DELETE FROM etudiants WHERE id = $id";
$stmt = $connexion->query($sql);


// Affichage d'un message de confirmation ou d'erreur
if ($stmt->rowCount() > 0) {
    echo "L'étudiant de l'id $id a bien été supprimé. ";
} else {
    echo "L'étudiant de l'id $id n'est pas présent dans la base de données.";
}
