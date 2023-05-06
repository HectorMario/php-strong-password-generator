<?php
$lettere = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
$numeri = "1234567890";
$simboli = "/*?=)(/&%$#!";
$limit = $_GET['lenght'];
$repeat = $_GET['repeat'];
$password = '';
$newArray = '';


    
    
    if(isset($_GET['lettere'])){
        $newArray .= $lettere;
    }
    if(isset($_GET['number'])){
        $newArray .= $numeri;
    }
    if(isset($_GET['simbol'])){
        $newArray .= $simboli;
    }

    if ($repeat == 'yes') {
        for ($i = 0; $i < $limit; $i++) {
            $numberRamdom = rand(0, strlen($newArray) - 1);
            $password .= $newArray[$numberRamdom];
        }
    } else {
        for ($i = 0; $i < $limit; $i++) {
            $numberRamdom = rand(0, strlen($newArray) - 1);
            if (!strpos($password, $newArray[$numberRamdom])) {
                $password .= $newArray[$numberRamdom];
            } else {
                $i--;
            }
        }
    }