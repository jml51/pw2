<?php


function val_utilizador($data){

    foreach($data as $key => $value){
        $data[$key] = trim($data[$key]);
    }

    if(empty($data['nome']) || strlen($data['nome']) < 4  ){
        $erros['nome'] = 'O seu nome é obrigatorio e tem de ter entre 4 a 10 caracteres';
    }

    if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL) ){
        $erros['email'] = 'O seu email é obrigatorio e tem de ser valido';
    }

    if(!filter_var($data['nif'],  FILTER_VALIDATE_INT) || strlen($data['nif']) != 9 ){
        $erros['nif'] = 'O seu nif nao pode estar vazio e tem de ter 9 caracteres';
    }

    if(!filter_var($data['telemovel'],  FILTER_VALIDATE_INT) || strlen($data['telemovel']) != 9){
        $erros['conf_pass'] = 'O seu nif nao pode estar vazio e tem de ter 9 caracteres';
    }

    if (isset(($_FILES['foto']['name'])) && ($_FILES['foto']['error'] == UPLOAD_ERR_OK)) {

        # DEFINE A LARGURA MÁXIMA DO FICHEIRO
        $largura = 1024;

        # DEFINE A ALTURA MÁXIMA DO FICHEIRO
        $altura = 1024;

        # DEFINE O TAMANHO MÁXIMO DO FICHEIRO EM PIXEL
        $tamanho = 1000000;

        # PEGA AS DIMENSÕES DO FICHEIRO
        $dimensoes = getimagesize($_FILES['foto']["tmp_name"]);

        # VERIFICA SE O FICHEIRO É UMA IMAGEM
        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif)$/", ($_FILES['foto']['type']))) {
            $erros['foto_formato']  = 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"';
        }

        # VERIFICA SE A LARGURA DA IMAGEM É MAIOR QUE A DEFINIDA
        if ($dimensoes[0] > $largura) {
            $erros['foto_largura'] = "A largura da foto não deve ultrapassar " . $largura . " pixels";
        }

        # VERIFICA SE A ALTURA DA IMAGEM É MAIOR QUE A ALTURA PERMITIDA
        if ($dimensoes[1] > $altura) {
            $erros['foto_altura'] = "A altura da foto não deve ultrapassar " . $altura . " pixels";
        }

        # VERIFICA SE O TAMANHO DA IMAGEM É MAIOR QUE O TAMANHO EM PIXEL PERMITIDO
        if ($_FILES['foto']["size"] > $tamanho) {
            $erros['foto_bytes'] = "A foto deve ter no máximo 1 Mb";
        }
    }

        
        if (!empty($data['palavra_passe']) && strlen($data['palavra_passe']) < 6) {
            $erros['palavra_passe'] = 'O campo Palavra Passe não pode estar vazio e deve ter no mínio 6 caracteres.';
        }
    
    
        if (!empty($data['confirmar_palavra_passe']) && ($data['confirmar_palavra_passe']) != $data['palavra_passe']) {
            $erros['confirmar_palavra_passe'] = 'O campo Confirmar Palavra Passe não pode estar vazio e deve ser igual ao campo Palavra Passe.';
        }
    
        
        $data['administrador'] = !empty($data['administrador']) == 'on' ? true : false;
    
    
        # RETORNA ERROS
        if (isset($erros)) {
            return ['invalido' => $erros];
        }

        return $data;

}

