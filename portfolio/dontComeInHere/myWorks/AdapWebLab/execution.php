<?php
    session_start();
    require_once 'connect.php';
    if(array_key_exists('phoneOrEmail', $_POST)){
        if(strlen($_POST['phoneOrEmail'] > 0)){
            $pos = strpos($_POST['phoneOrEmail'], '@');
            if ($pos === false) {
                $Phone = $_POST['phoneOrEmail'];
            }else{
                $Email = $_POST['phoneOrEmail'];
            }
        }
    }
    if(array_key_exists('Password', $_POST)){
        if(array_key_exists('Password_proof', $_POST)){
            if($_POST['Password'] == $_POST['Password_proof']){
                $pass = $_POST['Password'];
                $uppercase = preg_match('@[A-Z]@', $pass);
                if($uppercase){
                    $A_Z = true;
                }else{
                    $_SESSION['PasswordA_Z'] = 'В пароле должны быть заглавные буквы<br>';
                    header('location: reg.php');
                }
                $lowercase = preg_match('@[a-z]@', $pass);
                if($lowercase){
                    $a_z = true;
                }else{
                    $_SESSION['Passworda_z'] = 'В пароле должны быть строчные буквы<br>';
                    header('location: reg.php');
                }
                $number = preg_match('@[0-9]@', $pass);
                if($number){
                    $num = true;
                }else{
                    $_SESSION['PasswordNum'] = 'В пароле должны быть цифры<br>';
                    header('location: reg.php');
                }
                if(strlen($pass) >= 8){
                    $quantity = true ;
                }else{
                    $_SESSION['Password'] = 'В пароле должно быть не меньше 8 символов<br>';
                    header('location: reg.php');
                }
                if($A_Z == true and $a_z == true and $num == true and $quantity == true){
                    $Password = $_POST['Password'];
                    $Password = md5($Password);
                }
            }else{
                $_SESSION['Password_proof'] = 'Пароли не совпадают<br>';
                header('location: reg.php');
            }
        }
    }
    if(isset($Password)){
        if(isset($Email)){
            $authentication = mysqli_query($connect, "SELECT * FROM `regs` WHERE `Email` = '$Email'");
            if(mysqli_num_rows($authentication) == 0){
                $code = rand(100000, 999999);
                setcookie('codeCookie', $code, time()+120);
                $mail = 'Привет, твой код подтверждения '.$code;
                if(mail($Email, 'Код подтверждения',$mail)){
                        $_SESSION['registration'] = [
                            "Email" => $Email,
                            "Password" => $Password
                        ];
                        header('location: Code.php');
                    }
            }else{
                $_SESSION['sameEmail'] = 'Данный Email уже используется';
                header('location: reg.php');
            }
        }
        if(isset($Phone)){
            include "smsc_api.php";
            $authentication = mysqli_query($connect, "SELECT * FROM `regs` WHERE `Phone` = '$Phone'");
            if(mysqli_num_rows($authentication) == 0){
                $code = rand(100000, 999999);
                setcookie('codeCookie', $code, time()+120);
                $mail = 'Привет, твой код подтверждения '.$code;
                send_sms($Phone, $mail);
                $_SESSION['registration'] = [
                    "Phone" => $Phone,
                    "Password" => $Password
                ];
                header('location: CodeP.php');
            }else{
                $_SESSION['sameEmail'] = 'Данный Телефон уже используется';
                header('location: reg.php');
            }
        }
    }
