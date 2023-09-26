<?php 

// Chaine de caractères
// --

echo "Hello world<br>";
echo 'Hello world<br>';

$name = "John";
echo "Hello $name<br>";
echo 'Hello $name<br>';

echo "Aujourd'hui<br>";
echo 'Aujourd\'hui<br>';

$user = [
    'name' => "John",
    'age' => 42,
];

echo "l'utilisateur \"John\" est connecté<br>";
echo 'l\'utilisateur "John" est connecté<br>';


// Tableaux
// -- 

$my_arr_old = array();
$my_arr_new = [];

// Tableau Numerique / Collection
$arr_1 = [
    "Line 1", // 0
    "Line 2", // 1
    "Line 3", // 2
];
print_r($arr_1);
echo '<br>';

echo $arr_1[2];
echo '<hr>';


// Tableau Associatif / Dictionnaire
$arr_2 = [
    'term1' => "value 1",
    'term2' => "value 2",
    'term3' => "value 3",
];
print_r($arr_2);
echo '<br>';

echo $arr_2['term3'];
echo '<hr>';
echo "\n\n";

// tableau multidimentionnel
$arr_3 = [
    'col_A' => [
        "A1",
        "A2",
        "A3",
    ],
    'col_B' => [
        "B1",
        "B2",
        "B3",
    ],
];

print_r($arr_3);
echo "\n\n";

?>


<hr>
<hr>
<h2>Tableau HTML</h2>
<table>
    <thead>
        <tr>
            <th>col_A</th>
            <th>col_B</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>A1</td>
            <td>B1</td>
        </tr>
        <tr>
            <td>A2</td>
            <td>B2</td>
        </tr>
        <tr>
            <td>A3</td>
            <td>B3</td>
        </tr>
    </tbody>
</table>


<h2>Tableau PHP</h2>

<table>
    <thead>
        <tr>
        <?php foreach($arr_3 as $key => $value): ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
    <?php foreach($arr_3 as $key => $data): ?>
        <tr>
        <?php foreach($data as $value): ?>
            <td><?= $value ?></td>
        <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<hr>
<hr>
<?php
echo "\n\n<hr>";




// Objet // Collection avec actions
// --

$obj = new stdClass;
$obj->property_1 = "value 1";
$obj->property_2 = "value 2";
$obj->property_3 = "value 3";

print_r($obj);
echo '<br>';

echo $obj->property_2;
echo '<hr>';