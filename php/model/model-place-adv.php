<?php
// Подключение к БД
$servername = "localhost";
$operatorname="root";
$operatorpassword = "";
$dbname = "testDataBase";
// connector for data base

//$_s_useremail = 'admin@example.com';
//$useradvert = 'hi there!';


$conn = new mysqli($servername,$operatorname,$operatorpassword,$dbname);
if($conn->connect_error){
    die("Connetction failed".$conn->connect_error);
}
$sql = "SELECT * FROM users WHERE email = '{$_s_useremail}'";
if($result  = $conn->query($sql)){
    $update = "UPDATE users
    SET advert = '{$useradvert}'
    WHERE email = '{$_s_useremail}'
    ";
    $conn->query($update);
    }

$conn->close();


// UPDATE users SET advert = 'hello there!' WHERE email = 'admin@example.com';
// сделать выборку как в model-auth, после занести с помощью update 
// переменную $advert["userAdvertText"] в столбец advert таблицы user