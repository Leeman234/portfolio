<?php
    session_start();
    if(isset($_POST["Checkt"])){
        $Checkt = TRUE;
    }else{
        $Checkt = FALSE;
        $_SESSION['Checkt'] ='red';
        header('location: Contact.php#discussion');
    }

    if(strlen($_POST["Select"] > 0)){
        $Select = $_POST["Select"];
    }else{  
        $_SESSION['Select'] ='red';
        header('location: Contact.php#discussion');
    } 
    if(strlen($_POST["Description"] > 0)){
        $Description = $_POST["Description"];
    }
    if(strlen($_POST["Referral"] > 0)){
        $Referral = $_POST["Referral"];
    }
    if(strlen($_POST['FIO'] > 0)){
        $FIO = $_POST['FIO'];
    }else{
        $_SESSION['FIONull'] ='red';
        header('location: Contact.php#discussion');
    }
    if(strlen($_POST['Phone'] > 0)){
        $Phone = $_POST['Phone'];
    }else{
        $_SESSION['Phone'] ='red';
        header('location: Contact.php#discussion');
    }
    if(strlen($_POST['Email'] > 0)){
        $Email = $_POST['Email'];
    }else{
        $_SESSION['Email'] ='red';
        header('location: Contact.php#discussion');
    }
    if (isset($FIO) and isset($Phone) and isset($Email)){
        echo('я хз чо ты делаешь на этой станичке но могу показать данные которые ты ввёл<br>');
        print($FIO.'<br>');
        print($Phone.'<br>');
        print($Email.'<br>');
        if(isset($Select)){
            print($Select.'<br>');
        }
        if(isset($Description)){
            print($Description.'<br>');
        }
        if(isset($Referral)){
            print($Referral.'<br>');
        }
    }
?>