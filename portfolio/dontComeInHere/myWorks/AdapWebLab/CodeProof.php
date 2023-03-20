<?php
    session_start();
    require_once 'connect.php';
    if(isset($_POST['code']) and isset($_POST['codeP'])){
        if($_POST['code'] == $_COOKIE['codeCookieP']){
            if($_POST['codeP'] == $_COOKIE['codeCookieE']){
                $Email = $_SESSION['modificationEmail'];
                $Phone = $_SESSION['modificationPhone'];
                $id = $_SESSION['modificationId'];
                $updateSql = "UPDATE regs SET Email='$Email',Phone='$Phone'  WHERE id=$id";
                if (mysqli_query($connect, $updateSql)) {
                    $_SESSION['modifications'] = 'Данные успешно изменены';
                    header('location: log.php');
                }else{
                    echo "Error updating record: " . mysqli_error($connect);
                }
            }
        }
    }else{
        if(isset($_POST['code'])){
            $RefKey = crypt(rand(100,999).$Email, 'rl');
            if($_POST['code'] == $_COOKIE['codeCookie']){
                if(array_key_exists('modificationEmail', $_SESSION)){
                    $Email = $_SESSION['modificationEmail'];
                    $id = $_SESSION['modificationId'];
                    $updateSql = "UPDATE regs SET Email='$Email' WHERE id=$id";
                    if (mysqli_query($connect, $updateSql)) {
                        $_SESSION['modifications'] = 'Данные успешно изменены';
                        header('location: log.php');
                    }else{
                        echo "Error updating record: " . mysqli_error($connect);
                    }
                }else{
                    $Email = $_SESSION['registration']['Email'];
                    $Password = $_SESSION['registration']['Password'];
                    mysqli_query($connect,"
                    INSERT INTO `regs` (`id`, `Full_name`, `Email`, `Phone`, `City`, `Password`,`KeyProof`,`RefKey`)
                    VALUES (NULL, NULL, '$Email', NULL, NULL, '$Password',NULL,'$RefKey')");
                    $_SESSION['reg'] = 'Регистрация прошла успешно';
                    header('location: log.php');
                }
            }else{
            $codefail = 'Неправильный код или срок действия кода истёк';
            setcookie('codefail', $codefail);
            header('location: Code.php');
        }
        }
        if(isset($_POST['codeP'])){
            if($_POST['codeP'] == $_COOKIE['codeCookie']){
                if(array_key_exists('modificationPhone', $_SESSION)){
                    $Phone = $_SESSION['modificationPhone'];
                    $RefKey = crypt(rand(100,999).$Phone, 'rl');
                    $id = $_SESSION['modificationId'];
                    $updateSql = "UPDATE regs SET Phone='$Phone' WHERE id=$id";
                    if (mysqli_query($connect, $updateSql)) {
                        $_SESSION['modifications'] = 'Данные успешно изменены';
                        header('location: log.php');
                    }else{
                        echo "Error updating record: " . mysqli_error($connect);
                    }
                }else{
                    $Phone = $_SESSION['registration']['Phone'];
                    $Password = $_SESSION['registration']['Password'];
                    $RefKey = crypt(rand(100,999).$Phone, 'rl');
                    mysqli_query($connect,"
                    INSERT INTO `regs` (`id`, `Full_name`, `Email`, `Phone`, `City`, `Password`,`KeyProof`,`RefKey`)
                    VALUES (NULL, NULL, NULL, '$Phone', NULL, '$Password', NULL,'$RefKey')");
                    $_SESSION['reg'] = 'Регистрация прошла успешно';
                    header('location: log.php');
                } 
            }else {
            $codefail = 'Неправильный код или срок действия кода истёк';
            setcookie('codefail', $codefail);
            header('location: CodeP.php');
        }
        }
    }
?>