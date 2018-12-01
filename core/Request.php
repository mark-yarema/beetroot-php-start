<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.11.18
 * Time: 20:41
 */
class  Request
{
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}