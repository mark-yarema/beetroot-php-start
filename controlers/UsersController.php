<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 07.12.18
 * Time: 20:58
 */

class UsersController
{
    public function Index()
    {
        $users = App::get('database')->sellctAll('users', 'User');

        require 'views/index.s.php';
    }
}