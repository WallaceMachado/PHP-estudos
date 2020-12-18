<?php
// a conexão foi criado no workbanch e a porta foi alterada para 3307
function novaConexao($banco = 'curso_php') {
    $servidor = '127.0.0.1:3307'; // se tiver configurado para a porta 3306 não precisa explicitar como esta a 3307
    $usuario = 'root';
    //$senha = 'root';

    // parametros para criar conexao
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // verificar se a conexo foi feita, no mundo real deverá ser tratado o erro a parte
    if($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}