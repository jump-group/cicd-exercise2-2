<?php
// File: server.php

$path = $_SERVER["REQUEST_URI"];
$extension = pathinfo($path, PATHINFO_EXTENSION);

switch ($path) {
    case '/':
        header('Content-Type: text/html');
        readfile('index.php');
        break;
    case '/assets/css/style.css':
        header('Content-Type: text/css');
        readfile('public/css/style.css');
        break;
    case '/assets/images/logo.svg':
        header('Content-Type: image/svg+xml');
        readfile('public/images/logo.svg');
        break;
    default:
        header('Content-Type: text/html');
        readfile('index.php');
        break;
    // Add more cases for different file types if necessary
    // For instance, for JavaScript files:
    // case '/assets/script.js':
    //     header('Content-Type: application/javascript');
    //     readfile('assets/script.js');
    //     break;
}