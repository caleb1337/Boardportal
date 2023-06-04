<?php
    session_start();
["id" => $userid, "name"=> $username,"surname"=> $usersurname, "email"=> $useremail, "password" => $userpassword, "role" => $userrole]= $_SESSION["user"];

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
<?php echo "Hello {$username} {$usersurname} ! I've saved info about u" ?>

</body>
</html>