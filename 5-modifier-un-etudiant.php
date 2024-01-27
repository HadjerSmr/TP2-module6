<?php
 $connexion=new PDO("mysql://host=localhost;dbname=module6;charset=utf8","root","demo");


 if(!empty($_POST)){

    //$id=$_POST["id"];
    $id = htmlentities($_POST["id"]);
    $nom=htmlentities($_POST["nom"]);
    $prenom=htmlentities($_POST["prenom"]);
    $email=htmlentities($_POST["email"]);
    $cv=htmlentities($_POST["cv"]);
    $dt_naissance=htmlentities($_POST["dt_naissance"]);
    $isAdmin=htmlentities($_POST["isAdmin"]);

    $sql="
        UPDATE etudiants
        SET nom = '$nom', prenom = '$prenom', email = '$email' , cv = '$cv' ,dt_naissance = '$dt_naissance' ,isAdmin = '$isAdmin', dt_mis_a_jour = CURRENT_TIMESTAMP
        WHERE id = $id
    ";

   $connexion->exec($sql);

};

 $id = $_GET["id"];

$sql="SELECT * FROM etudiants WHERE id = $id";

$stmt = $connexion->query($sql);
$etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form method="post">
<input type="hidden" name="id" value="<?php echo $etudiant["id"] ?>" name="id">

    <label for="nom">Nom</label>
    <input type="text" name="nom" value="<?php echo $etudiant["nom"] ?>">

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" value="<?php echo $etudiant["prenom"] ?>" >

    <label for="email">Email</label>
    <input type="text" name="email" value="<?php echo $etudiant["email"] ?>"><br>

    <label for="cv">CV</label>
    <input type="text" name="cv" value="<?php echo $etudiant["cv"] ?>" ><br>

    <label for="dt_naissance">Date de naissance</label>
    <input type="date" name="dt_naissance" value="<?php echo $etudiant["dt_naissance"] ?>"><br>
    
    <label for="isAdmin">Admin</label>
   <input type="radio" name="isAdmin" id="isAdmin-oui" value="1"> Oui
   <input type="radio" name="isAdmin" id="isAdmin-non" value="0" checked> Non<br>

   <input type="submit" value="modifier l'étudiant">
</form>