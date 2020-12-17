<div class="titulo">Ler Arquivo</div>

<?php
error_reporting(E_ERROR);  // mostrar somente erros e não advertencias
$arquivo = fopen('teste.txt', 'r'); // abre o arquivo , r = read ler o arquivo
echo fread($arquivo, 10);// quantidade de byte que quer ler o arquivo
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';
// ler aquivo todo de uma vez
$arquivo = fopen('teste.txt', 'r');// abre e le o arquivo
$tamanho = filesize('teste.txt');// retorna  o tamanho do arquivo em byte
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);// le o arquivo até o tamanho, ou seja le o arquivo todo
fclose($arquivo);

echo '<hr>';
// le arquivo linha a linha
$arquivo = fopen('teste.txt', 'r'); // abre e le o arquivo
echo fgets($arquivo), '<br>';// ler a primeira linha
echo fgets($arquivo), '<br>';// le a segunda linha
var_dump(fgets($arquivo));// retorna falso pq mão tem a terceira linha no arquivo
echo '<br>';
fclose($arquivo); // fechar

echo '<hr>';

// outro metodo para ler linha a linha 
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) { // equanto o arquivo não chegou no final
    echo fgets($arquivo), '<br>'; //fgets leia a linha
}
fclose($arquivo);

echo '<hr>';

// ler cactere por caractere
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo); //fgetc faz ler por caractere
}
echo '<br>';
fclose($arquivo);

echo '<hr>';


// ler e adicionar linha
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionado durante a leitura");
fclose($arquivo);

echo "Fim!";