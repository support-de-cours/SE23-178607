<?php 
$trafficLight = "orange";


switch ($trafficLight)
{
    case 'green':
        echo "On passe...";
    break;

    case 'orange':
        echo "On s'arrete !";
    break;

    case 'red':
        echo "On stop !!!";
    break;

    default:
        echo "c'est le bordel !";
}



echo "<hr>";
echo "Suite du programme...";




$value = match($trafficLight) 
{
    'green'  => "On passe...",
    'orange' => "On s'arrete !",
    'red'    => "On stop !!!",
    default  => "c'est le bordel !",
};

echo "<hr>";
echo "Suite du programme...";
echo "<hr>";
echo "Suite du programme...";
echo "<hr>";
echo "Suite du programme...";
echo "<hr>";
echo "Suite du programme...";
echo "<hr>";
echo "Suite du programme...";
echo "<hr>";
echo "Suite du programme...";

echo "<hr>";
echo $value;