<?php
require_once "base.php";

$myVar = "My Data";
$_SESSION['my_var'] = $myVar;
dump($_SESSION, false);
?>

<h1>Index</h1>
<p><?= $_SESSION['my_var'] ?></p>