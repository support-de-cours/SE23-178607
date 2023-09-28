<?php 


/**
 * Dump some data
 *
 * @param mixed $data data you want to debug
 * @param boolean $vd var_dum if TRUE, print_r if FALSE
 * @return void
 */
function dump(mixed $data, bool $vd=true): void
{
    echo "<pre>";
    $vd ? var_dump($data) : print_r($data);
    echo "</pre>";
}

function dd(mixed $data, bool $vd=true): void
{
    echo "<pre>";
    $vd ? var_dump($data) : print_r($data);
    echo "</pre>";
    die();
}