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
        foto CHAR NULL, 
        administrador CHAR, 
        dono CHAR,
        palavra_passe CHAR
    ); 
');

echo 'Tabela utilizadores creada!' . PHP_EOL;

$utilizador = [
    'nome'          => 'jose',
    'nif'           => '975864532',
    'email'         => 'jose@gmail.com',
    'foto'          => null,
    'administrador' => true,
    'dono'          => true,
    'palavra_passe' => '123456'

];

$utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);


$sql = ('INSERT INTO utilizadores(
            nome,
            nif,
            email,
            foto,
            administrador,
            dono,
            palavra_passe)
        VALUES(
            :nome,
            :nif,
            :email,
            :foto,
            :administrador,
            :dono,
            :palavra_passe)
        ');

    $post = $GLOBALS['pdo']->prepare($sql);

    $susseco = $post->execute([
        ':nome'          => $utilizador['nome'],
        ':nif'           => $utilizador['nif'],
        ':email'         => $utilizador['email'],
        ':foto'          => $utilizador['foto'],
        ':administrador' => $utilizador['administrador'],
        ':dono'          => $utilizador['dono'],
        ':palavra_passe' => $utilizador['palavra_passe']
    ]);


?>