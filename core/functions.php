<?php

function dd($arg)
{
    echo '<pre>';
    var_dump($arg);
    echo '</pre>';
    die();
}

function view($name, $variables = [])
{
    extract($variables);
    require 'app/views/' . $name . '.views.php';
}

