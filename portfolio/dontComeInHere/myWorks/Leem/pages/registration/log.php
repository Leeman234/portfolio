<?php
    session_start();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="reg.css">
        <title>Document</title>
    </head>
    <body>
    <main class="d-flex flex-column">
            <?php
                if(isset($_SESSION['reg'])) {
                    echo '<h4>'. $_SESSION['reg'] .' </h4>';
                }
                    unset($_SESSION['reg']);
                if(isset($_SESSION['Error'])){
                    echo '<p class="message">'. $_SESSION['Error'] .'</p>';
                }
                    unset($_SESSION['Error']);
            ?>
            <form class="d-flex flex-column justify-content-center text-center m-auto"action="authentication.php" method="post">
                <h2>Форма авторизации</h2>
                <label>Логин</label>
                <input type="login" name="login" placeholder="Введите логин">
                <label class="" for="Password">Пароль</label>
                <input type="Password" name="Password" placeholder="Введите Пароль"/>
                <div class="actions">
                    <button type="submit" class='button'>Войти</button>
                    <a href="reg.php">Регистрация</a>
                </div>
            </form>
            </div>
        </div>
    </main>
    </body>
    </html>