<?php 
    session_start();
    require_once 'connect.php';
    if(!array_key_exists('regs', $_COOKIE)){header('location: log.php');}
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
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://myfonts.ru/myfonts?fonts=neutral-face" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="WebLabLK.css">
    <title>Личный кабинет</title>
</head>
<body>
    <img class="copyPng"src="copy.png" alt="">
    <header class="d-flex w-100 justify-content-between">
        <a class="w-15"href="/"><img class="Logo" src="Logo.png" alt="Logo"></a>
        <section class="d-flex w-85">
            <nav class="d-flex">
                <a class="nav" href="">контакты</a>
                <a class="nav" href="">вопрос/ответ</a>
                <a class="nav" href="">помощь 24/7</a>
            </nav>
            <p class="name">
                <?php
                    print_r($_SESSION['user']['Name']);
                ?>
            </p>
        </section>
    </header>
     <section class="invitation">
        <div class="m-auto d-flex justify-content-center INV">
            <p class="paragraphINV">Приглашай партнеров по уникальной реферальной ссылке и повышай статус аккаунта</p>
            <button class="BtnINV">Узнать больше</button>
        </div>
    </section>
    <section class="mainBlock">
        <div class="whereAmI d-flex mt-3">
            <p class="">Главная</p>
            <p class="str">&#10095;</p>
            <p>Личный кабинет</p>
            <p class="str">&#10095;</p>
            <p class="">Общая информация</p>
        </div>
        <div class="NavLK">
            <h3 class="headerNavLK">ЛИЧНЫЙ КАБИНЕТ</h3>
            <div class="d-flex">
                <button class="ButNavLK firstNavLK">Общая информация</button>
                <button class="ButNavLK">Заказы</button>
                <button class="ButNavLK">Настройка и безопасность</button>
            </div>
        </div>
   
            <div class="person d-flex">
                <h4 class="FIO"><?php
                print_r($_SESSION['user']['Full_name'])
                ?></h4>
                <p class="id">id <?php
                print_r($_SESSION['user']['Id'])
                ?></p>
            </div>
            <section class="d-flex">
                <div>
                    <p class="sity">город:</p>
                    <p class="sityName"><?php
                    print_r($_SESSION['user']['City'])
                    ?></p>
                </div>
                <div>
                    <p class="sity">телефон:</p>
                    <p class="sityName"><?php
                    print_r($_SESSION['user']['Phone'])
                    ?></p>
                </div>
                <a class="change" href="change.php">Изменить данные</a>
            </section>

        <section class="status d-flex"> 
            <p class="Textstatus">Статус аккаунта:</p>
            <p class="meaningStatus">&nbspв разработке</p>
            <img class="question"src="vop.png" alt="">
        </section>             
        <section class="sale">
            <img class="saleImg"src="kab.png" alt="">
            <div class="infSale d-flex flex-column">
                <h3 class="headerSale">Дарим до 3% с заказа</h3>
                <p class="paragraphSale">Поделись ссылкой и бонусы будут зачислены 
                    после оплаты заказа!</p>
                <div class="SaleLink text-center"type="text"><span class="SaleLinkText">
                   <?php
                        $site = 'https://project420.kndesign.ru?refkey=';
                        $id = $_SESSION['user']['Id'];
                        $authentication = mysqli_query($connect, "SELECT * FROM `regs` WHERE `id` = '$id'");
                        if(mysqli_num_rows($authentication) == 1){
                            $user = mysqli_fetch_assoc($authentication);
                            $RefKey = $user['RefKey'];
                            echo($site.$RefKey);
                        }
                        
                   ?>
                </span></div>
                <button class="BtdSale">Скопировать ссылку</button>
            </div>
        </section>
    </section>
    <script src="WebLabLK.js"></script>
</body>
</html>