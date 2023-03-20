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
    <title>Изменение Данных</title>
</head>
<body>
    <div class="hz"><a href="/"><img class="Logo" src="Logo.png" alt=""></a></div>
    <section class="regLog d-flex">
        <div class="d-flex flex-column">
            <ul class="Errors">
                <?php
                if(array_key_exists('ErorFIOch', $_SESSION)){
                    if($_SESSION['ErorFIOch']){
                        echo('<li class="error">'.$_SESSION['ErorFIOch'].'</li>');
                        unset($_SESSION['ErorFIOch']);
                    }
                }
                if(array_key_exists('ErorPhone', $_SESSION)){
                    if($_SESSION['ErorPhone']){
                        echo('<li class="error">'.$_SESSION['ErorPhone'].'</li>');
                        unset($_SESSION['ErorPhone']);
                    }
                }
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
                if(array_key_exists('PasswordОld', $_SESSION)){
                    if($_SESSION['PasswordОld']){
                        echo('<li class="error">'.$_SESSION['PasswordОld'].'</li>');
                        unset($_SESSION['PasswordОld']);
                    }
                }
                if(array_key_exists('PasswordNotOld', $_SESSION)){
                    if($_SESSION['PasswordNotOld']){
                        echo('<li class="error">'.$_SESSION['PasswordNotOld'].'</li>');
                        unset($_SESSION['PasswordNotOld']);
                    }
                }
            ?>
            </ul>
        </div>
        <form class="d-flex flex-column text-center" action="modification.php" method="post">
            <h1 class="">Изменение данных аккаунта</h1>
            <div class="d-flex m-auto">
                <a class="ml-2" href="kab.php">В личный кабинет</a>
            </div>
            <input type="text" name="full_name" value="<?php echo($_SESSION['user']['Full_name'])?>" placeholder="Напиши своё ФИО">
            <input type="text" name="city" value="<?php echo($_SESSION['user']['City'])?>" placeholder="Введите город проживания">
            <input type="text" name="phone" value="<?php echo($_SESSION['user']['Phone'])?>" placeholder="Введите номер своего телефона">
            <input type="Email" name="email" value="<?php echo($_SESSION['user']['Email'])?>" placeholder="Введите эл.почту">
            <input type="password" name="PasswordOld" placeholder="Введите старый пароль">
            <input type="password" name="PasswordNew" placeholder="Введите Пароль">
            <input type="Password" name="Password_proof" placeholder="Подтвердите Пароль">
            <div class="actions">
                <button type="submit"class="RegAndLog">Изменить данные</button>
            </div>
        </form>
    </section>
    <script src="RegAndLog.js"></script>
</body>
</html>