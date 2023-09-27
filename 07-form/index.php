<?php 
// ---

$months   = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
$year     = date("Y");
$year_min = $year - 100;


$firstname      = null;
$lastname       = null;
$email          = null;
$password       = null;
$confirm        = null;
$birthday_day   = null;
$birthday_month = null;
$birthday_year  = null;
$terms          = false;

$password_min = 6;
$password_max = 12;
$password_special_chars = "!-_*+=.()@#";
$min_age = 13;


// Test si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    // Creation du tableau d'erreurs
    // On ajoutera les erreurs lors des controles de données
    $errors = [];


    // Recupération des champs
    // -- 

    $firstname      = isset($_POST['firstname']) ? trim($_POST['firstname']) : null;
    $lastname       = isset($_POST['lastname']) ? trim($_POST['lastname']) : null;
    $email          = isset($_POST['email']) ? trim($_POST['email']) : null;
    $password       = isset($_POST['password']) ? $_POST['password'] : null;
    $confirm        = isset($_POST['confirm']) ? $_POST['confirm'] : null;
    $birthday_day   = isset($_POST['birthday']['day']) ? (int) $_POST['birthday']['day']   : null;
    $birthday_month = isset($_POST['birthday']['month']) ? (int) $_POST['birthday']['month'] : null;
    $birthday_year  = isset($_POST['birthday']['year']) ? (int) $_POST['birthday']['year']  : null;
    $terms          = isset($_POST['terms']);


    // Controle des champs
    // --

    // Firstname
    if (empty($firstname))
    {
        $errors['firstname'] = "Le prénom est obligatoire";
    }
    else if (!preg_match("/^[a-z]+$/i", $firstname))
    {
        $errors['firstname'] = "Le prénom dois contenir des caracteres alphabétique uniquement.";
    }

    // Lastname
    if (empty($lastname))
    {
        $errors['lastname'] = "Le nom est obligatoire";
    }
    else if (!preg_match("/^[a-z]+$/i", $lastname))
    {
        $errors['lastname'] = "Le nom dois contenir des caracteres alphabétique uniquement.";
    }

    // email
    if (empty($email))
    {
        $errors['email'] = "L'adresse email est obligatoire";
    }
    else if (!preg_match("/[0-9a-z._%+-]+@[a-z0-9.-]+\.[a-z]{2,64}/i", $email))
    {
        $errors['email'] = "L'adresse email n'est pas correcte";
    }


    // Password
    if (empty($password))
    {
        $errors['password'] = "Le mot de passe est obligatoire";
    }
    // -> min 6 caractère
    else if (strlen($password) < $password_min)
    {
        $errors['password'] = "Le mot de passe doit contenir $password_min caractères minimum";
    }
    // -> max 12 caractère
    else if (strlen($password) > $password_max)
    {
        $errors['password'] = "Le mot de passe doit contenir $password_max caractères maximum";
    }
    // -> au moins 1 minuscule
    else if (!preg_match("/[a-z]+/", $password))
    {
        $errors['password'] = "Le mot de passe doit contenir au moins une minuscule";
    }
    // -> au moins 1 majuscule
    else if (!preg_match("/[A-Z]+/", $password))
    {
        $errors['password'] = "Le mot de passe doit contenir au moins une majuscule";
    }
    // -> au moins 1 numérique
    else if (!preg_match("/[0-9]+/", $password))
    {
        $errors['password'] = "Le mot de passe doit contenir au moins un chiffre";
    }
    // -> au moins 1 caractère spécial
    // else if (!preg_match("/\W/", $password))
    else if (!preg_match("/[" . preg_quote($password_special_chars, '/') . "]+/", $password))
    {
        $errors['password'] = "Le mot de passe doit contenir au moins un caractères spécial $password_special_chars";
    }

    // Confirmation
    if ($confirm !== $password)
    {
        $errors['confirm'] = "Les mot de passe doivent etre identiques.";
    }

    // Birthday
    $date = new DateTime("$birthday_year-$birthday_month-$birthday_day");
    $now = new DateTime();
    $age = ( 
        date("md", date("U", mktime(0, 0, 0, $birthday_month, $birthday_day, $birthday_year))) > date("md")
        ? ((date("Y") - $birthday_year) - 1)
        : (date("Y") - $birthday_year)
    );

    // $date = new DateTime();
    // $age = date('Y-m-d', strtotime($date->format('Y-m-d') .' +18 year'));


    // -> date valide
    if (!checkdate($birthday_month, $birthday_day, $birthday_year) )
    {
        $errors['birthday'] = "Indiquez une date valide.";
    }
    // -> date dans le passé
    else if ($date > $now) 
    {
        $errors['birthday'] = "Indiquez une date passée.";
    }
    // -> age minimum 13
    else if ($age < $min_age)
    {
        $errors['birthday'] = "Vous n'avez pas l'age requis pour vous inscrire.";
    }

    // Terms
    // $terms ?: $errors['terms'] = "Vous devez accepter les CGU.";
    if (!$terms)
    {
        $errors['terms'] = "Vous devez accepter les CGU.";
    }




    if (empty($errors))
    {
        // Enregistrement des données
        // Redirection de l'utilisateur
        echo "Enregistrement en BDD !!!!!<br>";
        exit;
    }
    else
    {
        // Affichage des erreurs
        echo date("Y-m-d H:i:s");
        echo "ERRORS !!!!!<br>";
        dump($errors, false);
    }
}


/**
 * Dump some data
 *
 * @param mixed $data data you want to debug
 * @param boolean $vd var_dum if TRUE, print_r if FALSE
 * @return void
 */
function dump(mixed $data, bool $vd=true): void
{
    echo "<pre>";
    $vd ? var_dump($data) : print_r($data);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <h1>PHP Form</h1>

        <div class="row">
            <div class="col-8 offset-2">

                <form method="post" novalidate>
        
                    <div class="mb-3">
                        <label for="firstname">Prénom</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $firstname ?>" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="lastname">NOM</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" value="<?= $lastname ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email">Votre adresse e-mail</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= $email ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password">Votre nouveau mot de passe</label>
                        <input type="text" class="form-control" name="password" id="password" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="confirm">Confirmez votre nouveau mot de passe</label>
                        <input type="text" class="form-control" name="confirm" id="confirm">
                    </div>

                    <div class="mb-3">
                        <label for="birthday_day">Date de naissance</label>
                        <div class="row">
                            <div class="col-4">
                                <select name="birthday[day]" id="birthday_day" class="form-control" required>
                                    <option value="null">Jours</option>
                                    <?php for ($i=1; $i<=31; $i++): ?>
                                    <option value="<?= $i ?>" <?= $i === 3 ? "selected" : null ?>><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="birthday[month]" class="form-control" required>
                                    <option value="null">Mois</option>
                                    <?php for($i=0; $i<12; $i++): ?>
                                    <option value="<?= ($i+1) ?>" <?= $i === 8 ? "selected" : null ?>><?= $months[$i] ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="birthday[year]" class="form-control" required>
                                    <option value="null">Années</option>
                                    <?php for($i=$year; $i>=$year_min; $i--): ?>
                                    <option value="<?= $i ?>" <?= $i === 1985 ? "selected" : null ?>><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>
                            <input type="checkbox" name="terms">
                            J'accepte les CGU
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-sm btn-primary">Send</button>
                    <button type="reset" class="btn btn-sm btn-secondary">Cancel</button>
                </form>

            </div>
        </div>

    </div>

</body>
</html>