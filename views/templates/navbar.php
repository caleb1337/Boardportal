<div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/boardportal">BoardPortal</a>
            <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <?php

                if (isset($_SESSION["user"])) {
                    require 'navbar_auth.php';
                } else {
                    require 'navbar_notauth.php';
                }
                ?>
            </div>
        </div>
    </nav>
</div>
