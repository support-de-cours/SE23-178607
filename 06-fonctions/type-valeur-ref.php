<?php 

/**
 * This is my awesome function
 *
 * @param string $a
 * @param integer $b
 * @param array|string|bool|null $c
 * @return string some magic
 */
function myAwesomeFunc( string $a, int $b=0, ?string $c=null, ): string
{
    return "$a - $b - $c";
}

echo myAwesomeFunc("Hello", 42, "azert");
echo "<br>";
echo myAwesomeFunc("Hello", 21);
echo "<br>";
echo myAwesomeFunc("Hello");
echo "<br>";
echo myAwesomeFunc("Hello", 0, "truc");


echo "<br>";
echo "<br>";
function setUser(string $firstname, int $age=18, string $lastname="DOE")
{
    return "hello $firstname $lastname";
}


echo setUser("Tony");

$lname = "Starck";
echo "<br>";

echo setUser(
    firstname: "Tony", 
    lastname: $lname, // DOE
);


echo "<hr>\n";









$fruits = [
    'Pomme',
    'Poire',
    'Banane',
];


function api_response(array $data = []): bool|array
{
    // Check data
    if (empty($data))
    {
        return false;
    }

    // Response code
    $code = 200;

    // Response message 
    $message = "OK";

    return [
        'code' => $code,
        'message' => $message,
        'results' => $data,
    ];
}

print_r( api_response($fruits) );
// var_dump( api_response() );