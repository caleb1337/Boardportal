<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';
require ROOT_PATH . '/php/model/connectDB.php';
$sql = "UPDATE adverts SET advert = '$text' WHERE advert_id = '$id' ";
if ($mysql_data = $conn->query($sql)) {
    echo 'Advert №'.' '.$id.' '.'was updated';

}
$conn->close();

