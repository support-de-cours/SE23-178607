<?php 

// Defenition de la requete 
// $sql = "SELECT * FROM `user`";
$sql = "SELECT `id`, `firstname`, `lastname` FROM `user`";
// $sql = "SELECT `id`, `firstname` AS `prenom`, `lastname` FROM `user`";

// Execution de la requete
$query = $stmt->query($sql);

// Recupération des resultats
// $users = $query->fetchAll(\PDO::FETCH_NUM); // retourne un tableau numerique
// $users = $query->fetchAll(\PDO::FETCH_ASSOC); // retourne un tableau associatif
$users = $query->fetchAll(\PDO::FETCH_OBJ); // retourne un objet




// dump(gettype($results), false);
// dump($users, false);
// echo "<hr>";


foreach ($users as $user)
{
    // dump($user, false);


    // Recupération d'une donnée si la requete utilise la methode PDO::FETCH_NUM
    // -> pas recommandé
    // echo "Firstname : ". $user[1] . "<br>";

    // Recupération d'une donnée si la requete utilise la methode PDO::FETCH_ASSOC
    // echo "Firstname : ". $user['firstname'] . "<br>";

    // Recupération d'une donnée si la requete utilise la methode PDO::FETCH_OBJ
    // -> meilleur methode
    echo "Id : ". $user->id . "<br>";
    echo "Firstname : ". $user->firstname . "<br>";
    echo "http://site.com?user=".$user->id."<br>";
    // echo "Firstname : ". $user->prenom . "<br>";


    echo "<hr>";
}