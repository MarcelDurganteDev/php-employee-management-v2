<?php
require_once __DIR__."/../libs/Url.php";
require_once __DIR__."/../libs/Helpers.php";

if(!function_exists('dd'))
{
    function dd(...$params)
    {
        Helpers::dd(...$params);
    }
}

if(!function_exists('dump'))
{
    function dump(...$params)
    {
        Helpers::dump(...$params);
    }
}

if(!function_exists('config'))
{
    function config(string $config_key, $default = null)
    {
        $config = require __DIR__."/../config/config.php";

        return$config[$config_key] ?? $default;
    }
}

