<?php

$router->get("/","index.php");
$router->post("/submit-contact","store.php");

// admin panel
$router->get("/login","admin/login.php");
$router->post("/login","admin/login-auth.php");
$router->post("/logout","admin/logout.php");

$router->get("/admin","admin/index.php");
$router->delete("/admin","admin/destroy.php");
$router->get("/admin/submission","admin/show.php");