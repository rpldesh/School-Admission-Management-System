<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/5/2017
 * Time: 11:28 AM
 */
class Session
{
    public static function init() {
        @session_start();
    }

    public static function destroy() {

        session_destroy();
    }

    public static function set($key, $value) {

        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

}