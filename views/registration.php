<?php

require 'templates/header.php';
require 'templates/navbar.php';
?>

    <div class="container-fluid">
        <div class="container-xl">

            <?php 
                require 'templates/authmodal.php';
            ?>
            <div class="alert alert-danger d-none" id="error-message" role="alert">
                Упс...Что-то пошло не так. Проверьте еще раз заполнение данных. Или попробуйте позже. Код ошибки: <span id="errorOutput"></span>
            </div>
            <form action="php/controllers/controller-reg.php" method="post" id="reg-form">
                <div class="mb-3 d-flex flex-column">
                    <label class="form-label"><span class="text-danger">*&nbsp</span>Введите ваше имя
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="userName" required>
                    </label>
                    <div id="emailHelp" class="form-text">Мы никогда не передадим ваши данные третьим лицам</div>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label class="form-label"><span class="text-danger">*&nbsp</span>Введите вашу фамилию
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="userSurname" required>
                    </label>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label class="form-label"><span class="text-danger">*&nbsp</span>Введите ваш адрес электронной почты
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="userEmail" required>
                    </label>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label class="form-label"><span class="text-danger">*&nbsp</span>Придумайте пароль
                    <input type="password" class="form-control" name="userPassword" id="userPassword" required>
                    <p class='text-danger d-none' id="warning-message">Пароли не совпадают! Попробуйте еще раз.</p>
                    </label>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label class="form-label">Повторите пароль
                    <input type="password" class="form-control" id="userPasswordConf">
                    </label>
                </div>
                <div class="mb-3 d-flex flex-column d-none" id="captcha-block">
                    <label class="form-label">Введите цифры из поля
                    <input type="text" class="bg-light" id="captcha" readonly>
                    <input type="text" class="form-control mt-2" id="captchaInput">
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        </div>
    </div>
<script src="./js/reg_form_password_confirmation.js"></script>

<?php
require 'templates/footer.php';
?>