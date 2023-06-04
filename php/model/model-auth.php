<?php

    $servername = "localhost";
    $operatorname="root";
    $operatorpassword = "";
    $dbname = "testDataBase";

    // connector for data base

    $conn = new mysqli($servername,$operatorname,$operatorpassword,$dbname);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
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
    