<?php

require 'User.php';

$users = $app['database']->selectAll('users', 'User');
/** @var Task[] $tasks */
require 'views/index.s.php';
