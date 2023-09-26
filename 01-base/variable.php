<?php 

// Les variables
// --
// -> Espace Memoire à valeur variable
// -> Nom
// -> Adresse de la zone de memoire
// -> Type de donnée
// -> une valeur


// Definir une variable
// --
// Symbole dollar "$" pour declarer une variable
// Suivi du nom de la variable 
//  -> En anglais
//  -> caracteres alphabetique et numerique et _
//  -> pas de caracteres speciaux (éç!%)
//  -> ne pas commencer par un caractere numerique
// Symbole d'affectation de valeur : simple egale "="
$variable_name = 42;


// Differente facon de nommer
// --
// ceci_est_une_chaine_snake
// ceci-est-une-chaine-slug
// ceciEstUneChaineEnLowerKamelCase
// CeciEstUneChaineEnUpperKamelCase


// Appel d'une variable
// --
// Referencer au nom de la varible précedé de $ 

echo $variable_name; // Affiche 42 sur le navigateur
echo "<hr>";


// Modifier un variable
$variable_name = "ABC";


echo $variable_name; // Affiche ABC
echo "<hr>";



// Supprimer une variable
unset($variable_name);

echo $variable_name; // Affiche ABC
echo "<hr>";


// Les supers globals
// -- 

// print_r( $_GET );
// print_r( $_POST );
// print_r( $_TEST );