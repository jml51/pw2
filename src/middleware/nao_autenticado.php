<?php   

    session_start();


    if(isset($_SESSION['id']) && isset($_COOKIE['id'])){
        $home_url = 'http://' . $_SERVER['HTTP_HOST'] . '/index.php';
        header('Location: ' . $home_url);
    }