<?php
$servername = "localhost";
$operatorname="root";
$operatorpassword = "";
$dbname = "boardportal";

// connector for data base

$conn = new mysqli($servername,$operatorname,$operatorpassword,$dbname);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}