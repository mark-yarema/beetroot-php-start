<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 27.11.18
 * Time: 20:38
 */

App::bind('config', require 'config.php' );

App::bind('database', new QueryBuilder(Connection::make(app::get('config', ['database']))));

//dd($app);

