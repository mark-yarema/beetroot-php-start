<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 06.12.18
 * Time: 20:25
 */

class PagesController
{
    public function index()
    {
    $users = App::get('database')->selectAll('users', 'User');

    require 'views/index.s.php';
    }
    public function contact()
    {
        require 'views/contact.views.php';
    }
    public function about()
    {
        require 'views/about.s.php';
    }
}