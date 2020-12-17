<div class="titulo">Escrever Arquivo</div>

<?php
//error_reporting(E_ERROR);  // mostrar somente erros e não advertencias

$arquivo = fopen('teste.txt', 'w');// fopen abre um arquivo no modo escrever W write - cria o arquivo e sobreescreve caso já exista

fwrite($arquivo, "Valor inicial\n");// escrevendo no arquivo criado \n para quebrar linha
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);// fechar o arquivo

$arquivo = fopen('teste.txt', 'w'); // abre o arquivo em branco
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a'); // abre arquivo e adiciona ao conteudo existente A= apppend
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);

ini_set('display_errors', 1);// mostrar erros
$arquivo = fopen('teste.txt', 'x'); // x verifica se existe arquivo e cria novo, se existir da erro