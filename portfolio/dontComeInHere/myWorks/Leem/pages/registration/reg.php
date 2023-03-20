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
    <form class="d-flex flex-column justify-content-around text-center" action="execution.php" method="post">
        <h2 class="">Форма регистрации</h2>
        <label class="">ФИО</label>
        <input type="text" name="full_name" placeholder="напиши своё ФИО">
        <label class="">Логин</label>
        <input type="text" name="login" placeholder="придумай логин">
        <label class="">Почта</label>
        <input type="Email" name="email" placeholder="Введите почту">
        <label class="" for="Password">Пароль</label>
        <input type="password" name="Password" placeholder="Введите Пароль"/>
            <?php
                if(isset($_SESSION['message'])) {
                    echo '<p class=message>'. $_SESSION['message'] .'</p>';
                }
            ?>
        <label for="Password">подтверждение пароля</label>
        <input type="Password" name="Password_proof" placeholder="подтвердите Пароль"/>
            <?php
                if(isset($_SESSION['message'])) {
                    echo '<p class=message>'. $_SESSION['message'] .' </p>';
                }
                unset($_SESSION['message']);
            ?>
        <div class="actions">
            <button type="submit"class="button">Регистрация</button>
            <a href="log.php">войти</a>
            </div>
    </form>
    <style>
    input{
        width: 80%;
        padding: 3%;
        border-radius: 20%/30%;
        margin: 0.5% auto;
    }
    </style>
</body>
</html>