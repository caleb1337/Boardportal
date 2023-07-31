<?php
function showAdvertsUser($result){
    foreach ($result as $advert){
         echo "<div class='col d-flex border border-dark my-2 advert' data-id='{$advert["advert_id"]}'><div class='d-flex flex-column col-7'><p class='advert-text-content'>{$advert["advert"]}</p> <p>Время размещения: {$advert["date_stamp"]} 
            <span>Идентификатор объявления: {$advert["advert_id"]}</span></p></div>
             <button class='btn btn-primary mx-2 my-auto redactAdvert' id='redactAdvert' style='max-height: 60px;' data-bs-toggle='modal' data-bs-target='#exampleModal'>Редактировать объявление</button><button class='btn btn-primary mx-2 my-auto' id='deleteAdvert' style='max-height: 60px;'>Удалить объявление</button></div>";
    }
}
?>