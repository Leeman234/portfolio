<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=@, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="portfolio/portfolio.css">
    <title>Портфолио</title>
</head>
    <body>
        <header class="text-center"> 
            <h1>Портфолио</h1> 
            <h2>Иванов Леонид</h2>
            <nav class="d-flex flex-wrap justify-content-evenly m-5 pb-5 nav">
                    <a href="#aboutMe">Обо мне</a>
                    <a href="#skills">Мои навыки</a>
                    <a href="#MyWorks">Мои работы</a>
                    <a href="#Connection">Связатся со мной</a>
                    <button class="matriceOFF">oтключение матрицы</button>
            </nav>
        </header>
        <article class="main d-flex justify-content-evenly">
            <h4 class="quote">
            Для меня долгое время было загадкой, как что-то очень дорогое и технологичное может быть столь бесполезным.
            И вскоре я осознал, что компьютер — это глупая машина, обладающая способностями выполнять невероятно умные вещи,
            тогда как программисты — это умные люди, у которых талант делать невероятные глупости. Короче, они нашли друг друга.
            </h4> 
            <img class="me" src="portfolio/img/me.png" alt="">
        </article>
        <article id="aboutMe" class="aboutMe text-center"> 
            <h1>Обо мне</h1>
            <p class="aboutMeP m-3">
                С самого детства увлекался компьютерами и было интересно что да как работает, С начало изучал железо компьютера, собирал и разбирал его много раз,
                после мне стала интересна программная часть компьютера и из-за этого я пошел в секцию СЮД(Станция Юного Техника),
                там так же рассказывали про железо компьютера, а потом и про программную, мы изучали разные программы,
                И больше всего мне нравилась программа где надо было создавать игру платформер не с помощью кода, но надо было написать логику игры и её от рисовку,
                ходил в эту секцию 2 года потом мне это наскучило ибо ничего нового там не появлялось, а мне хотелось больше узнать про мир IT,
                и я смотрел разные видео на ютуб про то какой язык лучше начать изучать первым, во многих видео говорили про java,
                я начал изучать этот язык и изучил основы,
                после чего наткнулся на обучающую программу JavaRush и прошел там 2 курса и из-за не очень хорошего финансового положения перестал там обучатся.
                Начал искать бесплатные источники информации и нашел Яндекс Практикум и прошел в нём все курсы по профориентации,
                больше всего мне понравились Веб разработка, аналитика и тестирование.
                После чего поступил в synergy academy на курс Full-Stack разработки
                там я узнал то как верстаются сайты при помощи HTML и CSS, узнал про Git про adjail про основы языков PHP и python.
                Но в synergy academy я хоть и получил знания, но это была всё теория
                и практики было маловато и по этому я решил написать свой проект,
                а точнее интернет магазин <a href="#Leem">Leem</a> а также тренировался в <a href="#PSD">вёрстке</a> и сделал несколько макетов по PSD.
                Ну а если не касаться мира IT то я закончил музыкальную школу, обычную школу, колледж также увлекаюсь мотоциклами,
                хожу в спорт зал и веду здоровый образ жизни.
            </p>
        </article>
        <article id="skills" class="skills text-center">
                <h1>Мои скилы</h1>
                <h2>Если диаграмма зелёно-красная то знания как теоретические так и практические<br>
                Если же диаграмма Синя-красная то знания только теоритические</h2>
            <section class="d-flex text-center justify-content-between skill p-5">
                <div class="d-flex flex-column" >   
                    <h2>HTML</h2>
                    <img src="portfolio/img/HTML-CSS-JS-Node.JS.png" alt="">
                </div>
                <div class="d-flex flex-column">
                    <h2>CSS</h2>
                    <img src="portfolio/img/HTML-CSS-JS-Node.JS.png" alt="">
                    <h2>SASS</h2>
                    <img src="portfolio/img/sass_ajail.png" alt="">
                </div>
                <div class="d-flex flex-column">
                    <h2>JavaScript</h2>
                    <img src="portfolio/img/HTML-CSS-JS-Node.JS.png" alt="">
                    <h2>Node.js</h2>
                    <img src="portfolio/img/HTML-CSS-JS-Node.JS.png" alt="">
                    <h2>JQuery</h2>
                    <img src="portfolio/img/python_git.png" alt="">
                    <h2>React</h2>
                    <img src="portfolio/img/JQuery_React.png" alt="">
                </div>
                <div class="d-flex flex-column">
                    <h2>PHP</h2>
                    <img src="portfolio/img/php_pixelPerfect.png" alt="">
                    <h2>Laravel</h2>
                    <img src="portfolio/img/Laravel_OOП_MVC.png" alt="">
                    <h2>ООП</h2>
                    <img src="portfolio/img/Laravel_OOП_MVC.png" alt="">
                    <h2>MVC</h2>
                    <img src="portfolio/img/Laravel_OOП_MVC.png" alt="">
                </div>
                <div class="d-flex flex-column">
                    <h2>python</h2>
                    <img src="portfolio/img/python_git.png" alt="">
                    <h2>Django</h2>
                    <img src="portfolio/img/Django.png" alt="">
                </div>
                <div class="d-flex flex-column">
                    <h2>SQL</h2>
                    <img src="portfolio/img/python_git.png" alt="">
                </div>
                <div class="d-flex flex-column">
                    <h2>adjail</h2>
                    <img src="portfolio/img/sass_ajail.png" alt="">
                    <h2>pixel Perfect</h2>
                    <img src="portfolio/img/php_pixelPerfect.png" alt="">
                    <h2>Git</h2>
                    <img src="portfolio/img/sass_ajail.png" alt="">
                    <h2>Адаптив</h2>
                    <img src="portfolio/img/php_pixelPerfect.png" alt="">
                </div>
            </section>
        </article>
        <article id="MyWorks" class="MyWorks text-center">
            <h1>Мои работы</h1>
            <section id="PSD"class="Project">
                <h2 >ПРОЕКТ420</h2>
                <div class ="projectInformation">
                    <aside>
                        <img class="MyWorksImg" src="portfolio/img/Prodgect420.png" alt="">
                    </aside>
                    <aside class="d-flex flex-column">
                        <a href="portfolio\dontComeInHere\myWorks\AdapWebLab\WebLab.php"><button>Посмотреть проект</button></a>
                            <h3>О проекте</h3>
                            <p>Данный сайт разрабатывался мой когда работал в "ООО ПРОЕКТ420"<br>
                              (когда уходил с работы сайт находился в стадии разработки,тут он показан на стадии когда я уходил)</p>
                    </aside>
                </div>
            </section>
            <section id="PSD"class="Project">
                <h2 class="ProjectHeader">Заказ</h2>
                <div class ="projectInformation">
                    <aside class="imgWork">
                        <img class="MyWorksImg" src="portfolio/img/car.png" alt="">
                    </aside>
                    <aside class="d-flex flex-column">
                        <a href="portfolio\dontComeInHere\myWorks\car\car.php"><button>Посмотреть проект</button></a>
                            <h3 class="headingHestori">О проекте</h3>
                            <p class="HestoriProdject">
                              Данная работа была сделана на заказ
                            </p>
                    </aside>
                </div>
            </section>
            <section id="Leem" class="Project">
                <h2 class="ProjectHeader">Leem(Мой проект интернет магазина, на данный момент в разработке)</h2>
                <div class ="projectInformation">
                    <aside class="imgWork">
                        <img class="MyWorksImg" src="portfolio/img/Leem.png" alt="">
                    </aside>
                    <aside class="d-flex flex-column ProjectDescription">
                        <a href="portfolio\dontComeInHere\myWorks\Leem\dip.php"><button class="viewProject">Посмотреть проект</button></a>
                            <h3 class="headingHestori">О проекте</h3>
                            <p class="HestoriProdject">
                                Данный Pet-проект я делал для саморазвития.(проект в разработке) 
                            </p>
                    </aside>
                </div>
            </section>
            <section id="PSD"class="Project">
                <h2 class="ProjectHeader">Вёрстка по макету PSD (Pixel perfect)</h2>
                <div class ="projectInformation">
                    <aside class="imgWork">
                        <img class="MyWorksImg" src="portfolio/img/Maket1.png" alt="">
                    </aside>
                    <aside class="d-flex flex-column">
                        <a href="portfolio\dontComeInHere\myWorks\maketPSDone\maketOne.html"><button class="viewProject">Посмотреть проект</button></a>
                        
                            <h3 class="headingHestori">О проекте</h3>
                            <p class="HestoriProdject">
                            особой истории тут нет, просто практика Pixel perfect  
                        </p>
                    </aside>
                </div>
            </section>
            <section class="Project">
                <h2 class="ProjectHeader">Вёрстка по макету PSD (Pixel perfect)</h2>
                <div class ="projectInformation">
                    <aside class="imgWork">
                        <img class="MyWorksImg" src="portfolio/img/Maket2.png" alt="">
                    </aside>
                    <aside class="d-flex flex-column ProjectDescription">
                        <a href="portfolio\dontComeInHere\myWorks\maketPSDtwo\maketTwo.html"><button class="viewProject">Посмотреть проект</button></a>
                            <h3 class="headingHestori">О проекте</h3>
                            <p class="HestoriProdject">
                            особой истории тут нет, просто практика Pixel perfect  
                        </p>
                    </aside>
                </div>
            </section>
            <section class="Project">
                <h2>Вёрстка по Макету из figma</h2>
                <div class ="projectInformation">
                    <aside class="imgWork">
                        <img class="MyWorksImg" src="portfolio/img/MaketFigma.png" alt="">
                    </aside>
                    <aside class="d-flex flex-column ProjectDescription">
                        <a href="portfolio\dontComeInHere\myWorks\figma\figmaMaket.html"><button class="viewProject">Посмотреть проект</button></a>
                        
                            <h3 class="headingHestori">О проекте</h3>
                            <p class="HestoriProdject">
                                Это один из практичесих проектов в synergy academy где надо было сверстать страничку с небольшой анимацией
                            </p>
                    </aside>
                </div>
            </section>
            <section class="Project">
                <h2>Вёрстка Email письма</h2>
                <div class ="projectInformation">
                    <aside class="imgWork">
                        <img class="MyWorksImg" src="portfolio/img/Email.png" alt="">
                    </aside>
                    <aside class="d-flex flex-column ProjectDescription">
                        <a href="portfolio\dontComeInHere\myWorks\Email\Email.html"><button class="viewProject">Посмотреть проект</button></a>
                        
                            <h3 class="headingHestori">О проекте</h3>
                            <p class="HestoriProdject">
                                Это один из практичесих проектов в synergy academy где нужно было свёрстать Email письмо
                            </p>
                    </aside>
                </div>
            </section>
            <section class="Project">
                <h2>Вёрстка галереи (flex)</h2>
                <div class ="projectInformation">
                    <aside class="imgWork">
                        <img class="MyWorksImg" src="portfolio/img/FlexMaket.png" alt="">
                    </aside>
                    <aside class="d-flex flex-column ProjectDescription">
                        <a href="portfolio\dontComeInHere\myWorks\galery\flex.html"><button class="viewProject">Посмотреть проект</button></a>
                        
                            <h3 class="headingHestori">О проекте</h3>
                            <p class="HestoriProdject">
                                Это один из практичесих проектов в synergy academy где нужно было свёрстать страничку галереи с помощб CSS свойства Flex
                            </p>
                    </aside>
                </div>
            </section>
            <section class="Project">
                <h2>Вёрстка галереи (grid)</h2>
                <div class ="projectInformation">
                    <aside class="imgWork">
                        <img class="MyWorksImg" src="portfolio/img/GritMaket.png" alt="">
                    </aside>
                    <aside class="d-flex flex-column ProjectDescription">
                        <a href="portfolio\dontComeInHere\myWorks\galery\grit.html"><button class="viewProject">Посмотреть проект</button></a>
                        
                            <h3 class="headingHestori">О проекте</h3>
                            <p class="HestoriProdject">
                                Это один из практичесих проектов в synergy academy где нужно было свёрстать страничку галереи с помощб CSS свойства grid
                            </p>
                    </aside>
                </div>
            </section>
        </article>
        <article class="text-center" id="Connection">
            <h1>Связатся со мной</h1>
            <h2>Соц сети</h2>
            <nav class="d-flex flex-wrap justify-content-evenly m-5 nav">
                <a class="navA" href="https://vk.com/leeman222">Вконтакте</a>
                <a class="navA" href="https://t.me/Leeman2">Телеграмм</a>
            </nav>
            <h2>Форма обратной связи</h2>
            <form id="form" action="mail.php" method="post" class="d-flex flex-column">
                <label for="">ФИО</label>
                <input name="Fio" type="text" placeholder="Ваше ФИО">
                <label for="">Сообщение</label>
                <textarea name="Mail" name="" id="" placeholder="Напишите ваше сообщение"></textarea>
                <label for="">как я могу связатся с вами</label>
                <input name="Who" type="text" placeholder="Любая соц.сеть или Email">
                <button>Отправить</button>
                <?php
                    if(isset($_SESSION['GoodForm'])){
                        print('<div>Сообщение отправленно</div>');
                        unset($_SESSION['GoodForm']);
                    }
                ?>
            </form>
        </article>
        <script src="portfolio/portfolio.js"></script>
    </body>
</html>