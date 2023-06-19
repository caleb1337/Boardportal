<?php

    $user = [
        "name" => strtolower(trim($_POST["userName"])) ,
        "surname" =>strtolower(trim($_POST["userSurname"])),
        "email" => strtolower(trim($_POST["userEmail"])),
        "password" => $_POST["userPassword"],
        "role" => 'user',
    ];
    include "../handlers/validator.php";
    try {
        validator($user);
        ["name" => $username, "surname" => $usersurname, "email" => $useremail,
            "password" => $userpass, "role"=> $userrole] = $user;
        $hashedpass = password_hash($userpass, PASSWORD_BCRYPT);
        require_once "../model/model-reg.php";
        $redirectLink = '../../views/regsuccess.php';
        header('Location:'.$redirectLink);
    }
    catch(Exception $error){ echo "Ошибка! Данные не валидны.", $error->getMessage();

    };
  
   