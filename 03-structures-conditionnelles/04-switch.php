<?php 


$trafficLight = "orange";

if ($trafficLight === "green") 
{
    echo "On passe...";
}
elseif ($trafficLight === "orange")
{
    echo "On s'arrete !";
}
elseif ($trafficLight === "red")
{
    echo "On stop !!!";
}
else
{
    echo "c'est le bordel !";
}

echo "<hr>";


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