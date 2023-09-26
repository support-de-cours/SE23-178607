<?php 

$a = "AA";
$b = "BB";

// Sortie : echo
// -- 
echo $a;
echo "<hr>";


// Sortie : print 
// Test la sortie avant d'effectuer la sortie
// -- 
print $a;
print "<hr>";


// Sortie : Readfile
// --
readfile("test.txt");
print "<hr>";


// Sortie : print_r
// -- 
$arr = [
    "line1",
    "line2",
    "line3", // comment
    "line4", // comment
    "line5", // comment
    "line6", // comment
];
print_r($arr);
print "<hr>";


// Sortie : var_dump
// -- 
var_dump($arr);
print "<hr>";

// --

$isOk = false;

print_r($isOk);     print "<hr>";
var_dump($isOk);    print "<hr>";


// Sortie : printf
// -- 
printf(
    "La valeur %s n'est pas dans le tableau \$arr, les valeurs aceptées sont \"%s\".",
    $a,
    implode("\", \"", $arr)
);

echo "<hr>";
echo "La valeur ".$a." n'est pas dans le tableau \$arr, les valeurs aceptées sont \"".implode("\", \"", $arr)."\".";