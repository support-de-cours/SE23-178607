<?php 

// Foreach : pour...
// --
// syntaxe : for ( initialisation; condition; incrementation ) { code à executer }

for ($i=1; $i<=10; $i++)
{
    echo $i. "<br>";
}
echo "<hr>";



// --------------------------------------------

$fruits = [
    'Pommes',
    'Poires',
    'Bananes',
];

echo "nbre fruits : ".count($fruits)."<br>";
for ($i=0; $i < count($fruits); $i++)
{
    echo $fruits[$i]. "<br>";
}