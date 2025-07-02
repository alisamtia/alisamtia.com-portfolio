<?php

use Core\Database;
use Core\Validator;

$errors = [];
$response = [];
// check for bots
if (!validate_recaptcha()) {
    $errors['robot'] = "Your human identity could not be verified";
}



extract(Validator::limit_requests($errors));

// authorize the form
$name = $_POST['name'] ?? "";
$email = $_POST['email'] ?? "";
$msg = $_POST['message'] ?? "";

if (!Validator::string($name, 1, 100)) {
    $errors["name"] = "A name is Required!";
}

if (!Validator::email($email)) {
    $errors["email"] = "A valid Email is Required!";
}

if (!Validator::string($msg, 20, 1000)) {
    $errors["msg"] = "Message of less than 1,000 Characters and more than 20 Characters is required!";
}

if (empty($errors)) {
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: Ali Samtia <alisamtia1@gmail.com>\r\n";

    $mailmsg = "New Message from Alisamtia.com\n\n";
    $mailmsg .= "Name: " . htmlspecialchars($name) . "\n";
    $mailmsg .= "Email: " . htmlspecialchars($email) . "\n\n";
    $mailmsg .= "Description:\n" . htmlspecialchars($msg) . "\n";


    if (mail("alisamtia1@gmail.com", "New Message from Alisamtia.com - From $name", $mailmsg, $headers)) {
        // process the form and save it to the database
        $ip=$_SERVER['REMOTE_ADDR'];
        $db = new Database();
        $submission = $db->query("INSERT INTO submissions (name, email, message,ip) VALUES (:name,:email,:message,:ip)", [
            "name" => $name,
            "email" => $email,
            "message" => $msg,
            "ip" => $ip
        ]);
        $_SESSION['last_form_submit'][$ip] = $now;
    } else {
        $errors["emailnotsend"] = "Error While sending Email!";
        $response['errors'] = $errors;
    }
}else{
    $response['errors'] = $errors;
}

$response = json_encode($response);
echo $response;
die();