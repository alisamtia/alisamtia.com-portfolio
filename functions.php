<?php

function base_path($name){
    return BASE_PATH . $name;
}


function view($view,$variables=[]){
    extract($variables);
    require base_path("views/{$view}");
}

function abort($code=404){
    view("{$code}.view.php");
    http_response_code($code);
    die();
}

function validate_recaptcha(){
    $token = $_POST['recaptcha_token'];
    $secret = '6Le0IWorAAAAAJuSy2iT6_N7lmgqiFK_NAkrxtlT';

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$token");
    $responseData = json_decode($response);

    if ($responseData->success && $responseData->score > 0.5) {
        return true;
    }else{
        return false;
    }
}

function str_to_time($time){
    $date = new DateTime($time);
    $now = new DateTime();
    $diff = $now->diff($date);

// Build a basic human-readable string
    if ($diff->y > 0) {
        return $diff->y . ' year' . ($diff->y > 1 ? 's' : '') . ' ago';
    } elseif ($diff->m > 0) {
        return $diff->m . ' month' . ($diff->m > 1 ? 's' : '') . ' ago';
    } elseif ($diff->d > 0) {
        return $diff->d . ' day' . ($diff->d > 1 ? 's' : '') . ' ago';
    } elseif ($diff->h > 0) {
        return $diff->h . ' hour' . ($diff->h > 1 ? 's' : '') . ' ago';
    } elseif ($diff->i > 0) {
        return $diff->i . ' minute' . ($diff->i > 1 ? 's' : '') . ' ago';
    } elseif ($diff->s >= 0) {
        return 'just now';
    }
}



function csrf()
{
    if(empty($_SESSION['csrf_token'])){
        $csrf_value = bin2hex(random_bytes(32));
    }else{
        $csrf_value = $_SESSION['csrf_token'];
    }
    $_SESSION['csrf_token_time'] = time();
    $_SESSION['csrf_token'] = $csrf_value;
    echo "<input type='hidden' name='csrf' value='{$csrf_value}' />";
}

function validate_csrf()
{
    $max_token_age = 60 * 10;

    if (
        empty($_POST['csrf']) ||
        empty($_SESSION['csrf_token']) ||
        !hash_equals($_SESSION['csrf_token'], $_POST['csrf']) ||
        (time() - $_SESSION['csrf_token_time'] > $max_token_age)
    ) {
        // Invalid token or expired
        die('CSRF validation failed.');
    }else{
        unset($_SESSION['csrf_token'],$_SESSION['csrf_token_time']);
    }
}