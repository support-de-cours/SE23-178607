<?php 
// https://www.php.net/manual/fr/datetime.format.php

// date_default_timezone_set('Europe/Paris');
date_default_timezone_set('Asia/Tokyo');

// Format Français
// 12h30m20s 26/09/2023
echo date("H\hi\ms\s d/m/Y");
echo "<br>";

// Format anglo saxon
// 2023-26-09 12:30:20 
echo date("Y-m-d H:i:s"); // Format DATETIME en SQL
echo "<br>";
echo date("Y-m-d"); // Format DATE en SQL
echo "<br>";
echo date("H:i:s"); // Format IME en SQL
echo "<br>";

echo "<hr> ";
echo "&copy; ".date("Y")." all right reserved.";