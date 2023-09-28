<?php 

// Source de données  - Simule les données récup. d'un formulaire
$user = [
    'firstname' => "John",
    'lastname'  => "DOE",
    'email'     => "john+3@doe.com",
    'password'  => "AZErty123!",
    'birthday'  => "1985-09-28",
];





// Definition de la requete SQL
// --


// Exemple 1 :  de la requete sur plusieurs lignes
// --

// $sql = "
//     INSERT INTO `user`  (`firstname`,                   `lastname`,                     `email`,                    `password`,                     `birthday`) 
//     VALUES              (\"".$user['firstname']."\",    \"".$user['lastname']."\",      \"".$user['email']."\",     \"".$user['password']."\",      \"".$user['birthday']."\") 
// ";



// Exemple 2 :  de la requete sur une ligne
// --

// $sql = "INSERT INTO `user` (`firstname`, `lastname`, `email`, `password`, `birthday`) VALUES (\"".$user['firstname']."\", \"".$user['lastname']."\", \"".$user['email']."\", \"".$user['password']."\", \"".$user['birthday']."\")";
// dump($sql, false);




// Exemple 3 : Generation automatique de la requete sql
// --

$keys = array_keys($user); // creation d'un tableau dont les valeurs sont les clés du tableau $user
// dump($user, false);
// dump($keys, false);

$cols = "`".implode("`, `", $keys)."`"; // creation de la chaine de caractères représentant les colones au format SQL
// dump($cols, false);

// POUR SQL : creation de la chaine de caractères représentant les valeurs au format SQL
// $values = "\"".implode("\", \"", $user)."\"";  

// POUR PDO : creation de la chaine de caractères représentant les valeurs au format SQL
$values = ":".implode(", :", $keys);  

// dump($values, false);

$sql = "INSERT INTO `user` ($cols) VALUES ($values);"; // compilation de la chaine de caractères SQL finale
dump($sql, false);




// Preparation de la requete pour PDO
// -- 

// Preparation
$query = $stmt->prepare($sql);

// 
foreach ($user as $key => $value)
{
    $query->bindValue(":$key", $value, PDO::PARAM_STR);
}


// Execution de la requete
$query->execute();



// Verification de l'execution de la requete
// --

// lastInsertId
// -> int (id du dernier enregistrement) si succés
// -> false si la requete à echoué

$lastId = $stmt->lastInsertId();

if ($lastId)
{
    echo "Insert Success : $lastId";
}
else 
{
    echo "Insert failed";
}
