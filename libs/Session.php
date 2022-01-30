<?php

class Session
{
    public function __construct()
    {
        static::start();
    }

    public static function start()
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
    }

    public static function put(string $key, $value)
    {
        static::start();

        $_SESSION[$key] = $value;
    }

    public static function has(string $key, string $type = null)
    {
        static::start();

        $accepted_types = [
            'string',
            'array',
            // 'bool',
            // 'null',
            // 'numeric',
            // 'number',
        ];

        $unseted = '-unset-';
        $value   = static::get($key, $unseted);

        if(!$value || $value === $unseted)
        {
            return false;
        }

        if($value && !$type)
        {
            return true;
        }

        if($value && $type)
        {
            return gettype($value) === $type;
        }

        return false;
    }

    public static function get(string $key, $default = null)
    {
        static::start();

        return $_SESSION[$key] ?? $default;
    }

    public static function getFlash(string $key, $default = null)
    {
        static::start();

        $value = static::get($key, $default);
        unset($_SESSION[$key]);
        return $value ?? $default;
    }

    public static function flash(string $message, string $type = 'info')
    {
        static::start();

        if (!$message)
        {
            return;
        }

        $accepted_types = [
            'error',
            'danger',
            'warning',
            'alert',
            'success',
            'info',
        ];

        $type = $type && in_array($type, $accepted_types) ? $type : 'info';

        $messages = Session::has('messages', 'array') ? $messages = Session::getFlash('messages') : [];
        $messages[] = ['type' => $type,    'message' => $message];

        static::put('messages', $messages);
    }
}