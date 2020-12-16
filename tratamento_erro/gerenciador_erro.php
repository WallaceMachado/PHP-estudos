<div class="titulo">Error Handler</div>

<?php
ini_set('display_errors', 1); // mostrar erros na tela
// echo 4 / 0 . '<br>';

error_reporting(E_ERROR);  // mostrar somente erros e não advertencias
// echo 4 / 0 . '<br>';

error_reporting(E_ALL); // mostrar eros e advertencias
// echo 4 / 0 . '<br>';

error_reporting(~E_ALL); // não mostrar nenhum erro
echo 4 / 0 . '<br>';

echo '<hr>';

error_reporting(E_ALL);
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

function filtrarMensagem($errno, $errstring) {
    $text = 'include';
     $text = 'by zero';
    return !!stripos(" $errstring", $text);
}

// setar gerenciador de erro WARNING é o nivel de criticidade desejavem
set_error_handler('filtrarMensagem', E_WARNING);

echo '<hr>';
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

echo '<hr>';

restore_error_handler(); // restaura o genrenciado de erros sem filtro

echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';