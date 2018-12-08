<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 06.12.18
 * Time: 20:01
 */

namespace Core;

class App
{
    protected static $registry = [];

    public static function bind($key, $value)
    {
        self::$registry[$key] = $value;
    }

    public static function  get($key)
    {
        if (! isset(self::$registry[$key]))
        {
            throw new  Exception("No $key is bound in the containner");
        }

        return self::$registry[$key];
    }
}