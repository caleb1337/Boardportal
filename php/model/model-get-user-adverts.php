<?php
require 'php/model/connectDB.php';

$sql = "SELECT advert, date_stamp, advert_id FROM adverts WHERE user_id = '{$_s_userid}'";
if($mysql_data = $conn->query($sql)){
//    var_dump($mysql_data);
    $result = [];
    while($row = $mysql_data->fetch_assoc()){
//            print_r('<pre>');
//                 var_dump($row);
//            print_r('<pre>');
        array_push($result, $row);
    }
}
$conn->close();

