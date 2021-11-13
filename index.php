<?php

///////////////////////////////////////////////////////////
//
//          Router
//
///////////////////////////////////////////////////////////

$files = "views";
$assets = "assets";

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/public/'.$files.'/index.php';
        break;
    case '' :
        require __DIR__ . '/public/'.$files.'/index.php';
        break;
    case '/reset' :
        require __DIR__ . '/public/'.$files.'/passwordrequest.php';
        break;
    case '/login' :
        require __DIR__ . '/public/'.$files.'/login.php';
        break;
    case '/logout' :
        require __DIR__ . '/public/'.$files.'/logout.php';
        break;
    case '/register' :
        require __DIR__ . '/public/'.$files.'/register.php';
        break;
    case '/admin/users' :
        require __DIR__ . '/public/'.$files.'/admin_users.php';
        break;
    case '/styles/css/bootstrap' :
        require __DIR__ . '/public/'.$assets.'/css/bootstrap.min.css';
        break;
    case '/styles/js/bootstrap' :
        require __DIR__ . '/public/'.$assets.'/js/bootstrap.min.js';
        break;
    case '/styles/own/login/css' :
        require __DIR__ . '/public/'.$assets.'/css/login.css';
        break;
    case '/styles/own/login/js' :
        require __DIR__ . '/public/'.$assets.'/js/login.js';
        break;
    case '/private/notify' :
        require __DIR__ . '/private/'.'notify.php';
        break;
    default :
        http_response_code(404);
        require __DIR__ . '/public/'.$files.'/404.php';
        break;
}
