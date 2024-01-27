<?php

$connexion= new PDO("mysql://host=localhost;dbname=module6;charset=utf8","root","demo");
var_dump($connexion);

$sql="
SELECT id, prenom, nom, email, cv, dt_naissance, isAdmin, dt_mis_a_jour
FROM etudiants
";
$stmt= $connexion->query($sql);

//var_dump($stmt);

$etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($etudiants);

echo"
    <table>
    <tr>
    <th>id</th>
    <th>prenom</th>
    <th>nom</th>
    <th>email</th>
    <th>cv</th>
    <th>dt_naissance</th>
    <th>isAdmin</th>
    <th>dt_mis_a_jour</th>
    </tr>
";
foreach ($etudiants as $key => $value){
    echo"
        <tr>
            <td>$value[id]</td>
            <td>$value[prenom]</td>
            <td>$value[nom]</td>
            <td>$value[email]</td>
            <td>$value[cv]</td>
            <td>$value[dt_naissance]</td>
            <td>$value[isAdmin]</td>
            <td>$value[dt_mis_a_jour]</td>
            
    
        </tr>";
    }
    echo"</table>";
