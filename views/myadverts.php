<?php
session_start();
if(isset($_SESSION['user'])){
    require 'templates/header.php';
    require 'templates/navbar.php';
    require './php/controllers/get-user-adverts.php';


    ?>
    <div class="container-lg">
        <div class="row flex-column adverts-container">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Редактировать объявление</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="php/controllers/redact-advert.php" method="post">
                            <textarea name="advertText" id="advertArea" cols="90" rows="20"></textarea>
                            <label for="" class='text-secondary'>Идентификатор объявления
                            <input type="text" name="advertId" id="advertId" class='text-secondary border border-0' readonly>
                            </label>
                            <button type="submit" class="btn btn-primary">Редактировать</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        
                    </div>
                    </div>
                </div>
                </div>
            <?php

            foreach ($result as $advert){
                echo "<div class='col d-flex border border-dark my-2 advert' data-id= '{$advert["advert_id"]}'><div class='d-flex flex-column col-7'><p class='advert-text'>{$advert["advert"]}</p> <p>Время размещения: {$advert["date_stamp"]} 
                        <span>Идентификатор объявления: {$advert["advert_id"]}</span></p></div>
                        <button class='btn btn-primary mx-2 my-auto redactAdvert' id='redactAdvert' style='max-height: 60px;' data-bs-toggle='modal' data-bs-target='#exampleModal'>Редактировать объявление</button><button class='btn btn-primary mx-2 my-auto' id='deleteAdvert' style='max-height: 60px;'>Удалить объявление</button></div>";
                }
            ?>

        </div>

    </div>


    <?php

    require 'templates/footer4adverts.php';

}else{
    http_response_code(401);
    die('CODE 401. UNAUTHORIZED!!!. PLEASE LOG IN TO CONTINUE'); 
};
?>