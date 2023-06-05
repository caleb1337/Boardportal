<?php
// Подключение к БД
    $servername = "localhost";
    $operatorname="root";
    $operatorpassword = "";
    $dbname = "testDataBase";
    // connector for data base

    $conn = new mysqli($servername,$operatorname,$operatorpassword,$dbname);
    if($conn->connect_error){
        die("Connetction failed".$conn->connect_error);
    }
    $sql = /** @lang text */
        "INSERT INTO users (name,surname,email,password,role)
            VALUES('$username','$usersurname','$useremail','$hashedpass','$userrole')";

//    if($conn->query($sql)){
//        echo 'User'." ".$username." ".$usersurname." ".'is successfully registered!';
//    }
    $conn->close();