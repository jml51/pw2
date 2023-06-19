<?php


require_once __DIR__ . '/../../src/utils/auxiliadores.php';


if (!autenticado()) {
    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . '/index.php';
    header('Location: ' . $home_url);
}
