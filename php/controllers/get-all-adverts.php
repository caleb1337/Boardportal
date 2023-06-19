<?php


$result = 0;
try{
  require './php/model/model-get-all-users-adverts.php';

  //  print_r('<pre>');
  //  var_dump($result);
  //  print_r('</pre>');

}catch(Exception $error){
    echo "Ошибка!", $error->getMessage();
    die();

}