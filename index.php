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
        require __DIR__ . '/'.$files.'/index.php';
        break;
    case '' :
        require __DIR__ . '/'.$files.'/index.php';
        break;
    case '/reset' :
        require __DIR__ . '/'.$files.'/passwordrequest.php';
        break;
    case '/login' :
        require __DIR__ . '/'.$files.'/login.php';
        break;
    case '/admin/users' :
        require __DIR__ . '/'.$files.'/admin_users.php';
        break;
    case '/styles/css/bootstrap' :
        require __DIR__ . '/'.$assets.'/css/bootstrap.min.css';
        break;
    case '/styles/js/bootstrap' :
        require __DIR__ . '/'.$assets.'/js/bootstrap.min.js';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/'.$files.'/404.php';
        break;
}
