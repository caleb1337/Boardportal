<?php
require 'connectDB.php';
$sql = "DELETE FROM adverts WHERE advert_id = '$id'";
if ($mysql_data = $conn->query($sql)) {
    echo 'Advert №'.' '.$id.' '.'was deleted';

}
$conn->close();

