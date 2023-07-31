<?php
// session_start();
if(isset($_GET['route']))
{
    $route = $_GET['route'];

    switch ($route) {
        case '':
            require 'views/main.php';
            break;
         
        case 'registration':
            require 'views/registration.php';
            break;

        case 'cabinet':
            require 'views/cabinet.php';
            break;

        case 'placeadvert':
            require 'views/placeadvert.php';
            break;

        case 'myadverts':
            require 'views/myadverts.php';
            break;

        case 'regsuccess':
            require 'views/regsuccess.php';
            break;    

        default:
            require 'views/404.php';
            break;

    };
}else{
    require 'views/main.php';
};