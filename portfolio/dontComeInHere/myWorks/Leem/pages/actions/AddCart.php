<?php
    session_start();
    require_once '../registration/connect.php';
    require_once '../functions/function.php';
    foreach($_POST as $key => $value){
        if(isset($_SESSION[`user`])){
            $id = $_SESSION[`user`]['id'];
        }else{
            if(isset($_SESSION['idCoc'])){
                $id = $_SESSION['idCoc'];
            }else{
                do{
                    $id = '404'.rand(10000,999999);
                    $_SESSION['idCoc'] = $id;
                }while(mysqli_num_rows(mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$id'")) > 0);
            }
        }
        $IsThereProductId = mysqli_query($connect, "SELECT * FROM `cart` WHERE `UserId` = '$id' AND `productId` = '$key'");
        if(mysqli_num_rows($IsThereProductId) == 1){
            $userProduct = mysqli_fetch_assoc($IsThereProductId);
            $Product = mysqli_query($connect, "SELECT * FROM `products` WHERE `Id` = '$key'");
            $productScoreMax = mysqli_fetch_assoc($Product)['availability'];
            if($userProduct['productScore'] + $value <= $productScoreMax){
                $value = $userProduct['productScore'] + $value;
            }else{
                $value = $productScoreMax;
            }
            $updateSql = "UPDATE cart SET productScore='$value' WHERE UserId='$id' and productId = '$key'";
            if (mysqli_query($connect, $updateSql)){
            } else {
                echo "Error updating record: " . mysqli_error($connect);
            }
        }else{
            mysqli_query($connect,"INSERT INTO `cart` (`UserId`, `productId`, `productScore`) VALUES ('$id','$key','$value')");
        }
    }
?>