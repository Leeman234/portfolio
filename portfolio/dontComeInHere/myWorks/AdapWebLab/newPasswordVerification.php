<?php
    session_start();
    require_once 'connect.php';
    $key = $_POST['key'];
    $siteUrl = 'https://project420.kndesign.ru/';
    $url = $siteUrl.'newPass.php?key='.$key;
    $keyInBD = mysqli_query($connect, "SELECT * FROM `regs` WHERE `keyProof` = '$key'");
    if(mysqli_num_rows($keyInBD) == 1){
        $user = mysqli_fetch_assoc($keyInBD);
    }
    if(array_key_exists('newPassword', $_POST)){
        if(array_key_exists('proofNewPassword', $_POST)){
            if($_POST['newPassword'] == $_POST['proofNewPassword']){
                $pass = $_POST['newPassword'];
                $uppercase = preg_match('@[A-Z]@', $pass);
                    if($uppercase){
                        $A_Z = true;
                    }else{
                        $_SESSION['PasswordA_Z'] = 'В пароле должны быть заглавные буквы<br>';
                        header('location:'.$url);
                    }
                    $lowercase = preg_match('@[a-z]@', $pass);
                    if($lowercase){
                        $a_z = true;
                    }else{
                        $_SESSION['Passworda_z'] = 'В пароле должны быть строчные буквы<br>';
                        header('location:'.$url);
                    }
                    $number = preg_match('@[0-9]@', $pass);
                    if($number){
                        $num = true;
                    }else{
                        $_SESSION['PasswordNum'] = 'В пароле должны быть цифры<br>';
                        header('location:'.$url);
                    }
                    if(strlen($pass) >= 8){
                        $quantity = true;
                    }else{
                        $_SESSION['Password'] = 'В пароле должно быть не меньше 8 символов<br>';
                        header('location:'.$url);
                    }
                    if($A_Z == true and $a_z == true and $num == true and $quantity == true){
                        $password = md5($pass);
                    }
                }else{
                    $_SESSION['proofNewPassword'] = 'Пароли не совпадают<br>';
                    header('location:'.$url);
                }
            }
        }
    $updateSql = "UPDATE regs SET Password='$password' WHERE id=$user[id]";
        if (mysqli_query($connect, $updateSql)) {
            $_SESSION['modification'] = [
                "phrase" => 'Данные успешно изменены',
                "id" => $user['id']
            ];
            header('location: log.php');
        } else {
            echo "Error updating record: " . mysqli_error($connect);
        }
?>