<?php
    session_start();
    if(strlen($_POST['Phone'] > 0)){
        $Phone = $_POST['Phone'];
    }else{
        $_SESSION['PhoneError'] = 'хз зачем ты зашел в код, но эта штука выводит ошибку если интересно';
        header('location: car.php#forms');
    }
    $mail = 'Cегодня тебе пришла заявка с номера телефона '.$_POST['Phone'].'
    вид техники: '.$_POST['View'].
    ' с датой: '.$_POST['Date'].
    ' временем: '.$_POST['Time'].
    ' и коментарий '.$_POST['Сomments'];
    if (mail("li9106524@gmail.com", 'новая заяака на сайте',$mail)){
        $_SESSION['GoodForm'] = 'Хватит смотреть код, это секрет вообще то';
        header('location: car.php#forms');
    }
?>