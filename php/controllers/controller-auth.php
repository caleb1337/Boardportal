<?php

session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';
    $user = [
        "email" => $_POST["userEmail"],
        "password" => $_POST["userPassword"],
    ];

    require ROOT_PATH . "/php/handlers/validator.php";

    try{
        validator($user);

        $useremail = $user["email"];
        $userpassword = $user["password"];


        require ROOT_PATH . '/php/model/model-auth.php';

        if($auth_user){
            
            $_SESSION["user"] = $auth_user;
            var_dump($auth_user);
            $redirectLink = '/boardportal/cabinet';
            header('Location:'.$redirectLink);
        }
        else throw new Exception('Пользователь не найден в БД. Проверьте правильность написания Email и пароля');
        

    } catch(Error $error){ echo "Ошибка! Данные не валидны.", $error->getMessage();
        http_response_code(400);

    };