<?php
require 'connectDB.php';
$sql = "UPDATE adverts SET advert = '$text' WHERE advert_id = '$id' ";
if ($mysql_data = $conn->query($sql)) {
    echo 'Advert №'.' '.$id.' '.'was updated';

}
$conn->close();

