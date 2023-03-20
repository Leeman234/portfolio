<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="WebLab.css">
    <link rel="icon" href="fav.ico" type="image/x-icon">
    <title>проект 420</title>
</head>
<body>
    <img class="Cookie" src="Cookie.png" alt="">
    <div class="burder">
        <link rel="stylesheet" href="burger.css">
        <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>
          <div class="menu-items">
            <li><a href="#">для частных лиц</a></li>
            <li><a href="#">для организаций</a></li>
            <li><a href="#">вакансии</a></li>
            <li><a href="#">о компании</a></li>
            <li><a href="#">пресс-центр</a></li>
            <li><a href="#">контакты</a></li>
          </div>
        </div>
      </div>
        <script src="burger.js"></script>
    </div>
    <header class="d-flex">
        <img class="Logo" src="Logo.png" alt="Logo">
        <div class="start">
            <section class="d-flex flex-row justify-content-between">
                <article class="d-flex">
                    <div class="d-flex flex-row">
                        <p class="startText">для частных лиц</p>
                    </div>
                    <div class="d-flex flex-row">
                        <p class="startText">для организаций</p>
                    </div>
                </article>
                <article class="d-flex">
                    <div class="d-flex flex-row">
                        <p class="startTextRight LastStartText">вакансии</p>
                    </div>
                    <button class="btnLanguage">EN</button>
                </article>
            </section>
            <div class="lineHeader"></div>
            <section class="navBySite d-flex">
                    <nav class="d-flex">
                        <a class="nav" href="">о компании</a>
                        <a class="nav" href="PressCenter.html">пресс-центр</a>
                        <a class="nav" href="Contact.php">контакты</a>
                    </nav>
                            <article class="regAndLog d-flex style='padding: 0.1% 0%;'">
                                <a href="log.php"class="headerBtn Input text-center"><buttom><p class="headerBtnText">Вход</p></buttom></a>
                                <a href="reg.php"class="headerBtn Registration text-center"><buttom><p class="headerBtnText">Регистрация</p></buttom></a>
                            </article>
                        <?php
                            // if(array_key_exists('regs', $_COOKIE)){
                            //     echo('
                            //     <article class="d-flex">
                            //         <a href="kab.php"class="headerBtn personalKab text-center"><buttom><p class="headerBtnText">Личный кабнет</p></buttom></a>
                            //     </article>');
                            // }else{
                            //     echo('
                            //     <article class="d-flex">
                            //         <a href="log.php"class="headerBtn Input text-center"><buttom><p class="headerBtnText">Вход</p></buttom></a>
                            //         <a href="reg.php"class="headerBtn Registration text-center"><buttom><p class="headerBtnText">Регистрация</p></buttom></a>
                            //     </article>');
                            // }
                        ?>
            </section>
        </div>
    </header>
    <div class="slider__container">
        <div class="content d-flex justify-content-center">
            <div class="slider-item">
                <img src="1.png" alt="image">
                <button class="slaidOneButton">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="2.png" alt="image">
                <button class="slaidOneButton">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="1.png" alt="image">
                <button class="slaidOneButton">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="2.png" alt="image">
                <button class="slaidOneButton">Подробнее</button>
            </div>
        </div>
        <div class="slider__dots d-flex"></div>
    </div>
  <script src="s.js"></script>
  <script>
    new Slider(0, { autoPlay: true, fade: true })
  </script>
    <section class="d-flex recommendation justify-content-between">
        <h1 class="headerRecommendation">Рекомендуемые продукты</h1>
        <article class="products d-flex justify-content-center">
            <button class="productButton backPrimaryBtn">Разработка</button>
            <button class="productButton">HR</button>
            <button class="productButton">Краудфандинг</button>
            <button class="productButton">Бухгалтерия</button>
            <button class="productButton">Маркетинг</button>
        </article>
    </section>
   <section class="squares">
        <div class="d-flex squaresContent flex-wrap justify-content-center">
            <section class="square">
                    <img src="design.png" alt="">
            </section>
            <section class="square">
                    <img src="webdev.png" alt="">
            </section>
            <section class="square">
                    <img src="mobdev.png" alt="">

            </section>
        </div>
    </section>
    <section class="d-flex map">
        <h3 class="headerMap">Мы расширяем границы - и теперь мы доступны в России</h3>
        <img class="imgMap" src="map.png" alt="">
        <span class="pulse Moscow"></span>
        <span class="pulse Czech"></span>
    </section>
    <section class="partners">
        <article class="contentPartners d-flex justify-content-center">
            <img src="logoSBER.png" alt="">
            <img src="logoALFA.png" alt="">
            <img src="logoTIN.png" alt="">
            <img src="logoMTC.png" alt="">
        </article>
        <section class="squaresInfo d-flex justify-content-between w-100">
                <div class="textInfoLK w-50">
                    <h3>Личный кабинет.</h3>
                    <br>
                    <p>
                        В новом личном кабинете Вам<br>
                        доступна вся информация о<br>
                        статусе и ходе выполнения<br>
                        ваших заказов, а так же все о<br>
                        системе лояльности.<br><br>Теперь вся информация доступна 24/7.
                    </p>
                    <br><br><br>
                    <a href="log.php"><button>Войти</button></a>
                </div>
                <div class="squaresInfoImg w-50"><img src="hz.png" alt=""></div>
        </section>
    </section>

    <section class="questions">
        <article class="questionsArea d-flex justify-content-between">
            <div class="offers d-flex flex-column justify-content-between">
                <p>Остались вопросы?</p>
                <h2>Обсудим проект?</h2>
                <p>Оставьте заявку и мы свяжемся с Вами в ближайшее время.</p>
            </div>
                <a class="details" href="Contact.php#discussion">Подробнее</a>
        </article>
    </section>
<footer>
            <div class="about d-flex justify-content-between">
                <div class="logos">
                    <p class="connection2">Навигация:</p><br>
                    <a class="foot" href="WebLab.php"><p class="connection3">Главная</p></a>
                    <a class="foot" href="Contact.php"><p class="connection3">Контакты</p></a>
                    <a class="foot" href="PressCenter.html"><p class="connection3">Пресс-центр</p></a>
                    <p class="connection3">Вакансии</p>
                    <img
                     src="logoFooter.png" alt="Logo">
                </div>
                <div class="logos2">
                    <a href="mailto:project-420@yandex.ru">
                            <span></span>
                            &emsp; project-420@yandex.ru

                    </a>
                </div>
                <div class="logos3">
                    <p class="connection">ООО "ПРОЕКТ 420"</p><br>
                    <p class="connection1">ИНН 9728068473</p>
                    <p class="connection1">КПП 772801001</p>
                    <p class="connection1">ОГРН 1227700409507</p>
                    <p class="connection1">117342, Москва,<br>ул. Бутлерова, д.17,<br>ком.22</p>
                    <a href="https://www.behance.net/weblab420"><img src="Behance.png" alt=""></a>
                    <a href="https://dribbble.com/weblab420/aboutrofessionals"><img src="dribbble.png" alt=></a>
                    <a href="https://vk.com/project420ru"><img src="vk.png" alt=""></a>
                    <a href="https://www.linkedin.com/in/alexander-khomushko"><img src="linkedin.png" alt=""></a>
                </div>
            </div>
            <div class="text-center soch">
                <p class="copyright"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; copyright © 2022 ПРОЕКТ 420</p>
            </div>
    </footer>
    <script src="WebLab.js"></script>
</body>
</html>