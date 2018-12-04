<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 01.12.18
 * Time: 18:04
 */

$result = $app['database']->insert('users', ['name' => $_POST['name']]);

if ($result){

}else{

}