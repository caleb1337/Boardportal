<?php
    require_once $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';
    require_once ROOT_PATH .  "/php/handlers/mailer.php";

    $user = [
        "name" => strtolower(trim($_POST["userName"])) ,
        "surname" =>strtolower(trim($_POST["userSurname"])),
        "email" => strtolower(trim($_POST["userEmail"])),
        "password" => $_POST["userPassword"],
        "role" => 'user',
        "registration_date" => date('Y-m-d H:i:s'),
        "hash_link" => md5(trim($_POST["userName"]).time()),
        "email_confirmed" => 0,
    ];
    require ROOT_PATH . "/php/handlers/validator.php";
    try {
        validator($user);
        ["name" => $username, "surname" => $usersurname, "email" => $useremail,
            "password" => $userpass, "role"=> $userrole, "registration_date" => $registration_date, "hash_link" => $hash_link,
            "email_confirmed" => $email_confirmed] = $user;
        $hashedpass = password_hash($userpass, PASSWORD_BCRYPT);
        sendMail($useremail, $hash_link);
        require_once ROOT_PATH . "/php/model/model-reg.php";
        $redirectLink = ROOT_PATH . '/views/regsuccess.php';
        // http_response_code(200);
        // header('Location:'.$redirectLink);
        
        
    }
    catch(Error $error){ echo "Ошибка! Данные не валидны.", $error->getMessage();
        http_response_code(400);
    };
  
   