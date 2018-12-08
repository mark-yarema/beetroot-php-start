<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 07.12.18
 * Time: 20:58
 */

namespace App\Controlers;

use Core\App;

class UsersController
{
    public function Index()
    {
        $users = App::get('database')->sellctAll('users', 'User');

        view('Index');
    }

    public function store()
    {
        App::get('database')->insert('users', ['name' => $_POST['name']]);




    }
}
