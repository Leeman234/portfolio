<?php
    session_start();
    require_once 'connect.php';
    $Password = md5($_POST['Password']);
    if(array_key_exists('phoneOrEmail', $_POST)){
        $EmailOrPhone = $_POST['phoneOrEmail'];
        if(strpos($EmailOrPhone, '@')){
            $Email = $_POST['phoneOrEmail'];
        }else{
            $Phone = $_POST['phoneOrEmail'];
        }
    }else{
        $_SESSION['ErorEmailNull'] = 'Напишите свой телефон или почту';
        header('location: log.php');
    }
    if(isset($Phone)){
        $authentication = mysqli_query($connect, "SELECT * FROM `regs` WHERE `Phone` = '$Phone' AND `Password` = '$Password'");
        if(mysqli_num_rows($authentication) > 0){
            $regs = true;
        }else{
            $regs = False;
        }
    }
    if(isset($Email)){
        $authentication = mysqli_query($connect, "SELECT * FROM `regs` WHERE `Email` = '$Email' AND `Password` = '$Password'");
        if(mysqli_num_rows($authentication) > 0){
            $regs = true;
        }else{
            $regs = False;
        }
    }
    if($regs == true){
        setcookie('regs', $regs);
        $user = mysqli_fetch_assoc($authentication);
        if(array_key_exists('Full_name', $user)){
            if($user['Full_name'] != NULL){
                $Full_name = $user['Full_name'];
                setcookie('Full_name', $user['Full_name']);
                $Full_nameArr = explode(" ", $Full_name);
                $Name = $Full_nameArr[1];
            }else{
                $Name = 'Имя';
            }
        }else{
            $Name = 'Имя';
        }
        $_SESSION['user'] = [
            "Id" => $user['id'],
            "Full_name" => $user['Full_name'],
            "Name" => $Name,
            "Email" => $user['Email'],
            "Password" => $user['Password'],
            "City" => $user['City'],
            "Phone" => $user['Phone']
        ];
        $_SESSION['UserInfo'] = $user;
        header('location: kab.php');
    }else{
        $_SESSION['Error'] ='Указанные данные неправильные, пожалуйста, проверьте данные и повторите попытку ещё раз';
        header('location: log.php');
    }

    