<?php
        session_start();
        ob_start();
        var_dump($_POST);
        if(isset($_POST['profile'])){
            $_SESSION['del'] = 'del';
            if($_POST['profile'] === 'Главная') {
                header('location: ../../dip.php');
            }
            if($_POST['profile'] === 'Товары') {
                header('location: ../dipProducts.php');
            }
            if($_POST['profile'] === 'Корзина') {
                header('location: ../Cart.php');
            }
        }
        if(isset($_POST['Exit'])){
            unset($_SESSION['del']);
            header('location: ../../dip.php');
        }
        ob_end_flush();
?>