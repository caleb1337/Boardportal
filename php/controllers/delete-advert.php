<?php
var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_POST);
session_start();
if(isset($_SESSION['user'])){



    $id = $_POST['id'];

    try{

        require '../model/model-delete-advert.php';
        die();
    }
    catch(Exception $error){
        echo "Ошибка!", $error->getMessage();
    };
}else{
   http_response_code(401);
   die('CODE 401. UNAUTHORIZED!!!');
}