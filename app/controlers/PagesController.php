<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 06.12.18
 * Time: 20:25
 */

namespace App\Controllers;

use Core\App;


class PagesController
{
    public function index()
    {
    $users = App::get('database')->selectAll('users', 'User');

    view('index', ['users' => $users] );
    }
    public function contact()
    {
        view('contact');
    }
    public function about()
    {
        view('about');
    }

    public function ask(){
        view('ask');
    }
}