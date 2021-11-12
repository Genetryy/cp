<?php

///////////////////////////////////////////////////////////
//
//          Router
//
///////////////////////////////////////////////////////////

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/reset' :
        require __DIR__ . '/views/passwordrequest.php';
        break;
    case '/login' :
        require __DIR__ . '/views/login.php';
        break;
    case '/styles/login' :
        require __DIR__ . '/assets/css/login.css';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
