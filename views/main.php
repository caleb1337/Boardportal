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
        foreach ($result as $adverts) {
            echo "<div class='col-12 d-flex flex-column border border-dark my-2 advert align-items-center' data-id= '{$adverts["advert_id"]}'>
            <div class='d-flex flex-column col-7'><p class='advert-text'>{$adverts["advert"]}</p> <p>Время размещения: {$adverts["date_stamp"]} 
            <span>Идентификатор объявления: {$adverts["advert_id"]}</span></p></div><p>Объявлние разместил: <span>{$adverts["name"]} {$adverts["surname"]}</span></p></div>";
            
        }
    ?>
   

</main>

<?php
require 'templates/footer.php';
?>
