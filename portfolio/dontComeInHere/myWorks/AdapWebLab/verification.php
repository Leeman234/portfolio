<?php
    session_start();
    require_once 'connect.php';
    if(array_key_exists('EmailProof', $_GET)){
        $Email = $_GET['EmailProof'];
        $authentication = mysqli_query($connect, "SELECT * FROM `regs` WHERE `Email` = '$Email'");
        setcookie('EmailGet',$Email, time()+120);
    }
    if(array_key_exists('PhoneProof', $_GET)){
        $Phone = $_GET['PhoneProof'];
        $authentication = mysqli_query($connect, "SELECT * FROM `regs` WHERE `Phone` = '$Phone'");
        setcookie('EmailGet',$Phone, time()+120);
    }
    if(isset($authentication)){
        if(mysqli_num_rows($authentication) == 1){
            $user = mysqli_fetch_assoc($authentication);
            $Full_name = $user['Full_name'];
            $key = md5($Full_name.rand(1000,9999));
            $updateSql = "UPDATE regs SET KeyProof='$key' WHERE id=$user[id]";
            if (mysqli_query($connect, $updateSql)) {
                $siteUrl = 'https://project420.kndesign.ru/';
                $url = $siteUrl.'newPass.php?key='.$key;
                $message = 'Привет '.$Full_name.' в Проекте420 поступила заявка на изменение пароля<br>
                если это были вы то перейдите по ссылке '.$url.' если же нет то проигнарируйте данноe сообщение';
                if(array_key_exists('EmailProof', $_GET)){
                    if(mail($Email, 'Запрос на смену пароля',$message)){
                        $_SESSION['GoodEmailProof'] ='Письмо отправленно вам на почту';
                        header('location: EmailProof.php');
                    }
                }
                if(array_key_exists('PhoneProof', $_GET)){
                    include "smsc_api.php";
                    send_sms($Phone,$message);
                    $_SESSION['GoodPhoneProof'] ='Cообщение отправленно вам на телефон';
                    header('location: PhoneProof.php');
                }
            } else {
                echo "Error updating record: " . mysqli_error($connect);
            }
            
        }else{
            if(array_key_exists('EmailProof', $_GET)){
                $_SESSION['ErrorProof'] ='такой Еmail не зарегистрирован';
                header('location: EmailProof.php');
            }
            if(array_key_exists('PhoneProof', $_GET)){
                $_SESSION['PhoneProof'] ='такой Телефон не зарегистрирован';
                header('location: PhoneProof.php');
            }   
        }
    }else{
        if(array_key_exists('EmailProof', $_GET)){
            $_SESSION['ErrorProof'] ='такой Еmail не зарегистрирован';
            header('location: EmailProof.php');
        }
        if(array_key_exists('PhoneProof', $_GET)){
            $_SESSION['PhoneProof'] ='такой Телефон не зарегистрирован';
            header('location: PhoneProof.php');
        }
    }
?>
