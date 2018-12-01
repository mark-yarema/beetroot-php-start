<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.11.18
 * Time: 19:48
 */


$routes = [
    ''              => 'controlers/index.php',
    'about'         => 'controlers/about.php',
    'about/culture' => 'controlers/abuot-culture.php',
    'contact'       => 'controlers/contact.php'

];

$router->define($routes);