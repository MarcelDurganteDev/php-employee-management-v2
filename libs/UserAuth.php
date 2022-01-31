<?php

class UserAuth
{
    protected static function user(string $key = null)
    {
        Session::start();

        $user = Session::has('user', 'array') ? Session::get('user') : null;
        return $key ? ($user[$key] ?? null) : $user;
    }

    // if want to return else where user logged, only call UserAuth::authUser - if param return user key, otherwise return logged
    public static function authUser(string $key = null)
    {
        if (!static::isAuth()) {

            // return [] did not worked here
            return null;
        }
dd([__FILE__.':'.__LINE__]);
        $user = static::user();
        return $key ? ($user[$key] ?? null) : $user;
    }
// validate if user is logged or not - returns boolean 
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
