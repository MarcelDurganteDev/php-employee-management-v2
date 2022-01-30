<?php

class UserAuth
{
    protected static function user(string $key = null)
    {
        Session::start();

        $user = Session::has('user', 'array') ? Session::get('user') : null;
        return $key ? ($user[$key] ?? null) : $user;
    }

    public static function authUser(string $key = null)
    {
        if (!static::isAuth()) {
            return [];
        }

        $user = static::user();
        return $key ? ($user[$key] ?? null) : $user;
    }

    public static function isAuth()
    {
        $user = static::user();

        $usersId    = $user['usersId'] ?? null;
        $name       = $user['name'] ?? null;
        $email      = $user['email'] ?? null;

        return ($usersId && is_numeric($usersId) &&
            $name && is_string($name) &&
            $email && filter_var($email, FILTER_VALIDATE_EMAIL)
        );
    }
}
