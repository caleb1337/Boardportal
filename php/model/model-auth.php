<?php

    require 'connectDB.php';
    try{
        $sql = "SELECT * FROM users WHERE email = '$useremail'";
        if($result  = $conn->query($sql)){
        $auth_user = [];
            foreach($result as $row){
                if(password_verify($userpassword, $row["password"])) {
                    $auth_user = $row;
                }
            }
        }
    }
    catch(Exception $error){ echo "Ошибка!", $error->getMessage();
    
    }

    if($conn->query($sql)){
        // echo 'User'." ".$username." ".$usersurname." ".'is successfully registred!';
    }
    $conn->close();
    