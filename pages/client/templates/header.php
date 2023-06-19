<?php 
        session_start();

        $page = $_SERVER['PHP_SELF'];

        include_once __DIR__ . '/../../../src/utils/auxiliadores.php';

        $utilizador = utilizador();
?>
<!DOCTYPE html> 
<html lang="en">
<head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="icon" type="image/x-icon" href="/images/environment/logo-associao.png">
        
        <title>Furna.PW</title>
        
</head>