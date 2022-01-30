<?php

class Url
{
    /**
     * function asset function
     *
     * @param string $relative_item
     * @return string $url
     */
    public static function asset(string $relative_item = null)
    {
        return self::url($relative_item);
    }

    /**
     * function url function
     *
     * @param string $relative_item
     * @return string $url
     */
    public static function url(string $relative_item = null)
    {
        return self::getBaseHost() . self::getBasePath() . $relative_item;
    }

    /**
     * function getBaseHost function
     *
     * @param string $relative_item
     * @return string $url
     */
    public static function getBaseHost()
    {
        $base_protocol = $_SERVER['PROTOCOL'] ?? $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? null;

        if (!($_SERVER['SERVER_NAME'] ?? null) && self::appHostBase()) {
            return self::appHostBase();
        }

        $protocol = $base_protocol == 'https' ? 'https' : 'http';

        $base = $protocol . '://' . $_SERVER['SERVER_NAME'];

        if ($_SERVER['SERVER_PORT'] != 80) {
            $base .= ':' . $_SERVER['SERVER_PORT'];
        }

        return $base;
    }

    /**
     * function appHostBase function
     *
     * @param string $relative_item
     * @return string $url
     */
    public static function appHostBase()
    {
        $env_base_host = getenv('APP_HOST_BASE');

        if ($env_base_host && filter_var($env_base_host, FILTER_VALIDATE_URL)) {
            return $env_base_host;
        }

        if (defined('APP_HOST_BASE') && filter_var(APP_HOST_BASE, FILTER_VALIDATE_URL)) {
            return APP_HOST_BASE;
        }

        return null;
    }

    /**
     * function getBasePath
     * @return string
     */
    public static function getBasePath()
    {
        if (!($_SERVER['SCRIPT_NAME'] ?? null)) {
            return null;
        }

        return pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME);
    }
}
