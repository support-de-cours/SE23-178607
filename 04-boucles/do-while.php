<?php 

// DO While : Fait ... Tant que
// --
// Syntaxe : do { code a executer } while ( condition )
// Execute une fois le code avant de tester si la boucle doit continuer


$users = [
    "John",
    "Bob",
    "Jane",
    "Bruce",
];


// while ( !empty($users) )
// {
//     // Affiche l'index 0 de $users
//     echo $users[0] ."<br>";

//     print_r($users);

//     // Depile / Supprime l'index 0 de $user
//     array_shift($users);

//     echo "<hr>";
// }


do {
    // Affiche l'index 0 de $users
    echo $users[0] ."<br>";
    print_r($users);

    // Depile / Supprime l'index 0 de $user
    array_shift($users);
    echo "<hr>";
} while (!empty($users));


echo "<hr>";
print_r($users);