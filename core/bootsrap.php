<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 27.11.18
 * Time: 20:38
 */

use Core\App;
use Core\Database\QueryBuilder;
use Core\Database\Connection;

App::bind('config', require 'app/config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
//dd($app);

