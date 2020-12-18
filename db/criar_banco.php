<div class="titulo">Criar Banco</div>

<?php
// a conexão foi criado no workbanch e a porta foi alterada para 3307
error_reporting(E_ERROR);  // mostrar somente erros e não advertencias

require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();