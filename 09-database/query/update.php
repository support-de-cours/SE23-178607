<?php 

// Recupération de la clé depuis l'url
$id = $_GET['user'] ?? null;


// Stop l'execcution du script si le parametre 'user' n'est pas défini dans l'url
if ($id === null)
{
    throw new Exception("L'id utilisateur n'est pas definie");
    die();
}



// Recupération des données dans la BDD
// --

// Preparation de la requete SQL 
$sql = "SELECT * FROM `user` WHERE `id`=$id";

// Execution de la requete
$query = $stmt->query($sql);

$user = $query->fetch(\PDO::FETCH_OBJ);


// Definition des variables du formulaire
// --

$firstname = $user->firstname;
$lastname = $user->lastname;
$email = $user->email;


// Traitement du formulaire
// --
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $errors = [];

    // Recuperation des données du formulaire
    // --
    $firstname      = isset($_POST['firstname']) ? trim($_POST['firstname']) : null;
    $lastname       = isset($_POST['lastname']) ? trim($_POST['lastname']) : null;
    $email          = isset($_POST['email']) ? trim($_POST['email']) : null;


    // Verification des données du formulaire
    // --



    // Enregistrement en BDD
    // --

    if (empty($errors))
    {

        // Createion du tableau $user= []
        // --
        $new_user = [
            'firstname' => "$firstname",
            'lastname'  => "$lastname",
            'email'     => "$email",
        ];
        // $new_user = $_POST;

        // dump($user, false);
        

        // Generation de la requete sql
        // --
        $cols = '';
        foreach ($new_user as $key => $value)
        {
            $cols.= empty($cols) ? null : ", ";
            $cols.= "`$key`=:$key";
        }
        // dump($cols, false);

        // SQL String
        $sql = "UPDATE `user` SET $cols WHERE `id`=$id";
        // dd($sql, false);


        // Preparation + Execution de la requete
        // -- 
        $query = $stmt->prepare($sql);
        foreach ($new_user as $key => $value)
        {
            $query->bindValue(":$key", $value, PDO::PARAM_STR);
        }


        // exit;
        $query->execute();



        // Verification de l'execution de la requete
        // --
        // Preparation de la requete SQL 
        $sql = "SELECT * FROM `user` WHERE `id`=$id";
        $query = $stmt->query($sql);
        $saved_user = $query->fetch(\PDO::FETCH_OBJ);

        dump($user, false);
        dump($new_user, false);
        dump($saved_user, false);
        exit;
    }
}

?>
<form method="post">
    <div>
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname" value="<?= $firstname ?>">
    </div>
    <div>
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" value="<?= $lastname ?>">
    </div>
    <div>
        <label for="email">email</label>
        <input type="email" name="email" id="email" value="<?= $email ?>">
    </div>

    <button type="submit">send</button>
</form>