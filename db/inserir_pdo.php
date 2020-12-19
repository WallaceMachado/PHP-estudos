<div class="titulo">PDO: Inserir</div>

<?php
error_reporting(E_ERROR); // mostrar somente erros e não advertencias
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
(nome, email, nascimento, site, filhos, salario)
VALUES (
    'Guilherme Filho',
    'guidagalera@gmail.com',
    '1998-7-21',
    'http://guidagalera.com.br',
    0,
    3000
)";

$conexao = novaConexao();
// print_r(get_class_methods($conexao)); // ver metodos de uma classe

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId(); // pegar o id
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}

//$conexao->close();