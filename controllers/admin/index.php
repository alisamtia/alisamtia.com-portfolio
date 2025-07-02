<?php
use Core\Database;
use Core\Auth;

session_start();

if( Auth::is_logged_in() ) {

    $db = new Database();
    $submissions = $db->query("SELECT * FROM submissions")->fetchAll();

    view("admin/index.view.php",["submissions"=>$submissions]);
}else{
    abort(403);
}