<?php
session_start();
if(isset($_SESSION['user'])){

    $id = $_POST['advertId'];
    $text = $_POST['advertText'];

    try{

        require '../model/model-redact-advert.php';
        $path = '/boardportal/myadverts';
        die(
           header('Location:'.$path) 
        );
    }
    catch(Exception $error){
        echo "Ошибка!", $error->getMessage();
    };
}else{
   http_response_code(401);
   die('CODE 401. UNAUTHORIZED!!!');
}