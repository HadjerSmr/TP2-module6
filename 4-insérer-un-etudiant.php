<?php



if(!empty($_POST)){ // si la super globale $_POST n'est pas vide

    $connexion=new PDO("mysql://host=localhost;dbname=module6;charset=utf8","root","demo");

  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $cv = $_POST['cv'];
  $dt_naissance = $_POST['dt_naissance'];
  $isAdmin = isset($_POST['isAdmin']) ? 1 : 0;

    $sql = "INSERT INTO etudiants (prenom, nom, email , cv, dt_naissance , isAdmin ) VALUES ('$prenom', '$nom', '$email' , '$cv' , NOW(), 0)";

    $result=$connexion->exec($sql);

    if ($result) {
        echo "L'étudiant a été ajouté avec succès.<br>";
      } else {
        echo "Une erreur s'est produite lors de l'insertion.";
}
}
?>

<form method="post">

    <label for="nom">Nom</label>
    <input type="text" name="nom">

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" >

    <label for="email">Email</label>
    <input type="text" name="email"><br>

    <label for="cv">CV</label>
    <input type="text" name="cv" ><br>
    <!-- CV => typr : file -->

    <label for="dt_naissance">Date de naissance</label>
    <input type="date" name="dt_naissance" ><br>
    
    <label for="isAdmin">Admin</label>
   <input type="radio" name="isAdmin" id="isAdmin-oui" value="1"> Oui
   <input type="radio" name="isAdmin" id="isAdmin-non" value="0" checked> Non<br>

   <input type="submit" value="Ajouter un étudiant">
</form>