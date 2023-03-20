<?php 
    session_start();
    require_once 'registration/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/profile.css">
    <title>Document</title>
</head>
<body>
    <main>
        <header> 
            <h1><?php
                print_r($_SESSION[`user`]['Full_name'])
                ?></h1>
            <h2>(<?php
                print_r($_SESSION[`user`]['Login'])
                ?>)</h2>
        </header>
        <div class="text-center m-auto">
            <form action="actions/delRegAndLod.php" method="post">
                <input name="profile" type="submit" value="Главная" class="profile"/>
                <input name="profile" type="submit" value="Товары" class="profile"/>
                <input name="profile" type="submit" value="Корзина" class="profile"/>
                <input name="Exit" type="submit" value="Выйти" class="Exit"/>
            </form>
        </div>
    </main>
</body>
</html>