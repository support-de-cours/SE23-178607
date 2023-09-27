<?php 
session_start();
header("content-type: text/plain");
// header("content-type: application/pdf");


echo "\$_SERVER\n";
print_r($_SERVER);
echo "\n\n";

echo "\$_COOKIE\n";
print_r($_COOKIE);
echo "\n\n";

echo "\$_ENV\n";
print_r($_ENV);
echo "\n\n";

echo "\$_REQUEST\n";
print_r($_REQUEST);
echo "\n\n";

echo "\$_POST\n";
print_r($_POST);
echo "\n\n";

echo "\$_GET\n";
print_r($_GET);
echo "\n\n";

echo "\$_FILES\n";
print_r($_FILES);
echo "\n\n";

echo "\$_SESSION\n";
print_r($_SESSION);
echo "\n\n";