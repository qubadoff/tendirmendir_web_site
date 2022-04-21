<?php
    $get = $_GET['get'];
    switch($get) {
        default:
        echo "Menu System !";
        break;
    

    case "fb":
        header("Location: //facebook.com/tendirmendirbaku/");
    break;

    case "ig":
        header("Location: //instagram.com/tendirmendirbaku/");
    break;

    }