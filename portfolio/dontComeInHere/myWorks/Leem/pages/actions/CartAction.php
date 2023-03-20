<?php
    session_start();
    require_once '../registration/connect.php';
    if(isset($_SESSION['user'])){
        $id = $_SESSION[`user`]['id'];
    }else{
        $id = $_SESSION['idCoc'];
    }
    if(isset($_POST['del'])){
        $delId = $_POST['del'];
        echo($delId.'<br>'.$id);
        $sqlDel = "DELETE FROM cart WHERE UserId='$id' and productId = '$delId' ";
        if($connect->query($sqlDel)){
            //успех
        }
        else{
            echo "Ошибка: " . $conn->error;
        }
    }
    if(isset($_POST['plusAndMinusAndBrush'])){
        $plus = $_POST['plusAndMinusAndBrush'];
        $ValueAndId = explode(",", $plus);
        $id =  $ValueAndId['0'];
        $value = $ValueAndId['1'];
        echo($id);
        $updateSql = "UPDATE cart SET productScore='$value' WHERE UserId='$id' and productId = '$id'";
        if (mysqli_query($connect, $updateSql)){
        } else {
            echo "Error updating record: " . mysqli_error($connect);
        }
    }
?>