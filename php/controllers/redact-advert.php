<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';
if(isset($_SESSION['user'])){

    $id = $_POST['advertId'];
    $text = $_POST['advertText'];

    try{

        require ROOT_PATH . '/php/model/model-redact-advert.php';
        $path = '/boardportal/myadverts';
        die(
           header('Location:'.$path) 
        );
    }
    catch(Error $error){
        echo "Ошибка!", $error->getMessage();
        http_response_code(400);
    };
}else{
   http_response_code(401);
   die('CODE 401. UNAUTHORIZED!!!');
}