<?php
use Core\Auth;
session_start();

if( Auth::is_logged_in() ) {
    header("location: /admin");
    exit();
}
view("admin/login.view.php");