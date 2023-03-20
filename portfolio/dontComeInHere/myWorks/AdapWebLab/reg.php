<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    ыintegrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="RegAndLog.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="hz"><a href="/"><img class="Logo" src="Logo.png" alt=""></a></div>
    <section class="regLog d-flex justify-content-center">
        <div class="buttons d-flex flex-column">
            <ul class="Errors">
                <?php

                if(array_key_exists('PasswordA_Z', $_SESSION)){
                    if($_SESSION['PasswordA_Z']){
                        echo('<li class="error">'.$_SESSION['PasswordA_Z'].'</li>');
                        unset($_SESSION['PasswordA_Z']);
                    }
                }
                if(array_key_exists('Passworda_z', $_SESSION)){
                    if($_SESSION['Passworda_z']){
                        echo('<li class="error">'.$_SESSION['Passworda_z'].'</li>');
                        unset($_SESSION['Passworda_z']);
                    }
                }
                if(array_key_exists('PasswordNum', $_SESSION)){
                    if($_SESSION['PasswordNum']){
                        echo('<li class="error">'.$_SESSION['PasswordNum'].'</li>');
                        unset($_SESSION['PasswordNum']);
                    }
                }
                if(array_key_exists('Password', $_SESSION)){
                    if($_SESSION['Password']){
                        echo('<li class="error">'.$_SESSION['Password'].'</li>');
                        unset($_SESSION['Password']);
                    }
                }
                if(array_key_exists('Password_proof', $_SESSION)){
                    if($_SESSION['Password_proof']){
                        echo('<li class="error">'.$_SESSION['Password_proof'].'</li>');
                        unset($_SESSION['Password_proof']);
                    }
                }
                if(array_key_exists('sameEmail', $_SESSION)){
                    if($_SESSION['sameEmail']){
                        echo('<li class="error">'.$_SESSION['sameEmail'].'</li>');
                        unset($_SESSION['sameEmail']);
                    }
                }
            ?>
            </ul>
        </div>
        <form class="d-flex flex-column text-center" action="execution.php" method="post">
            <h1 class="">Регистрация аккаунта</h1>
            <div class="d-flex m-auto">
                <p>У вас уже есть аккаунт?</p>
                <a class="ml-2" href="log.php">Войти</a>
            </div>
            <input type="text" name="phoneOrEmail" placeholder="Введите телефон или Email"
            value=<?php if(array_key_exists('handset', $_COOKIE)){ echo("'".$_COOKIE['handset']."'");}?>>
            </div>
            <input type="password" name="Password" placeholder="Введите Пароль"/>
            <input type="Password" name="Password_proof" placeholder="Подтвердите Пароль"/>
            <div class="actions">
                <button type="submit"class="RegAndLog">Регистрация</button>
            </div>
        </form>
    </section>
    <script src="RegAndLog.js"></script>
</body>
</html>