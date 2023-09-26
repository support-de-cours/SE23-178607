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
echo "Suite du programme...";