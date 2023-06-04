<div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Навбар</a>
            <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <?php

                $not_auth = '<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/boardportal">Главная</a>
    </li>
    <li class="nav-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <p class="nav-link" >Вход / Регистрация</p>
    </li>
</ul>';
                $auth = '<ul class="navbar-nav">
  <li class="nav-item">
   <a class="nav-link active" aria-current="page" href="/boardportal">Главная</a>
  </li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Имя Фамилия
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Мой профиль</a></li>
        <li><a class="dropdown-item" href="#">Мои объявления</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Выйти</a></li>
    </ul>
</li>
 </ul>';

                if (isset($_SESSION["user"])) {
                    echo $auth;
                } else {
                    echo $not_auth;
                }
                ?>
            </div>
        </div>
    </nav>
</div>
