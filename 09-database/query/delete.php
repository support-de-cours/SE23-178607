<?php 

// Recupération de la clé depuis l'url
$id = $_GET['user'] ?? null;


// Stop l'execcution du script si le parametre 'user' n'est pas défini dans l'url
if ($id === null)
{
    throw new Exception("L'id utilisateur n'est pas definie");
    die();
}




// Recupération des données dans la BDD
// --

// Preparation de la requete SQL 
$sql = "DELETE FROM `user` WHERE id=:id";

// Execution de la requete
$stmt->prepare($sql)->execute([
    ':id' => $id
]);
// $stmt->query($sql);

