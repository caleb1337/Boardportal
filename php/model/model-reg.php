<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';
require ROOT_PATH . '/php/model/connectDB.php';

    $sql = /** @lang text */
        "INSERT INTO users (name,surname,email,password,role,registration_date,hash_link,email_confirmed)
            VALUES('$username','$usersurname','$useremail','$hashedpass','$userrole','$registration_date','$hash_link','$email_confirmed')";

    if($conn->query($sql)){
        echo 'User'." ".$username." ".$usersurname." ".'is successfully registered!';
    }
    $conn->close();