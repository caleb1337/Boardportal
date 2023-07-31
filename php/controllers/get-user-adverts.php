<?php
//session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';
require ROOT_PATH . '/php/handlers/sessiondataparser.php';
$result = 0;
try{
  require ROOT_PATH . '/php/model/model-get-user-adverts.php';

//    print_r('<pre>');
//    var_dump($result);
//    print_r('</pre>');

}catch(Error $error){
    echo "Ошибка!", $error->getMessage();
    http_response_code(400);
    die();

}