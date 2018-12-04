<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.11.18
 * Time: 19:48
 */


$router->get('', 'controlers/index.php');
$router->get('about/culture', 'controlers/abuot-culture.php');
$router->get('contact', 'controlers/contact.php');
$router->get('contact', 'controlers/contact.php');
$router->get('ask-name',  'controlers/ask-name.php');

$router->post('save-name', 'controlers/save-name.php');