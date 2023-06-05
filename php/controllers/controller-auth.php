<?php

session_start();
    $user = [
        "email" => $_POST["userEmail"],
        "password" => $_POST["userPassword"],
    ];

    include "../handlers/validator.php";

    try{
        validator($user);

        $useremail = $user["email"];
        $userpassword = $user["password"];


        include '../model/model-auth.php';

        if($auth_user){
            
            $_SESSION["user"] = $auth_user;
            var_dump($auth_user);
            $redirectLink = '/boardportal/cabinet';
            header('Location:'.$redirectLink);
        }
        else throw new Exception('Пользователь не найден в БД. Проверьте правильность написания Email и пароля');
        

    } catch(Exception $error){ echo "Ошибка! Данные не валидны.", $error->getMessage();

    };