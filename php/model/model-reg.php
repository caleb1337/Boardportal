<?php
require 'connectDB.php';

    $sql = /** @lang text */
        "INSERT INTO users (name,surname,email,password,role)
            VALUES('$username','$usersurname','$useremail','$hashedpass','$userrole')";

    if($conn->query($sql)){
        echo 'User'." ".$username." ".$usersurname." ".'is successfully registered!';
    }
    $conn->close();