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
    <!-- весь текст капсом font-family: 'Neutral Face'-->
    <link href="https://myfonts.ru/myfonts?fonts=neutral-face" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="Contact.css">
    <title>Контакты</title>
</head>
<body>
    <img class="copyPng"src="copy.png" alt="">
    <header class="d-flex justify-content-between">
        <a href="/"><img src="Logo.png" alt=""></a>
        <div class="d-flex justify-content-between">
            <a href="">пресс-центр</a>
            <a href="">вопрос/ответ</a>
            <a href="">помощь 24/7</a>
            <img src="lup.png" alt="">
        </div>
    </header>
    <section class="kontacts d-flex">
    </section>
    <div class="lineContact"></div>
    <section id="discussion" class="discussion d-flex">
        <article class="discussionText">
            <h1>оставить заявку<br><br></h1>
            <p>
                Отправка заявки вас ни к чему не<br>
                обязывает. Созвонимся,<br>
                проведём консультацию,<br> 
                финальное решение — за вами.
            </p>
        </article>
        <div class="appeal">
            <form class="d-flex flex-column" action="ContactForm.php" method="post">
                <input 
                <?php if(isset($_SESSION['FIONull'])){print('style="border: solid 2px red;"'); unset($_SESSION['FIONull']);}?>
                name="FIO" type="text" placeholder="ФИО*">
                <input 
                <?php if(isset($_SESSION['Phone'])){print('style="border: solid 2px red;"'); unset($_SESSION['Phone']);}?>
                name="Phone" type="text" placeholder="Номер телефона*">
                <input
                <?php if(isset($_SESSION['Email'])){print('style="border: solid 2px red;"'); unset($_SESSION['Email']);}?>
                name="Email" type="Email" placeholder="Почта*">
                <select
                <?php if(isset($_SESSION['Select'])){print('style="border: solid 2px red;"'); unset($_SESSION['Select']);}?>
                name="Select" id="Select">
                    <option value="">Выбери услугу*</option>
                    <optgroup label="разработка">
                        <option value="WEB-разработка">WEB-разработка</option>
                        <option value="Мобильные приложения">Мобильные приложения</option>
                        <option value="Десктоп приложения">Десктоп приложения</option>
                        <option value="Дизайн">Дизайн</option>
                        <option value="3D-тур (AR, VR)">3D-тур (AR, VR)</option>
                    </optgroup>
                    <optgroup label="HR">
                        <option value="Подбор персонала">Подбор персонала</option>
                        <option value="Консультация на собес">Консультация на собес</option>
                    </optgroup>
                    <optgroup label="Краудфандинг">
                        <option value="Поиск инвестора">Поиск инвестора</option>
                        <option value="Патент">Патент</option>
                        <option value="Юр. сопровождение">Юр. сопровождение</option>
                    </optgroup>
                    <optgroup label="Маркетинг">
                        <option value="SMM">SMM</option>
                        <option value="SEO">SEO</option>
                        <option value="Наружная реклама">Наружная реклама</option>
                        <option value="Email">Email</option>
                    </optgroup>
                    <option value="Бухгалтерия">Бухгалтерия</option>
                </select>
                <textarea name="Description" placeholder="Опишите задачу. Например: Вам необходимо привлечь средства для реализации вашего проекта"></textarea>
                <input name="Referral" type="text" placeholder="Реферальная ссылка (если есть)">
                <div
                <?php if(isset($_SESSION['Checkt'])){print('style="border: solid 2px red;"'); unset($_SESSION['Checkt']);}?> 
                class="d-flex checkboxLine">
                    <input name="Checkt" class="checkbox" type="checkbox">
                    <div class="d-flex"><p>Согласен с политикой</p><a href="" style="color: #0077B6;">конфиденциальности</a></div>
                </div>
                <button>отправить</button>
            </form>
        </div>
    </section>
    <div class="lineContact"></div>
    <section id="information" class="information">
        <div class="d-flex">
        <h1>реквизиты<br><br></h1>
        </div>
        <article class="addressAndRequisites d-flex">
            <p><fons style="color:#0077B6;">Юридический адрес:</fons><br><br>
                117342, Москва, ул. Бутлерова, д. 17,<br>ком. 22<br><br>
                <a href="mailto:project-420@yandex.ru">project-420@yandex.ru</a><br>
                <a href="tel:+74951420420">+7 (495)-1-420-420</a>
            </p>
            <h2> 
                инн<br>
                кпп<br>
                огрн<br>
                банк<br>
                р/с<br>
                бик<br>
                к/с
            </h2>
            <h2> 
                <div class="copy">9728068473</div>
                <div class="copy">772801001</div>
                <div class="copy">1227700409507</div>
                <select name="" id="Bank">
                    <option value="">Сбер банк</option>
                    <option value="">Альфа банк</option>
                    <option value="">Тинькофф банк</option>
                    <option value="">МТС банк</option>
                </select>
                <div class="requisitesBank">
                    <div class="copy">сбер</div>
                    <div class="copy">сбер</div>
                    <div class="copy">сбер</div>
                </div>
            </h2>
        </article>
    </section>
    <footer>
            <div class="about d-flex justify-content-between">
                <div class="logos">
                    <p class="connection2">Навигация:</p><br>
                    <p class="connection3">Главная</p>
                    <p class="connection3">О компании</p>
                    <p class="connection3">Пресс-центр</p>
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
                <p class="copyright">&emsp; copyright © 2022 ПРОЕКТ 420</p>
            </div>
    </footer>
    <script src="Contact.js"></script>
</body>
</html>