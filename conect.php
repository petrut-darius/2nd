<?php 

    $conect = mysqli_connect('localhost' , 'root' , '' , 'login');
        if(!$conect){
            die('conectare la baza de date nu a reusit, nu te speria problema e de la noi!');
        }else {
            echo 'E numa bine';
        }