<?php

require_once __DIR__. "/connect.php";

$pdo->exec('DROP TABLE IF EXISTS utilizadores;');

echo 'Tabela utilizadores apagada!' . PHP_EOL;

$pdo->exec(
    'CREATE TABLE utilizadores(
        id INTEGER PRIMARY KEY,
        nome CHAR,  
        nif CHAR,  
        email CHAR NOT NULL, 
        telemovel   INTEGER,
        foto CHAR NULL, 
        administrador CHAR, 
        dono CHAR,
        pass_word CHAR NOT NULL
    ); 
');










echo 'Tabela utilizadores creada!' . PHP_EOL;

$utilizador = [
    'nome'          => 'jose',
    'nif'           => '975864532',
    'email'         => 'jose@gmail.com',
    'telemovel'     => '962701260',
    'foto'          =>  null,
    'administrador' =>  true,
    'dono'          =>  true,
    'pass_word' => '123456'

];

$utilizador2 = [
    'nome'          => 'pedro',
    'nif'           => '123456789',
    'email'         => 'pedro@gmail.com',
    'telemovel'     => '962701260',
    'foto'          =>  null,
    'administrador' =>  false,
    'dono'          =>  false,
    'pass_word'     => '123456'

];

$utilizador['pass_word'] = password_hash($utilizador['pass_word'], PASSWORD_DEFAULT);
$utilizador2['pass_word'] = password_hash($utilizador2['pass_word'], PASSWORD_DEFAULT);


$sql = ('INSERT INTO utilizadores(
            nome,
            nif,
            email,
            telemovel,
            foto,
            administrador,
            dono,
            pass_word)
        VALUES(
            :nome,
            :nif,
            :email,
            :telemovel,
            :foto,
            :administrador,
            :dono,
            :pass_word)
        ');

    $post = $GLOBALS['pdo']->prepare($sql);

    $susseco = $post->execute([
        ':nome'          => $utilizador['nome'],
        ':nif'           => $utilizador['nif'],
        ':email'         => $utilizador['email'],
        ':telemovel'     => $utilizador['telemovel'],
        ':foto'          => $utilizador['foto'],
        ':administrador' => $utilizador['administrador'],
        ':dono'          => $utilizador['dono'],
        ':pass_word'       => $utilizador['pass_word']
    ]);

    $susseco = $post->execute([
        ':nome'          => $utilizador2['nome'],
        ':nif'           => $utilizador2['nif'],
        ':email'         => $utilizador2['email'],
        ':telemovel'     => $utilizador2['telemovel'],
        ':foto'          => $utilizador2['foto'],
        ':administrador' => $utilizador2['administrador'],
        ':dono'          => $utilizador2['dono'],
        ':pass_word'        => $utilizador2['pass_word']
    ]);




//---------------------         main-       -----------------------------------//






$pdo->exec('DROP TABLE IF EXISTS main;');


$pdo->exec(
    'CREATE TABLE main(
        id INTEGER PRIMARY KEY,
        titulo CHAR,
        texto1 CHAR,
        texto2 CHAR,
        texto3 CHAR,
        img1  CHAR,
        img2   CHAR,  
        img3   CHAR,  
        img4   CHAR    
    ); 
');

$sql = ('INSERT INTO main(
    titulo,
    texto1,
    texto2,
    texto3,
    img1,
    img2,  
    img3,  
    img4)
VALUES(
    :titulo,
    :texto1,
    :texto2,
    :texto3,
    :img1,
    :img2,
    :img3,
    :img4)
');



$index = [
    'titulo'    => 'Vilarinho da Furna',
    'texto1'    => 'A aldeia de Vilarinho da Furna era um lugar da freguesia de Campo do Gerês, situada na zona Nordeste do Concelho de Terras de Bouro. Esta aldeia foi submersa no início dos anos 70 e com ela grande riqueza etnográfica, que parcialmente está bem retratada na exposição do museu, sobretudo as actividades agro-silvo-pastoris, vivências e espírito comunitário do seu povo, das habitações e outras histórias do passado',
    'texto2'    => 'Vilarinho da Furna contínua a ser conhecida como “extinta aldeia comunitária”, submersa pelas águas da albufeira de Vilarinho das Furnas. Mas, nem tudo se extinguiu, pois, os vestígios que se conservam mantêm viva a memória deste espaço. Esta aldeia, perdida entre serras do Gerês e Amarela, não possui elementos que permitam datar o seu estabelecimento, sendo certo que há vestígios remotos de vida humana.',
    'texto3'    => 'Vilarinho da Furna foi uma aldeia comunitária, cujas origens se perdem nas brumas da memória. Desde 1971 que esta aldeia está submersa pela albufeira da barragem de Vilarinho da Furnas e com ela uma grande riqueza etnográfica. Contudo, quando a barragem é esvaziada para limpeza ou quando desce o nível das águas em períodos de seca, podem ver-se ainda as casas, os caminhos e os muros da antiga aldeia.',
    'img1'      => '/images/environment/Vilarinho-da-Furna.jpg',
    'img2'      => '/images/environment/transferir.jpeg',
    'img3'      => '/images/environment/logo-associao.png',
    'img4'      => 'images/environment/mapa.png'
    
];

