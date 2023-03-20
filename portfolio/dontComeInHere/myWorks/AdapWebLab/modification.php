<?php
    session_start();
    require_once 'connect.php';
    if(array_key_exists('full_name', $_POST)){
        if($_POST['full_name'] == ''){

        }else{
            $Full_nameArr = explode(" ", $_POST['full_name']);
            if(count($Full_nameArr) === 2 or count($Full_nameArr) === 3){
                if(!preg_match("/[0-9]/", $_POST['full_name'])){
                    $Full_name = $_POST['full_name'];
                }else{
                    $_SESSION['ErorFIOch'] = 'Серьёзно ? В твоём ФИО есть цифры ?';
                    header('location: change.php');
                }
            }else{
                $_SESSION['ErorFIO'] ='Введите Фамилию Имя и Отчество при его наличии';
                header('location: change.php');
            }
        }
    }if(array_key_exists('city', $_POST)){
        $City = $_POST['city'];
    }
    if(array_key_exists('email', $_POST)){
        $Email = $_POST['email'];
    }
    if(array_key_exists('phone', $_POST)){
        if(!preg_match("/[A-Za-z]/", $_POST['phone'])){
            $Phone = $_POST['phone'];
        }else{
            $_SESSION['ErorPhone'] = 'Буквы ? В телефоне ? Интереснооо.......';
            header('location: change.php');
        }
    }
    if(array_key_exists("Password", $_SESSION['user'])){
        if($_POST['PasswordOld'] != ''){
            if($_POST['PasswordNew'] == ''){
                $_SESSION['PasswordA_Z'] = 'Введите новый пароль<br>';
                header('location: change.php');
            }else{
                $p = $_POST['PasswordOld'];
                $p = md5($p);
                if($_SESSION['user']["Password"] == $p){
                    if(array_key_exists('PasswordNew', $_POST)){
                        if(array_key_exists('Password_proof', $_POST)){
                            if($_POST['PasswordNew'] == $_POST['Password_proof']){
                                $pass = $_POST['PasswordNew'];
                                $uppercase = preg_match('@[A-Z]@', $pass);
                                if($uppercase){
                                    $A_Z = true;
                                }else{
                                    $_SESSION['PasswordA_Z'] = 'В пароле должны быть заглавные буквы<br>';
                                    header('location: change.php');
                                }
                                $lowercase = preg_match('@[a-z]@', $pass);
                                if($lowercase){
                                    $a_z = true;
                                }else{
                                    $_SESSION['Passworda_z'] = 'В пароле должны быть строчные буквы<br>';
                                    header('location: change.php');
                                }
                                $number = preg_match('@[0-9]@', $pass);
                                if($number){
                                    $num = true;
                                }else{
                                    $_SESSION['PasswordNum'] = 'В пароле должны быть цифры<br>';
                                    header('location: change.php');
                                }
                                if(strlen($pass) >= 8){
                                   $quantity = true;
                                }else{
                                    $_SESSION['Password'] = 'В пароле должно быть не меньше 8 символов<br>';
                                   header('location: change.php');
                                }
                                if($A_Z == true and $a_z == true and $num == true and $quantity == true){
                                    $password = md5($pass);
                                }
                            }else{
                               $_SESSION['Password_proof'] = 'Пароли не совпадают<br>';
                                header('location: change.php');
                            }
                        }
                    }
                }else {
                    $_SESSION['PasswordОld'] = 'Старый пароль не совпадает с тем что ввели вы';
                    header('location: change.php');
                }
            }
        }   
    }
    if($_POST['PasswordNew'] != '' or $_POST['Password_proof'] != ''){
        if($_POST['PasswordOld'] == ''){
            $_SESSION['PasswordNotOld'] = 'Сначала введи старый пароль<br>';
            header('location: change.php');
        }
    }
    $user = $_SESSION['user'];
    if(!isset($Full_name)){
        $Full_name = $user['Full_name'];
    }
    if(!isset($City) or $City == ''){
        $City = $user['City'];
    }
    if(!isset($Phone) or $Phone == ''){
        $Phone = $user['Phone'];
    }
    if(!isset($Email) or $Email == ''){
        $Email = $user['Email'];
    }
    if(!isset($password) or $password == ''){
        $password = $user['Password'];
    }
    if(isset($City) and isset($Full_name) and isset($password) and $Email == $user['Email'] and $Phone == $user['Phone']){
        $updateSql = "UPDATE regs SET City='$City',Full_name='$Full_name',Password='$password' WHERE id=$user[Id]";
        if (mysqli_query($connect, $updateSql)) {
            $_SESSION['modifications'] = 'Данные успешно изменены';
            header('location: log.php');
        } else {
            echo "Error updating record: " . mysqli_error($connect);
        }
    }
    if(isset($City) and isset($Full_name) and isset($password) and $Email != $user['Email'] and $Phone != $user['Phone']){
        $updateSql = "UPDATE regs SET City='$City',Full_name='$Full_name',Password='$password' WHERE id=$user[Id]";
        if (mysqli_query($connect, $updateSql)){
        } else {
            echo "Error updating record: " . mysqli_error($connect);
        }
        $_SESSION['modificationEmail'] = $Email;
        $_SESSION['modificationId'] = $user['Id'];
        $codeE = rand(100000, 999999);
        setcookie('codeCookieP', $codeE, time()+1200);
        $mailE = 'Привет, твой код подтверждения '.$codeE;
        if(mail($Email, 'Код подтверждения',$mailE)){
            include "smsc_api.php";
            $_SESSION['modificationPhone'] = $Phone;
            $_SESSION['modificationId'] = $user['Id'];
            $codeP = rand(100000, 999999);
            setcookie('codeCookieE', $codeP, time()+1200);
            $mailP = 'Привет, твой код подтверждения '.$codeP;
            send_sms($Phone, $mailP);
            header('location: CodePandE.php');
        }
    }else{
        if(isset($City) and isset($Full_name) and isset($password) and $Email != $user['Email']){
            $updateSql = "UPDATE regs SET City='$City',Full_name='$Full_name',Password='$password' WHERE id=$user[Id]";
            if (mysqli_query($connect, $updateSql)){
            } else {
                echo "Error updating record: " . mysqli_error($connect);
            }
            $_SESSION['modificationEmail'] = $Email;
            $_SESSION['modificationId'] = $user['Id'];
            $code = rand(100000, 999999);
            setcookie('codeCookie', $code, time()+1200);
            $mail = 'Привет, твой код подтверждения '.$code;
            if(mail($Email, 'Код подтверждения',$mail)){
                header('location: Code.php');
            }
        }
        if(isset($City) and isset($Full_name) and isset($password) and $Email == $user['Email'] and $Phone != $user['Phone']){
            include "smsc_api.php";
            $updateSql = "UPDATE regs SET City='$City',Full_name='$Full_name',Password='$password' WHERE id=$user[Id]";
            if (mysqli_query($connect, $updateSql)){
            } else {
                echo "Error updating record: " . mysqli_error($connect);
            }
            $_SESSION['modificationPhone'] = $Phone;
            $_SESSION['modificationId'] = $user['Id'];
            $code = rand(100000, 999999);
            setcookie('codeCookie', $code, time()+1200);
            $mail = 'Привет, твой код подтверждения '.$code;
            send_sms($Phone, $mail);
            header('location: CodeP.php');
        }
    }
?>