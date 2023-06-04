<?php
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


        default:
            require 'views/404.php';
            break;

    };
}else{
    require 'views/main.php';
};