$post = $GLOBALS['pdo']->prepare($sql);

    $susseco = $post->execute([
        ':titulo'    => $index['titulo'],
        ':texto1'    => $index['texto1'],
        ':texto2'    => $index['texto2'],
        ':texto3'    => $index['texto3'],
        ':img1'      => $index['img1'],
        ':img2'      => $index['img2'],
        ':img3'      => $index['img3'],
        ':img4'      => $index['img4']
    ]);



//---------------------         furna-       -----------------------------------//







    $pdo->exec('DROP TABLE IF EXISTS furna;');

    $pdo->exec(
        'CREATE TABLE furna(
            id INTEGER PRIMARY KEY,
            titulo CHAR,
            texto1 CHAR,
            texto2 CHAR,
            img1  CHAR
        ); 
    ');



$sql = ('INSERT INTO furna(
    titulo,
    texto1,
    texto2,
    img1)
VALUES(
    :titulo,
    :texto1,
    :texto2,
    :img1)
');



$furna = [
    'titulo'    => 'Associação AFURNA',
    'texto1'    => 'fundada em Outubro de 1985 AFURNA tem por objectivo a defesa, valorização e promoção do património cultural, colectivo e/ou <br> comunitário do antigo povo de Vilarinho da Furna',
    'texto2'    => 'Com sede no Museu Etnográfico de Vilarinho da Furna, “AFURNA Associação dos Antigos Habitantes de Vilarinho da Furna” é uma instituição cultural, dotada de personalidade jurídica, que tem como objetivo <br> a defesa, valorização e promoção do património cultural, coletivo e/ou comunitário, do antigo povo de Vilarinho da Furna, desenvolvendo atividades sociais para benefício dos ex-habitantes de Vilarinho da Furna e seus familiares. Desde a sua criação, em outubro de 1985, AFURNA tem, além das atividades ambientais, lutado pela preservação da história e da cultura desse povo tão peculiar.',
    'img1'      => '/images/environment/logo-associao.png'
];

$post = $GLOBALS['pdo']->prepare($sql);

    $susseco = $post->execute([
        ':titulo'    => $furna['titulo'],
        ':texto1'    => $furna['texto1'],
        ':texto2'    => $furna['texto2'],
        ':img1'      => $furna['img1']
    ]);








//---------------------         mapa-       -----------------------------------//

$pdo->exec('DROP TABLE IF EXISTS mapa;');

$pdo->exec(
    'CREATE TABLE mapa(
        id INTEGER PRIMARY KEY,
        titulo CHAR,
        texto1 CHAR,
        texto2 CHAR,
        img1  CHAR,
        img2  CHAR
    ); 
');


$sql = ('INSERT INTO mapa(
    titulo,
    texto1,
    texto2,
    img1,
    img2)
VALUES(
    :titulo,
    :texto1,
    :texto2,
    :img1,
    :img2)
');



$mapa = [
    'titulo'    => 'Vilarinho da Furna',
    'texto1'    => ' O acesso à zona onde a aldeia se encontra submersa é feito através de um caminho em terra batida de uso privado dos antigos habitantes de Vilarinho da Furna. O acesso de carro é por vezes possível durante os meses de verão, mediante o pagamento de uma taxa de acesso pela associação “A Furna”, de forma a promover a manutenção da memória dos hábitos e costumes da antiga aldeia. Durante o resto do ano, o acesso é apenas possível de forma pedonal.',
    'texto2'    => 'trilho que começa na barragem de Vilarinho das Furnas, a mesma que causou a inundação da aldeia, e segue a beira ria ate a  nossa esperada vial que é a primeira atração desta trilha mas não a única.',
    'img1'      => '/images/environment/Vilarinho-da-Furna.jpg',
    'img2'      => '/images/environment/trilha.png'
    
];

$post = $GLOBALS['pdo']->prepare($sql);

    $susseco = $post->execute([
        ':titulo'    => $mapa['titulo'],
        ':texto1'    => $mapa['texto1'],
        ':texto2'    => $mapa['texto2'],
        ':img1'      => $mapa['img1'],
        ':img2'      => $mapa['img2']
    ]);



?>