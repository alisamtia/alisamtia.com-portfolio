<?php
use Core\Database;


session_start();

if( isset($_SESSION["logged_in"]) ) {

    $db = new Database();
    $submission = $db->query("SELECT * FROM submissions where id=:id",[
        "id" => $_GET["id"]
    ])->fetchOrFail();

    view("admin/show.view.php", ["submission"=>$submission]);

}else{
    abort(403);
}