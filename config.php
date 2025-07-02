<?php

return [
    'database_connection' => [
        "host"=>"localhost",
        "dbname"=>"portfolio",
        "username" => "root",
        "password" => ""
    ],
    'admin_login' => [
        "email" => "alisamtia1@gmail.com",
        "password" => password_hash("Sahb@679", PASSWORD_DEFAULT),
    ]
];