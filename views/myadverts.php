<?php
session_start();
if(isset($_SESSION['user'])){
    require 'templates/header.php';
    require 'templates/navbar.php';
    require './php/controllers/get-user-adverts.php';
    ?>
    <div class="container-lg">
        <div class="row">
            <?php
//            print_r('<pre>');
//            var_dump($result);
//            print_r('</pre>');
            foreach($result as $advert){
//                var_dump($advert);
                 echo '<div class="col">'.$advert.'</div>';
            }
//            print_r($result);
            ?>
        </div>

    </div>

    <?php
    require 'templates/footer.php';
}else{
    http_response_code(401);
    die('CODE 401. UNAUTHORIZED!!!');
};
?>