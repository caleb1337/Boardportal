<?php
session_start();
require 'templates/header.php';
require 'templates/navbar.php';

["id" => $userid, "name"=> $username,"surname"=> $usersurname, "email"=> $useremail, "password" => $userpassword,
    "role" => $userrole]= $_SESSION["user"];

?>
<main class="container-main">
    <div class="block" style="width: 300px; background-color: beige;">
        <ul>
            <h5> <?= "{$username} {$usersurname} Information" ?></h5>
            <li> <?= "User ID: {$userid}"  ?> </li>
            <li> <?= "User Email: {$useremail}"  ?></li>
            <li> <?= "Role: {$userrole}"  ?></li>
        </ul>

    </div>

</main>
<?php
require 'templates/footer.php';
?>

