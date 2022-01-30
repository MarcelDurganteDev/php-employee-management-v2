<?php

class Helpers
{
    /**
     * function dump
     *
     * @param ...$params
     * @return
     */
    public static function dump(...$params)
    {
        echo "<pre>";
        return var_dump(...$params);
        echo "</pre>";
    }

    /**
     * function dd
     *
     * @param ...$params
     * @return
     */
    public static function dd(...$params)
    {
        die(static::dump(...$params));
    }
}