<?php
    session_start();
    require_once 'connect.php';
    $key = $_GET['key'];
    $keyInBD = mysqli_query($connect, "SELECT * FROM `regs` WHERE `keyProof` = '$key'");
    if(mysqli_num_rows($keyInBD) != 1){
        $_SESSION['ErEmailProof'] ='Срок действия ссылки истёк или вы взломщик у которого ничего не получилось :D';
        header('location: EmailProof.php');
    }
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
    <section class="regLog">
        <form class="d-flex flex-column text-center"action="newPasswordVerification.php" method="post">
            <h1 class="">Изменение Пароля</h1><br>
                <input type="hidden" name="key" value=<?php echo('"'.$key.'"') ?>>
                <input type="password" name="newPassword" placeholder="Введите новый пароль">
                <input type="password" name="proofNewPassword" placeholder="Подтвердите новый пароль">
            <div class="actions">
                <button type="submit" class='RegAndLog'>Изменить</button>
            </div>
        </form>
        <br>
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
                if(array_key_exists('proofNewPassword', $_SESSION)){
                    if($_SESSION['proofNewPassword']){
                        echo('<li class="error">'.$_SESSION['proofNewPassword'].'</li>');
                        unset($_SESSION['proofNewPassword']);
                    }
                }
            ?>
            </ul>
    </section>
    <script src="RegAndLog.js"></script>
</body>
</html>