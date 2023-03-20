<?php
    session_start();
    $mail = $_POST['Fio'].' '.$_POST['Mail'].' '.$_POST['Who'];
    if (mail("li9106524@gmail.com", 'Портфолио',$mail)){
        $_SESSION['GoodForm'] = 'Хватит смотреть код, это секрет вообще то';
        header('location: portfolio.php#form');
    }
?>