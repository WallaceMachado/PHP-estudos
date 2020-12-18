<div class="titulo">Inserir Registro #01</div>

<?php
// dados inserido no php 
error_reporting(E_ERROR); // mostrar somente erros e não advertencias
require_once "conexao.php"; // se não encontrar dar erro

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES (
    'mara Miranda',
    '1998-09-01',
    'mara_andre@yahoo.com',
    'https://maraandre.io',
    0,
    19980.12
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();