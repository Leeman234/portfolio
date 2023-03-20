<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%; width: 100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="car.css">
    <title>Выкуп авто 64 - выкуп техники в Саратове</title>
</head>
<body>
    <header>
        <section class="logo">
            <img class="logoImg" src="logo.png" alt="Logo">
        </section>
        <section class="phone">
            <img class="imdPhone" src="phone.png" alt="">
            <p>8-951-888-46-79<br>vukupavto64@mail.ru</p>
        </section>
        <section class="location">
            <img class="imdLocation" src="location.png" alt="">
            <p>ул. Орджоникидзе, 24,<br>Саратов, Саратовская обл.</p>
        </section>
        <a href="#forms"><button class="headerBut">Заказать звонок</button></a>
    </header>
    <article class="caption">
        <div class="signboard">
            <h2 class="">
                Срочный выкуп техники<br>
                в Саратове и Саратовской
                области
            </h2>
        </div>
        <div class="arrow"><img src="arrow.png" alt=""></div>
    </article>
     <section class="proposal">
        <h3>Мы готовы выкупить <font style="color: rgb(224, 0, 0);">любую</font> технику, в том числе<br>
            битую, с юридическими ограничениями, в кредите и<br>
            не на ходу.</h3>
        <p>
            Работаем для вас с 2015 года, обращаясь к нам - вы можете быть уверены в<br>
            <font style="color: rgb(224, 0, 0);">чистоте</font> и  <font style="color: rgb(224, 0, 0);">прозрачности</font> сделки, назовем вам реальную стоимость автомобиля<br>
            или любой другой техники.
        </p>
    </section>
    <section class="promise">
        <h2><font style="color:rgb(224, 0, 0);">Деньги</font> - в день обращения</h2>
        <p>Мы готовы выплатить вам <font style="color:rgb(224, 0, 0);">реальную</font> стоимость вашей техники в день обращения.<br>
            Так же вы можете ознакомиться с нашими отзывами на <a 
            href="https://www.avito.ru/saratov/predlozheniya_uslug/vykup_avto_2293521002">Авито<font style="color: black;">.<font>
        </a></p>
        <ul>
            <li><b>Иномарки</b> — автомобили иностранных производителей, в т.ч. старше 15 лет</li>
            <li><b>Отечественные</b> — автомобили семейства ВАЗ, ГАЗ и прочие.</li>
            <li><b>Битые</b> — автомобили после ДТП.</li>
            <li><b>Не на ходу</b> — автомобили с техническими неисправностями.</li>
            <li><b>Юридически сложные</b> — автомобили с юридическими ограничениями.</li>
            <li><b>Мотоциклы</b> — мототехника иностранных производителей в т.ч. скутеры.</li>
            <li><b>Водный транспорт</b> — лодки, гидроциклы и прочие.</li>
        </ul>
    </section>
    <section id='forms' class="application">
        <h2>Оставьте <font style="color:rgb(224, 0, 0);">заявку</font></h2>
        <p>В этом разделе вы можете заказать выездной осмотр и оценку вашей техники.</p>
        <form action="mail.php" method="post">
            <label for="">Телефон</label>
            <input 
                <?php
                 if(isset($_SESSION['PhoneError'])){print('style="border: solid 2px red;"'); unset($_SESSION['PhoneError']);}?>
                name="Phone" type="text" placeholder="Ваш телефон">
            <br>
            <label for="">Вид техники</label>
            <select name="View" id="">
                <option value="Отечественное авто">Отечественное авто</option>
                <option value="Иномарка">Иномарка</option>
                <option value="Битый автомобиль">Битый автомобиль</option>
                <option value="Авто с обременениями">Авто с обременениями</option>
                <option value="Автомобиль не на ходу">Автомобиль не на ходу</option>
                <option value="Мототехника">Мототехника</option>
                <option value="Водный транспорт">Водный транспорт</option>
                <option value="Прочие">Прочие</option>
            </select>
            <br>
            <label for="">Дата</label>
            <input name="Date" style="width: 30%;" type="date">
            <br>
            <label for="">Время</label>
            <input name="Time" style="width: 30%;" type="time">
            <br>
            <label for="">Комментарии</label>
            <textarea name="Сomments" style="height: 83px;" name="" id="" cols="30" rows="10"></textarea>
            <br>
            <button>Оставить заявку</button>
            <br>
            <?php
                    if(isset($_SESSION['GoodForm'])){print(
                        '<div class="GoodForm">
                            <p>
                                Заявка успешно отпрвлена
                            </p>
                        </div>'
                    ); unset($_SESSION['GoodForm']);}
                ?> 
            <p style="width: 100%; margin: 0 auto 15% auto; font-size: 0.8em;">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</p>
        </form>
    </section>
    <section class="contactAndMap">
        <div class="contact">
            <h2>Контакты<br></h2>
            <p>8-951-888-46-79<br>vukupavto64@mail.ru<br></p>
            <p>ул. Орджоникидзе, 24, Саратов, Саратовская обл.,410000<br></p>
            <p>График работы: Пн-Вс с 8:00 до 22:00<br><font style="color:rgb(224, 0, 0);">Без выходных.</font></p>
        </div>
        <article>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2ba6b64c85964444be0d62a44e95ec33da6e04b6a037a9417a12bec6fe00d027&amp;source=constructor" frameborder="0"></iframe>
        </article>
    </section>
</body>
</html>