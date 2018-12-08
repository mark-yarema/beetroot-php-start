<?php

use Core\Router;
use Core\Request;

require  'vendor/autoload.php';
require 'core/bootsrap.php';


Router::load('app/routes.php')->direct(
    Request::uri(),
    Request::method()
);

/** @var Task[] $tasks */


