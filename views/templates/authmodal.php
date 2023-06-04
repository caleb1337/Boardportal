<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Вход</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="php/controllers/controller-auth.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Введите ваш эмейл</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="userEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Введите ваш пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="userPassword">
                </div>

                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
        <div class="modal-footer">
            <p>Нет аккаунта? <a class="btn btn-primary" href="registration">Зарегестрироваться
                </a></p>
        </div>
    </div>
</div>
</div>