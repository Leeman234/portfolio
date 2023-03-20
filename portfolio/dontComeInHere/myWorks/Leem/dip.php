<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет магазинчик</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./pages/css/dip.css">
    <link rel="stylesheet" href="./pages/css/Footer.css">
</head>
<body>
    <header> 
        <section class="information w-100">
            <div class="d-flex justify-content-around">
                <?php
                    if (isset($_SESSION['del'])) {
                        echo('<div class="logo">
                                <img src="pictures\Logo.png" alt="logoReg">
                            </div>');
                    } else {
                        echo('<a href="pages/registration/log.php"><button class="button6">Вход</button></a>');
                        echo('<div class="logo">
                                <img src="pictures\Logo.png" alt="logo">
                            </div>');
                        echo('<a href="pages/registration/reg.php"><button class="button6">Регестрация</button></a>');
                    };
                ?>
            </div>
            <div class="d-flex justify-content-between w-100">
                <h4> Тел:+5(671888)90009-86219<br>
                Тел:+5(149255)78223-24073</h4>
                <h4>Адрес:Планета Марс город Лунный улица водяная строение J<br>
                Адрес:Планета плутон город внедорожный улица солнечная строение X </h4>
            </div>
            
        </section>
        <h1 class="text-center"> Добро пожаловать <br> в Интернет Магазин</h1>
        <div class="search">
            <form action="" class="d-flex">
                <input type="text" value="на данный момент поиск в разработке">
                <button class="button25">Поиск</button>
            </form>
        </div>
        <nav class="d-flex justify-content-center"> 
            <?php
                if (isset($_SESSION['del'])){
                    echo('<a href="pages\profile.php"><button>Профиль</button></a>');
                } 
            ?>
            <a href="pages\dipProducts.php"><button>Товары</button></a>
        </nav>
    </header>
    <main class="d-flex justify-content-between">
        <div class="webPicture m-auto">
            <img src="pictures\web1.png" alt="">
        </div>

        <p>Наш интернет магазин приветствует вас! Добро пожаловать!<br>
            Только мы даем самые низкие цены на свою продукцию, а если вы найдете еще дешевле, то мы снизим цену еще больше.(не прада не верьте этому, это не я писал)<br>
            Наш интернет магазин работает на рынке более 5 минут и мы уже давно зарекомендовали себя как надежного и уверенного поставщика товара.(да да мы крутые)<br> 
            покупая в нашем магазине, вы будете всегда счастливы и рады вернуться к нам снова.<br>
            Представленный ассортимент является самым широким и у нас есть все, что вам нужно.(не всё, но ладно)<br>
            Наши менеджеры всегда будут рады вам помочь.(конечно, ибо у нас нет менеджеров)</p>
        <div class="webPicture m-auto">
            <img src="pictures\web2.png" alt="">
        </div>
    </main>
    <footer class="d-flex justify-content-around">
        <p class="creator">Разработал Иванов Леонид Николаевич</p>
        <div>
            <p>Спасибо, что выбрали Нас и Вы можете быть уверены в получении качественного сервиса!<br>
            Основной гарантией качества предоставляемых услуг является профессионализм наших сотрудников.<br>
            Мы признаем, что каждый клиент, обратившийся к нам за услугой, вправе получить результат, соответствующий его ожиданиям!<br>
            так же смотрите можете подписатаься на наши соц.сети чтобы быть вкурсе наших новых новостей<br></p>
            <div>
                <a href="https://omskpress.ru/wp-content/uploads/2021/05/twitter.jpeg" class="button5" data-twitter>twitter</a>
                <a href="https://vk.com/leeman222" class="button5" data-vk>Vk</a>
                <a href="http://mayaksbor.ru/upload/iblock/38d/38d6313622872d5503b244ec6e101239.jpg" class="button5" data-facebook>facebook</a>
            </div>
        </div>
        <div>
            <Ul>
                <li>Все права защищены наверное</li>
                <li>копирование и заучивание наизусть разрешаются :D</li>
                <li>нарушения будут приследоватся, но это не точно</li>
            </Ul>
        </div>
    </footer>
</body>
</html>