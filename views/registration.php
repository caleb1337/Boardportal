<DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
    <div class="container-fluid">
        <div class="container-xl">
            <form action="php/controllers/controller-reg.php" method="post" id="reg-form">
                <div class="mb-3 d-flex flex-column">
                    <label for="exampleInputEmail1" class="form-label">Введите ваше имя
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="userName">
                    </label>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="exampleInputEmail1" class="form-label">Введите вашу фамилию
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="userSurname">
                    </label>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="exampleInputEmail1" class="form-label">Введите ваш адрес электронной почты
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="userEmail">
                    </label>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="exampleInputPassword1" class="form-label">Придумайте пароль
                    <input type="password" class="form-control" name="userPassword">
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    </body>
    </html>