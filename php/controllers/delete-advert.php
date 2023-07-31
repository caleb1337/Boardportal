<?php
// var_dump($_SERVER['REQUEST_METHOD']);
// var_dump($_POST);
require_once $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';
session_start();
if(isset($_SESSION['user'])){



    $id = $_POST['id'];

    try{

        require ROOT_PATH . '/php/model/model-delete-advert.php';
        die();
    }
    catch(Error $error){
        echo "Ошибка!", $error->getMessage();
        http_response_code(400);
    };
}else{
   http_response_code(401);
   die('CODE 401. UNAUTHORIZED!!!');
}