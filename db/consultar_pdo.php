<div class="titulo">PDO: Consultar</div>

<?php
error_reporting(E_ERROR); // mostrar somente erros e não advertencias
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * from cadastro";
// PDO::FETCH_NUM
// PDO::FETCH_ASSOC
// PDO::FETCH_CLASS
// PDO::FETCH_BOTH
$resultado = $conexao->query($sql)->fetchAll (PDO::FETCH_ASSOC); // fetchAll pega todos os registro - fecth pega só um
print_r($resultado); // mostra na tela os registro

echo "<hr>";

// outra maneira de fazer a consulta
$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);// param_int informa que o parametro é inteiro
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

// print_r(get_class_methods($stmt));

if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";
// outra maneira mas fazendo consulta por id
$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
// $stmt->bindValue(':id', 15);
// if($stmt->execute()) {
// if($stmt->execute([14])) {

if($stmt->execute([':id' => 1])) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

//$conexao->close();