<?php
require 'php/handlers/sessiondataparser.php';
?>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/boardportal">Главная</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $username." ".$usersurname ?>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Мой профиль</a></li>
            <li><a class="dropdown-item" href="#">Мои объявления</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Выйти</a></li>
        </ul>
    </li>
</ul>