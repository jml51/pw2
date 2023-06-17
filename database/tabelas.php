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
        pass_word CHAR
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
    'pass_word' => '123456'

];

$utilizador['pass_word'] = password_hash($utilizador['pass_word'], PASSWORD_DEFAULT);


$sql = ('INSERT INTO utilizadores(
            nome,
            nif,
            email,
            foto,
            administrador,
            dono,
            pass_word)
        VALUES(
            :nome,
            :nif,
            :email,
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
        ':foto'          => $utilizador['foto'],
        ':administrador' => $utilizador['administrador'],
        ':dono'          => $utilizador['dono'],
        ':pass_word' => $utilizador['pass_word']
    ]);


?>