<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.11.18
 * Time: 20:41
 */

namespace Core;

class  Request
{
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}