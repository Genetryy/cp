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
    case '/styles/login' :
        require __DIR__ . '/'.$files.'/css/login.css';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/'.$files.'/404.php';
        break;
}
