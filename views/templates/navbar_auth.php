<?php
require 'php/handlers/sessiondataparser.php';
?>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="placeadvert">Разместить объявление</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/boardportal">Главная</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_s_username." ".$_s_usersurname ?>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cabinet">Мой профиль</a></li>
            <li><a class="dropdown-item" href="/boardportal/myadverts">Мои объявления</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="php/controllers/logout.php">Выйти</a></li>
        </ul>
    </li>
</ul>