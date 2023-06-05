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
$sql = "SELECT advert FROM users WHERE email = '{$_s_useremail}'";
if($mysql_data = $conn->query($sql)){
    while($row = $mysql_data->fetch_assoc()){
//        var_dump($row);
        $result = $row;
    }
}

