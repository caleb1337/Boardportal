<?php
session_start();
if(isset($_SESSION['user'])){
    require '../handlers/validator.php';
    require '../handlers/sessiondataparser.php';

    $advert = $_POST['userAdvertText'];

    try{
//    validator($advert);
    require '../model/model-place-adv.php';
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