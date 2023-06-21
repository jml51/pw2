<?php

    require_once __DIR__."/connect.php";




function  index(){

    $sql = 'SELECT*FROM main WHERE id = 1;';

    $get =$GLOBALS['pdo']->query($sql);

    $get->execute();

    return $get->fetch();

}


function  furna(){

    $sql = 'SELECT*FROM furna WHERE id = 1;';

    $get =$GLOBALS['pdo']->query($sql);

    $get->execute();

    return $get->fetch();
}



function  mapa(){

    $sql = 'SELECT*FROM mapa WHERE id = 1;';

    $get =$GLOBALS['pdo']->query($sql);

    $get->execute();

    return $get->fetch();

}

