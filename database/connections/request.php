<?php

    require_once __DIR__."/../connect.php";




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



function atual_main($dados){
        $sql = "UPDATE main SET
            titulo    = :titulo,
            texto1    = :texto1,
            texto2    = :texto2,        
            texto3    = :texto3,
            img2      = :img2 
        WHERE id = 1;";

    $update = $GLOBALS['pdo']->prepare($sql);

    return $update->execute([
        ':titulo'    => $dados['titulo'],
        ':texto1'    => $dados['texto1'],
        ':texto2'    => $dados['texto2'],        
        ':texto3'    => $dados['texto3'],
        ':img2'      => $dados['img2']        
                       
    ]); 

}



function atual_furna($dados){
    $sql = "UPDATE furna SET
        titulo    = :titulo,
        texto1    = :texto1,
        texto2    = :texto2,
        img1        = :img1         
             
    WHERE id = 1;";

$update = $GLOBALS['pdo']->prepare($sql);

return $update->execute([
    ':titulo'    => $dados['titulo'],
    ':texto1'    => $dados['texto1'],
    ':texto2'    => $dados['texto2'],
    ':img1'      => $dados['img1']      
        
]); 

}




function atual_mapa($dados){
    $sql = "UPDATE mapa SET
        titulo    = :titulo,
        texto1    = :texto1,
        texto2    = :texto2,
        img2    = :img2        
             
    WHERE id = 1;";

$update = $GLOBALS['pdo']->prepare($sql);

return $update->execute([
    ':titulo'    => $dados['titulo'],
    ':texto1'    => $dados['texto1'],
    ':img2'      => $dados['img2']
        
                
]); 

}








 



