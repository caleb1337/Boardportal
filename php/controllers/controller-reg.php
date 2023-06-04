<?php

    $user = [
        "name" => $_POST["userName"] ,
        "surname" => $_POST["userSurname"],
        "email" => $_POST["userEmail"],
        "password" => $_POST["userPassword"],
        "role" => 'user',
    ];
    include "../handlers/validator.php";
    try {
        validator($user);
        ["name" => $username, "surname" => $usersurname, "email" => $useremail, "password" =>$userpass, "role"=>$userrole] = $user;
        $hashedpass = password_hash($userpass, PASSWORD_BCRYPT);
        include "../model/model-reg.php";
        $redirectLink = '../../regsuccess.php';
//        header('Location:'.$redirectLink);
    }
    catch(Exception $error){ echo "Ошибка! Данные не валидны.", $error->getMessage();

    };
  
   