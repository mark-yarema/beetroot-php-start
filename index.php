<?php

require  'vendor/autoload.php';
require 'core/bootsrap.php';


require Router::load('routes.php')->direct(Request::uri(), Request::method()) ;

/** @var Task[] $tasks */


