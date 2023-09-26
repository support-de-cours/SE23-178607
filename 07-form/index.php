<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    print_r($_POST); 
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
            <div class="col-6 offset-3">

                <form method="post" novalidate>
        
                    <div class="mb-3">
                        <label for="truc">Prénom</label>
                        <input type="text" class="form-control" name="firstname" id="truc" value="" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="lastname">NOM</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" value="" required>
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
                        <input type="password" class="form-control" name="confirm" id="confirm" value="" required>
                    </div>

                    <div class="mb-3">
                        <label for="birthday_day">Date de naissance</label>
                        <div class="row">
                            <div class="col-4">
                                <select name="birthday[day]" id="birthday_day" class="form-control">
                                    <option value="null">Jours</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="birthday[month]" class="form-control">
                                    <option value="null">Mois</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="birthday[year]" class="form-control">
                                    <option value="null">Années</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-sm btn-primary">Send</button>
                    <button type="reset" class="btn btn-sm btn-secondary">Cancel</button>
                </form>


            </div>
        </div>

    </div>

</body>
</html>