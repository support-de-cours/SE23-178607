<?php 

// $age = 13;

// // if ($age >= 18)
// if (false)
// {
//     echo "Plus que 18ans";
// }


// ------------------------------

// $a = true;
// $arr = [
//     'user' => "John",
//     'age' => 42,
// ];

// // Affiche "John" si $a est vrai et que age et >= 18
// if ($a == true && isset($arr['age']) && $arr['age'] >= 18)
// {
//     echo $arr['user'];
// }

// if ( true && true && true )
// if ( (true && true) && true )
// if ( true && true )
// if ( true )


// ------------------------------

// $A == $B  // Test les valeurs
// $A === $B  // Test les valeurs ET les types

$a = "ABC";

if ($a == true)
{
    echo "test 1 : OK";
    echo "<hr>";
}

if ($a)
{
    echo "test 2 : OK";
    echo "<hr>";
}

if ($a === true)
{
    echo "test 3 : OK";
    echo "<hr>";
}

if ($a == 2)
{
    echo "test 4 : OK";
    echo "<hr>";
}

if ($a === 1)
{
    echo "test 5 : OK";
    echo "<hr>";
}

if ($a = 1)
{
    echo "test 6 : OK";
    echo "<hr>";
}

echo $a;



$user = [
    'name' => "John",
];

// if ($username = $user['name'])
// {
//     echo "Hello $username";
// }

$username = $user['name'];
if ($username)
{
    echo "Hello $username";
}