<?php 

$months = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TP Date Formulaire</h1>

    <div>
        <select name="date[day]" id="day">
            <option value="null">Jour</option>
            <?php for ($i=1; $i<=31; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>

    <div>
        <select name="date[month]" id="month">
            <option value="null">Mois</option>
            <option value="1">janvier</option>
            <option value="2">février</option>
        </select>
    </div>

    <div>
        <select name="date[year]" id="year">
            <option value="null">Années</option>
            <option value="2023">2023</option>
            <option value="1023">1023</option>
        </select>
    </div>
</body>
</html>