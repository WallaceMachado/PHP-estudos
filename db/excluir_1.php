<div class="titulo">Excluir Registro #01</div>

<?php
error_reporting(E_ERROR);  // mostrar somente erros e não advertencias

require_once "conexao.php";

$sql = "DELETE FROM cadastro WHERE id = 3";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();