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
    $birthday_day   = isset($_POST['birthday']['day']) ? trim($_POST['birthday']['day']) : null;
    $birthday_month = isset($_POST['birthday']['month']) ? trim($_POST['birthday']['month']) : null;
    $birthday_year  = isset($_POST['birthday']['year']) ? trim($_POST['birthday']['year']) : null;
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
    else if (!preg_match("!^[a-z]+$!i", $lastname))
    {
        $errors['lastname'] = "Le nom dois contenir des caracteres alphabétique uniquement.";
    }

    // email
    // [A-Z0-9a-z\._%+-]+@[A-Za-z0-9\.-]+\.[A-Za-z]{2,64}


    // Password + Confirmation

    // Birthday

    // Terms



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
        print_r($errors);
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
                        <input type="email" class="form-control" name="email" id="email" value="" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password">Votre nouveau mot de passe</label>
                        <input type="password" class="form-control" name="password" id="password" value="" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="confirm">Confirmez votre nouveau mot de passe</label>
                        <input type="password" class="form-control" name="confirm" id="confirm" value="">
                    </div>

                    <div class="mb-3">
                        <label for="birthday_day">Date de naissance</label>
                        <div class="row">
                            <div class="col-4">
                                <select name="birthday[day]" id="birthday_day" class="form-control" required>
                                    <option value="null">Jours</option>
                                    <?php for ($i=1; $i<=31; $i++): ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="birthday[month]" class="form-control" required>
                                    <option value="null">Mois</option>
                                    <?php for($i=0; $i<12; $i++): ?>
                                    <option value="<?= ($i+1) ?>"><?= $months[$i] ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="birthday[year]" class="form-control" required>
                                    <option value="null">Années</option>
                                    <?php for($i=$year; $i>=$year_min; $i--): ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
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