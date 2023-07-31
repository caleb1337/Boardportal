<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';

$result = 0;
try{
  require ROOT_PATH . '/php/model/model-get-all-users-adverts.php';

  //  print_r('<pre>');
  //  var_dump($result);
  //  print_r('</pre>');

}catch(Error $error){
    echo "Ошибка!", $error->getMessage();
    http_response_code(400);
    die();

}