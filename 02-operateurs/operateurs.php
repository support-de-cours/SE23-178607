<?php 

$a = 42;
$b = 42;

// Test les valeurs
echo '$a == $b ';   var_dump($a == $b);     echo "<hr>";

// Test les valeurs ET les types
echo '$a === $b ';   var_dump($a === $b);     echo "<hr>";



// ----

// Test les valeurs
echo '$a != $b ';   var_dump($a != $b);     echo "<hr>";

// Test les valeurs ET les types
echo '$a !== $b ';   var_dump($a !== $b);     echo "<hr>";



// ----

// Supériorité
echo '$a > $b ';   var_dump($a > $b);     echo "<hr>";

// Inferiorité
echo '$a < $b ';   var_dump($a < $b);     echo "<hr>";



// ----

// Supériorité OU Egalité
echo '$a >= $b ';   var_dump($a >= $b);     echo "<hr>";

// Inferiorité OU Egalité
echo '$a <= $b ';   var_dump($a <= $b);     echo "<hr>";



// Opérateur Ternaire
// ----

// Syntaxe
// condition ? true : false


// Exemple avec une condition IF / ELSE
if ($a > $b)
{
    echo "A plus grand que B";
}
else 
{
    echo "A plus petit ou egale à B";
}
echo "<hr>";


// Exemple avec le Ternaire
echo ($a > $b)
    ? "A plus grand que B"  // condition est VRAI
    : "A plus petit ou egale à B" // condition FAUSSE
;
echo "<hr>";
echo "<hr>";


// --------

// // Tableau
// $data = [
//     'name' => "John",
// ];
// // Object
// $data = new stdClass;
// $data->name = "John";


// $username = gettype($data) === 'array' 
//     ? $data['name'] 
//     : $data->name
// ;

// echo gettype($data) . " - ";
// echo $username;
// echo "<hr>";


// Nouvelle syhtaxe
$db = [
    'driver' => false,
    'host' => "127.0.0.1",
    'port' => 3306,
    'user' => null,
    'pass' => null,
];


isset($db['driver']) ?: $db['driver'] = "mysql";

// if (isset($db['driver']))
// {
// }
// else {
//     $db['driver'] = "mysql";
// }

// if (!isset($db['driver']))
// {
//     $db['driver'] = "mysql";
// }


echo $db['driver'];



// Operateur de coalessance@
// -- 
// Test si l'operande de gauche est en echec et effectue l'opérande de droite

$db['driver'] ?? $db['driver'] = "mysql";
echo $db['driver'];