<?php
    session_start();
    require_once 'connect.php';
    $login = $_POST['login'];
    $Password = md5($_POST['Password']);
    $authentication = mysqli_query($connect, "SELECT * FROM `users` WHERE `Login` = '$login' AND `Password` = '$Password'");
    $_SESSION['delRegAndLog'] = 1;
    if(mysqli_num_rows($authentication) > 0){
        $user = mysqli_fetch_assoc($authentication);
        $_SESSION[`user`] = [
            "id" => $user['id'],
            "Full_name" => $user['Full_name'],
            "Login" => $user['Login'],
            "Email" => $user['Email'],
            "password" => $user['Password']
        ];

        header('location: ../profile.php');
    }else{
        $_SESSION['Error'] ='неправельный логин или пароль';
        header('location: log.php');
    }

    