<?php 
session_start();

function base(): string
{
    $script = $_SERVER['SCRIPT_NAME'];
    $script_arr = explode("/", $script);
    // dump($script, false);
    // dump($script_arr, false);
    
    array_pop($script_arr);
    // dump($script_arr, false);
    
    $script = implode("/", $script_arr);
    $script.= "/";
    // dump($script, false);

    return $script;
}

function dump(mixed $data, bool $vd=true): void
{
    echo "<pre>";
    $vd ? var_dump($data) : print_r($data);
    echo "</pre>";
}
?>

<nav>
    <ul>
        <li><a href="<?= base() ?>index.php">index</a></li>
        <li><a href="<?= base() ?>page1.php">page 1</a></li>
        <li><a href="<?= base() ?>page2.php">page 2</a></li>
    </ul>
</nav>