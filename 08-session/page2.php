<?php 
require_once "base.php";
dump($_SESSION, false);
?>

<h1>Page 2</h1>
<p><?= $_SESSION['my_var'] ?></p>

<?php 
unset($_SESSION['my_var']);
