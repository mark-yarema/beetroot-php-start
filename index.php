<?php
require 'core/bootsrap.php';


require Router::load('routes.php')->direct(Request::uri());

/** @var Task[] $tasks */


