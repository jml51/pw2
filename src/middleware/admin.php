<?php 

session_start();

require_once __DIR__.'/../../src/utils/auxiliadores.php';

if(!admin()){
    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . '/index.php';
    header('Location: ' . $home_url);
}