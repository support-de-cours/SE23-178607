<?php 

// Recupération de la clé depuis l'url
// $id = isset($_GET['user']) ? $_GET['user'] : null;
$id = $_GET['user'] ?? null;
// dump($id);


if ($id === null)
{
    throw new Exception("Ooops l'id utilisateur n'est pas definie", 42);
}


// Preparation de la requete SQL 
$sql = "SELECT * FROM `user` WHERE `id`=$id";
dump($sql, false);


// Execution de la requete
$query = $stmt->query($sql);


// Recupération du resultat
// $user sera un objet contenant le resultat - si il y a de la donnée et que l'option de fetch() est "PDO::FETCH_OBJ"
// $user sera un tableau contenant le resultat - si il y a de la donnée et que l'option de fetch() est "PDO::FETCH_ASSOC"
// $user sera FALSE - si la requete ne trouve pas de données pour id=XX
$user = $query->fetch(\PDO::FETCH_OBJ); // retourne un objet

// dump($user, true);
// dd($user, false);
dump($user->firstname, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <dl>
        <dt>Firstname</dt>
        <dd><?= $user->firstname ?></dd>

        <dt>Lastname</dt>
        <dd><?= $user->lastname ?></dd>

        <dt>Email</dt>
        <dd><?= $user->email ?></dd>
    </dl>
</body>
</html>