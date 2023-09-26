<?php 

// Les constantes
// --
// -> Espace Memoire à valeur constante
// -> Nom
// -> Adresse de la zone de memoire
// -> Type de donnée
// -> une valeur


// Definir une constante
// --

// Avec la methode "define"
// Nom de la constante 
//  -> En anglais
//  -> caracteres alphabetique et numerique et _
//  -> En majuscule
define("CONSTANT_NAME", "Valeur de constante");

// Avec le mot clé "const"
const MY_SECOND_CONSTANT = "Valeur de la seconde constante";

// Appel d'une constante
// --

echo CONSTANT_NAME;
echo "<hr>";

echo MY_SECOND_CONSTANT;
echo "<hr>";

