<?php
$lettere = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
$numeri = "1234567890";
$simboli = "/*?=)(/&%$#!";
$limit = $_GET['lenght'];
$repeat = $_GET['repeat'];
$password = '';
$newArray = [];
$newString = '';
    
    
    if(isset($_GET['lettere'])){
        $newString .= $lettere;
    }
    if(isset($_GET['number'])){
        $newString .= $numeri;
    }
    if(isset($_GET['simbol'])){
        $newString .= $simboli;
    }

    if ($repeat == 'yes') {
        for ($i = 0; $i < $limit; $i++) {
            $numberRamdom = rand(0, strlen($newString) - 1);
            $password .= $newString[$numberRamdom];
        }
    } else {
        $passwordArray = array($newString[0]);
        for ($i = 1; $i < $limit; $i++) {
            $random = rand(0, strlen($newString) - 1);
            if (!in_array($newString[$random], $passwordArray)) {
                array_push($passwordArray, $newString[$random]);
            } else {
                $i--;
            }
        }
        $password = implode($passwordArray);
    }