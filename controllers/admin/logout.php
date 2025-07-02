<?php
use Core\Auth;

session_start();
validate_csrf();
if(Auth::is_logged_in())
{
    Auth::logout();
    header("location: /");
    exit();
}else{
    abort(403);
}