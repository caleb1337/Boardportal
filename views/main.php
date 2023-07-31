<?php
session_start();
require 'templates/header.php';
require 'templates/navbar.php';
require './php/controllers/get-all-adverts.php';
?>

<!-- ЗАПРОС В БД ПО СВЯЗАННЫМ ТАБЛИЦАМ ОБЪЯВЛЕНИЕ + USER ID + имя и фамилию с таблицы users -->
<main class="container-main">
    <?php require 'templates/authmodal.php';
    ?>
    <?php 
        require './php/handlers/show_adverts_main_page.php';
        showAdvertsMainPage($result);
        
    ?>
   
   

</main>

<?php
require 'templates/footer.php';
?>
