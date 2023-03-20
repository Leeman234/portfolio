<?php
    require_once '../registration/connect.php';
    require_once '../functions/function.php';
    if(isset($_POST['Product'])){
        $key = $_POST['Product'];
        $Products = mysqli_query($connect, "SELECT * FROM `products` WHERE `code` = '$key'");
            if(mysqli_num_rows($Products) > 0){
                while($Product = mysqli_fetch_assoc($Products)){
                    ProductPrint($Product);
                }
            }
        }
?>