<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 27.11.18
 * Time: 20:38
 */

$app = [];
$app['config'] = require 'config.php';

$config = require 'config.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

//dd($app);

