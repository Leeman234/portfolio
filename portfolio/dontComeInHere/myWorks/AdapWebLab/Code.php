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
    <title>Document</title>
</head>
<body>
    <div class="hz"><a href="/"><img class="Logo" src="Logo.png" alt=""></a></div>
    <section class="regLog">
        <form class="d-flex flex-column text-center"action="CodeProof.php" method="post">
            <h1 class="">Подтвердите Email</h1>
            <div class="d-flex m-auto">
            </div>
            <div class="EmailOrPhoneBlock">
                <div class="EmailOrPhone">
                    <input type="text" name="code" placeholder="Введите код, который пришел на ваш Email">
                </div>
            </div>
            <div class="actions">
                <button type="submit" class='RegAndLog'>Подтвердить</button>
            </div>
        </form>
        <?php
            if(array_key_exists('codefail', $_COOKIE)){
                echo('
                <ul class="Errors">
                    <li style="margin-top: 5%;" class="Error">'.$_COOKIE['codefail'].'</li>
                </ul>');
                unset($_COOKIE['codefail']);
            }
        ?>
    </section>
    <script src="RegAndLog.js"></script>
</body>
</html>