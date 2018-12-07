<?php

require  'vendor/autoload.php';
require 'core/bootsrap.php';


Router::load('routes.php')->direct(
    Request::uri(),
    Request::method()
);

/** @var Task[] $tasks */


