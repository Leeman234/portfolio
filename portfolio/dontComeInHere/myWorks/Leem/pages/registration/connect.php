<?php
    
    $connect = mysqli_connect('localhost','u1804488_leeman','LeemPoop222','u1804488_leem');

    if(!$connect){
        die('неудалось связатся с базой данных');
    }