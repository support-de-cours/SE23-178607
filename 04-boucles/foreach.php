<?php 

// Foreach : pour chaque...
// --
// syntaxe : foreach( $array as $key => $value )
// syntaxe : foreach( $array as $value )

$fruits = [
    'Pommes',
    'Poires',
    'Bananes',
];

foreach ($fruits as $key => $fruit)
{
    echo $key ." - ". $fruit ." ! <br>";
}

echo "<hr>";
foreach ($fruits as $fruit)
{
    echo $fruit ." ! <br>";
}

echo "<hr>";
print_r($fruits);
echo "<hr>";
echo "<hr>";



$user = [
    'firstname' => "John",
    'lastname' => "DOE",
    'age' => 42,
];

foreach ($user as $property => $value)
{
    echo $property ." - ". $value ." ! <br>";
}


echo "<hr>";
print_r($user);