<?php
    
    $connect = mysqli_connect('localhost','root','root','registration');

    if(!$connect){
        print('Не удалось связаться с базой данных');
    }