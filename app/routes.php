<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.11.18
 * Time: 19:48
 */


$router->get('','PagesController@index');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');

$router->get('users', 'PagesController@users');

$router->post('users','UsersController@store');
//$router->get('ask-name',  'controlers/ask-name.php');
//
//$router->post('save-name', 'controlers/save-name.php');