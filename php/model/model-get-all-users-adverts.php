<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';
require ROOT_PATH . '/php/model/connectDB.php';

$sql = "SELECT name,surname,date_stamp,advert,advert_id  FROM adverts,users WHERE users.id = adverts.user_id";
if($mysql_data = $conn->query($sql)){

    $result = [];
    while($row = $mysql_data->fetch_assoc()){
        //    print_r('<pre>');
        //         var_dump($row);
        //    print_r('<pre>');
        array_push($result, $row);
    }
            
}
$conn->close();

// SELECT name,surname,date_stamp,advert  FROM adverts,users WHERE users.id = adverts.user_id;