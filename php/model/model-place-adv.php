<?php
require 'connectDB.php';

$sql = "INSERT INTO adverts (user_id, advert, date_stamp) VALUES ('$_s_userid','$advert', CURRENT_TIMESTAMP)  ";
if($result  = $conn->query($sql)){
        echo 'Advert insert successfully';
    }

$conn->close();


