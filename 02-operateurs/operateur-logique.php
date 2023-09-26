<?php 
// Voir les tables de vérité : https://fr.wikipedia.org/wiki/Table_de_v%C3%A9rit%C3%A9

$a = true;
$b = false;

echo '$a : '; var_dump($a); echo "<br>";
echo '$b : '; var_dump($b); echo "<br>";
echo "<hr>";



// ET logique
// --
// notation : "AND", "&&"
echo 'ET - $a && $b : ';
echo ($a && $b) ? "VRAI" : " FAUX"; echo "<hr>";


// OU logique
// --
// notation : "OR", "||"
echo 'OU - $a || $b : ';
echo ($a || $b) ? "VRAI" : " FAUX"; echo "<hr>";


// OU eXclusif
// --
// notation : "XOR"
echo 'XOR - $a XOR $b : ';
echo ($a XOR $b) ? "VRAI" : " FAUX"; echo "<hr>";


// Inverse de la valeur logique
// -- 
// notation : "!"
// si $a est TRUE, !$a est FALSE


echo '$a : '; var_dump( $a ); echo "<br>";

$c = "abc";
echo '$c : '; var_dump( !!$c ); echo "<br>";
echo '$c : '; var_dump( !!$c === true ); echo "<br>";
