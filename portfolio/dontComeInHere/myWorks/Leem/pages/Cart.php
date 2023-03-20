<?php
    session_start();
    require_once 'registration/connect.php';
    require_once 'functions/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/dipProducts.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Document</title>
</head>
<body>
    <div class="purchaseBody">
        <div class="purchase" style="position: relative; z-index: 0; opacity: 0;">
            <div class="bought d-flex flex-column">
                <div class="lineSale1 d-flex">
                    <button data-action="deleteSale" class="bott delSale" style="cursor: default;" ;="">Х</button>
                </div>
                <div class="informatio">
                    <form class="d-flex flex-column justify-content-center text-center">
                        <label for=""> Имя </label>
                        <input type="text">
                        <label for=""> фамилия </label>
                        <input type="text">
                        <label for="">адрес доставки  </label>
                        <input type="text">
                        <label for=""> телефон </label>
                        <input type="text">
                        <label for=""> адрес электронной фочты </label>
                        <input type="email">
                        <button type="submit" class="button m-5"> отправить запрос</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <nav class="navHeader d-flex justify-content-around"> 
        <a href="../dip.php"><button class="navigation">Главная</button></a>
        <a href="profile.php"><button class="navigation">Профиль</button></a>
        <a href="dipProducts.php"><button class="navigation">Товары</button></a>
    </nav>
    <div class="cartAndAmount d-flex">
        <div class="cart d-flex flex-wrap justify-content-center">
            <?php
                if(isset($_SESSION[`user`])){
                    $id = $_SESSION[`user`]['id'];
                }else{
                    if(isset($_SESSION['idCoc'])){
                        $id = $_SESSION['idCoc'];
                    }
                }
                if(isset($id)){
                    $IsThereProductId = mysqli_query($connect, "SELECT * FROM `cart` WHERE `UserId` = '$id'");
                    if(mysqli_num_rows($IsThereProductId) > 0){
                        while($userProduct = mysqli_fetch_assoc($IsThereProductId)){
                            $ProductID = $userProduct['productId'];
                            $StoreProduct = $userProduct['productScore'];
                            $ProductIsSQL = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$ProductID'");
                            $ProductSQL = mysqli_fetch_assoc($ProductIsSQL);
                            CartProductPrint($ProductSQL,$StoreProduct);
                        }
                    }
                }
            ?>
        </div>
        <div class="amount">
            <a class="button11"></a>
        </div>
    </div>
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
    <script src="./functions/function.js" type="module"></script>
    <script src="./js/Cart.js" type="module"></script>
</body>
</html>