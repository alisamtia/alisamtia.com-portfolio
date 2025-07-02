<?php
use Core\Database;

session_start();
validate_csrf();

if( isset($_SESSION["logged_in"]) ) {

    $id=intval($_POST["id"]) ? $_POST["id"] : null;
    $db = new Database();

    $db->query("SELECT * FROM submissions where id=:id",[
        "id"=>$id
    ])->fetchOrFail();

    $db->query("DELETE FROM submissions where id=:id",[
        "id"=>$id
    ]);

    $submissions = $db->query("SELECT * FROM submissions")->fetchAll();
    view("admin/index.view.php",["submissions"=>$submissions]);
}else{
    abort(403);
}