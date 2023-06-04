!
<?php
session_start();
//echo "Auth is complete!"." ".session_id();
["id" => $userid, "name"=> $username,"surname"=> $usersurname, "email"=> $useremail, "password" => $userpassword, "role" => $userrole]= $_SESSION["user"];
echo "Hello!".' '.$username.' '.$usersurname;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="block" style="width: 300px; background-color: beige;">
            <ul>
                <h5> <?= "{$username} {$usersurname} Information" ?></h5>
                <li> <?= "User ID: {$userid}"  ?> </li>
                <li> <?= "User Email: {$useremail}"  ?></li>
                <li> <?="User role: {$userrole}"  ?></li>
            </ul>
            <a href="testpage2.php">Click me to refer to another page</a>
        </div>
    </div>

</body>
</html>
