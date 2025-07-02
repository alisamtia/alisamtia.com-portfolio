<?php

use Core\Validator;
use Core\Auth;

$errors = [];
$response = [];
// check for bots
if (!validate_recaptcha()) {
    $errors['robot'] = "Your human identity could not be verified";
}

extract(Validator::limit_requests($errors));

// authorize the form
$email = $_POST['email'] ?? "";
$password = $_POST['password'] ?? "";

if (!Validator::email($email)) {
    $errors["email"] = "Enter a Valid email address!";
}

if(!Validator::string($email,8,224)) {
    $errors["password"] = "Please enter a valid Password!";
}

if(Auth::Authenticate($email,$password)){
    $response["success"] = true;
    Auth::Login();
}else{
    $errors["password"] = "Invalid Email or Password!";
}

if(!empty($errors)) {
    $response["errors"] = $errors;
}


$response = json_encode($response);
echo $response;
die();