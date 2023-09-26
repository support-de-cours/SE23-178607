<?php // <- Balise d'ouverture PHP


// Commentaire sur une ligne

/* 
commentaire 
multi
lignes
*/

/**
 * Definition de ma fonction doSomething
 *
 * @param integer $a la valeur de $a
 * @param integer $b
 * @return integer
 */
function doSomething(int $a, int $b): int
{
    return $a+$b;
}


// Exemple de sortie
echo "Hello There ! <br>";
EcHo doSomething(21,21);

// Balise de fermeture (facultative) -> ?>


<!-- Alternative au "php echo" -->
<?= "Hello wolrd" ?>
<?php echo "Hello wolrd" ?>