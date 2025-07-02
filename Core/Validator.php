<?php

namespace Core;

class Validator
{
    public static function string($string, $min = 1, $max = INF)
    {
        $value = trim($string);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) && self::string($email, 5, 100);
    }

    public static function limit_requests($errors)
    {
        session_start();

        $ip = $_SERVER['REMOTE_ADDR'];
        $now = time();

        $lastTime = $_SESSION['last_form_submit'][$ip] ?? 0;

        if (($now - $lastTime) < 30) {
            $errors['rate'] = 'Too many requests. Please wait a few seconds before trying again.';
        }

        return [
            "errors" => $errors,
            "ip" => $ip,
            "now" => $now,
        ];
    }
}