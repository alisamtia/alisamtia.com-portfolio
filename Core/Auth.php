<?php

namespace Core;

class Auth
{
    public static function authenticate($email,$password){
        $db = new Database();
        $config=require(base_path("config.php"));

        $admin_login=$config['admin_login'];

        if(  strtolower($email) ===  strtolower($admin_login['email'])    &&     password_verify($password,$admin_login['password'])  ){
            return true;
        }
        return false;
    }

    public static function login(){
            session_destroy();

            $session_lifetime = 60 * 60 * 24 * 30; // 30 days

    //            // Session cookie settings
            session_set_cookie_params([
                'lifetime' => $session_lifetime,
    //                'path' => '/',
    //                'domain' => '', // Or your domain like 'example.com'
    //                'secure' => true,
    //                'httponly' => true,
    //                'samesite' => 'Strict'
            ]);



            session_start();


            session_regenerate_id(true);

            $_SESSION['logged_in'] = true;
            $_SESSION['last_activity'] = time();
    }

    public static function logout(){
        $_SESSION = [];
        session_regenerate_id(true);
        session_destroy();
    }

    public static function is_logged_in(){
        return isset($_SESSION['logged_in']);
    }
}