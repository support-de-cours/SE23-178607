<?php 

// Sortie de fonction avec le mot clé "return" en fin de procedure
function calculateAnotherThin($a, $b)
{
    // echo $a + $b; // Sortie PHP
    // return $a + $b; // sortie de fonction

    $c = $a + $b; // sortie de fonction

    // echo "avant le return<br>";
    return $c;
    // echo "apres le return<br>"; // pas executé
}

$aa = calculateAnotherThin(10, 5);
echo calculateAnotherThin($aa, 2);