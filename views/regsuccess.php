<?php
require 'templates/header.php';
require 'templates/navbar.php';
?>

    <main class="container-main container-xl">
        <?php 
            require 'templates/authmodal.php';
        ?>
        <div class="message-block border text-center">
            <h4>Благодарим за регистрацию!</h4>
            <!-- <p>На ваш email</p> -->
            <p>Для продолжения требуется подтвердить адрес электронной почты</p>
            <p>Проверьте указанный вами адрес электрнной почты</p>
        </div>
    </main>
</div>

<?php
require 'templates/footer.php';
?>
