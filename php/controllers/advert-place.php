<?php
session_start();
if(isset($_SESSION['user'])){
    require_once $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';
    require ROOT_PATH . '/php/handlers/validator.php';
    require ROOT_PATH . '/php/handlers/sessiondataparser.php';

    $advert = $_POST['userAdvertText'];

    try{
//    validator($advert);
    require ROOT_PATH . '/php/model/model-place-adv.php';
    header("Location:".'/boardportal/cabinet');
    die();
    }
    catch(Exception $error){
         echo "Ошибка!", $error->getMessage();
    };
}else{
    http_response_code(401);
    die('CODE 401. UNAUTHORIZED!!!');
}