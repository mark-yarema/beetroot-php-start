<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 27.11.18
 * Time: 20:38
 */

require "function.php";

$app = [];
$app['config'] = require 'config.php';


require "database/Connection.php";
require "database/QueryBuilder.php";
require "database/Router.php";
require "core/Request.php";

$config = require 'config.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

//dd($app);

