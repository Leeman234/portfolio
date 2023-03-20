<?php
    session_start();
    require_once 'connect.php';
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
    <title>Document</title>
</head>
<body>
    <div class="hz"><a href="/"><img class="Logo" src="Logo.png" alt=""></a></div>
    <section class="regLog d-flex">
        <div class="buttons d-flex flex-column">
            <ul class="regGugs">
                <?php
                    if(array_key_exists('reg', $_SESSION)){
                            echo('<li class="regGud">'.$_SESSION['reg'].'</li>');
                            unset($_SESSION['reg']);
                    }
                    if(array_key_exists('modifications', $_SESSION)){
                            echo('<li class="regGud">'.$_SESSION['modifications'].'</li>');
                            unset($_SESSION['modifications']);
                        }
                    if(array_key_exists('modification', $_SESSION)){
                        $id = $_SESSION['modification']['id'];
                            $updateSql = "UPDATE regs SET keyProof=NULL WHERE id=$id";
                            if (mysqli_query($connect, $updateSql)) { 
                                unset($id);
                            }

                    }
                ?>
            </ul>
            <ul class="Errors">
                <?php
                    if(array_key_exists('Error', $_SESSION)){
                            echo('<li class="Error">'.$_SESSION['Error'].'</li>');
                            unset($_SESSION['Error']);
                    }
                    if(array_key_exists('ErorPhoneNull', $_SESSION)){
                        if($_SESSION['ErorPhoneNull']){
                            echo('<li class="error">'.$_SESSION['ErorPhoneNull'].'</li>');
                            unset($_SESSION['ErorPhoneNull']);
                        }
                    }
                    if(array_key_exists('ErorPhone', $_SESSION)){
                        if($_SESSION['ErorPhone']){
                            echo('<li class="error">'.$_SESSION['ErorPhone'].'</li>');
                            unset($_SESSION['ErorPhone']);
                        }
                    }
                    if(array_key_exists('ErorEmailNull', $_SESSION)){
                        if($_SESSION['ErorEmailNull']){
                            echo('<li class="error">'.$_SESSION['ErorEmailNull'].'</li>');
                            unset($_SESSION['ErorEmailNull']);
                        }
                    }
                ?>
            </ul>
        </div>
        <form class="d-flex flex-column text-center"action="authentication.php" method="post">
            <h1 class="">Форма авторизации</h1>
            <div class="d-flex m-auto">
                <p class="">У вас ещё нет аккаунта?</p>
                <a class="ml-2" href="reg.php">Регистрация</a>
            </div>
            <input type="text" name="phoneOrEmail" placeholder="Введите телефон или эл.почту">
            <input type="Password" name="Password" placeholder="Введите Пароль">
            <div class="actions">
                <button type="submit" class='RegAndLog'>Войти</button><br><br>
                <a href="EmailProof.php">Забыли пароль?</a>
            </div>
        </form>
    </section>
    <script src="RegAndLog.js"></script>
</body>
</html>