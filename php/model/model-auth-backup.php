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
    $sql = "SELECT * FROM users";
    if($result  = $conn->query($sql)){
        $auth_user = [];
        foreach($result as $row){
            if($row["email"] === $useremail && password_verify($userpassword, $row["password"])) {
//                    var_dump("From DB:".$row["email"]." "."From input:".$useremail);
                $auth_user = $row;


            }
//                 else throw new Exception('Совпадения в БД не найдены');

        }

    }
}
catch(Exception $error){ echo "Ошибка!", $error->getMessage();

}

if($conn->query($sql)){
    // echo 'User'." ".$username." ".$usersurname." ".'is successfully registred!';
}
$conn->close();
