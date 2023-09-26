<?php 

// While : Tant que
// --
// Syntaxe : while ( condition ) { code à executer }

$users = [
    "John",
    "Bob",
    "Jane",
    "Bruce",
];

while ( !empty($users) )
{
    // Affiche l'index 0 de $users
    echo $users[0] ."<br>";

    print_r($users);

    // Depile / Supprime l'index 0 de $user
    array_shift($users);

    echo "<hr>";
}


echo "<hr>";
print_r($users);


// $isOk = true;

// while ($isOk)
// {
    /// 

//     if ($age < 18)
//     {
//         $isOk = false;
//     }
// }



$users = [
    "John",
    "Bob",
    "Jane",
    "Bruce",
];
$i=0;
while ($i<count($users))
{
    echo $users[$i] ."<br>";
    $i++;
}