<?php 

// Une fonction est un procédure stockée
// --

// Procedure sans fonction (on se repete)

$a = 42 + 26;
echo "La somme de 42 + 26 = $a";
echo "<br>";

$b = 54 + 6;
echo "La somme de 54 + 6 = $b";
echo "<br>";

$c = 2 + 27;
echo "La somme de 2 + 27 = $c";
echo "<br>";

$d = 14 + 12;
echo "La somme de 14 + 12 = $d";
echo "<br>";

echo "<hr>";


// Declaration d'une fonction
//  -> mot clé "function"
//  -> suivis du nom de la fonction et de parentheses
//  -> la liste d'instruction est stockée entre accolades {}
function calculateSomething($a, $b, $c)
{
    $result = $c - $a * $b;
    echo "La resultat de $c - $a * $b = $result";
    echo "<br>";
}

calculateSomething(42, 26, 150);
calculateSomething(54, 6, 1);
calculateSomething(2, 27, 45);
calculateSomething(14, 12, 0);

// ...

echo "<hr>";

// Fonction anonyme
// --
$myAnonFnc = function() {
    echo "Faire des chose";
};

$myAnonFnc();


// ...

echo "<hr>";

$fruits = [
    'Pomme',
    'Poire',
    'Banane',
];

foreach ($fruits as $key => $fruit)
{
    echo $key ." - ". $fruit ." ! <br>";
}

// array_walk($fruits, function(&$fruit){
//     $fruit = strtoupper($fruit);
//     $fruit.= " - ".strlen($fruit);
//     $fruit = "Fruit : " . $fruit;
// });

function doSuperFruit(&$fruit){
    $fruit = strtoupper($fruit);
    $fruit.= " - ".strlen($fruit);
    $fruit = "Super Fruit : " . $fruit;
}

array_walk($fruits, 'doSuperFruit');

echo "<hr>";

foreach ($fruits as $key => $fruit)
{
    echo $key ." - ". $fruit ." ! <br>";
}


