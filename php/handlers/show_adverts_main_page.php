<?php 
    function showAdvertsMainPage($result){
        foreach ($result as $adverts) {
            echo "<div class='col-12 d-flex flex-column border border-dark my-2 advert align-items-center' data-id= '{$adverts["advert_id"]}'>
            <div class='d-flex flex-column col-7'><p class='advert-text-content'>{$adverts["advert"]}</p> <p>Время размещения: {$adverts["date_stamp"]} 
            <span>Идентификатор объявления: {$adverts["advert_id"]}</span></p></div><p>Объявлние разместил: <span>{$adverts["name"]} {$adverts["surname"]}</span></p></div>";
            
        }
    }
?>