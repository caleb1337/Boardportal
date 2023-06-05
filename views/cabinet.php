<?php
session_start();
if(isset($_SESSION['user'])){
require 'templates/header.php';
require 'templates/navbar.php';


include 'templates/cabinet-main.php';


require 'templates/footer.php';
}else{
   http_response_code(401);
   die('CODE 401. UNAUTHORIZED!!!'); 
};
?>

