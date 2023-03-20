<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $Password_proof = $_POST['Password_proof'];
    
    if($Password === $Password_proof){
        $Password = md5($Password);
        mysqli_query($connect,
        "INSERT INTO `users` (`id`, `Full_name`, `Login`, `Email`, `Password`)
        VALUES (NULL, '$full_name', '$login', '$email', '$Password')");
        $_SESSION['reg'] = 'регистрация прошла успешно';
        header('location: log.php');
    } else {$_SESSION['message'] = 'пароли не совпадают';
        header('location: reg.php');}