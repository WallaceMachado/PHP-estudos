<div class="titulo">Download</div>

<?php 
error_reporting(E_ERROR);  // mostrar somente erros e não advertencias
session_start();

$arquivos = $_SESSION['arquivos'] ?? [];// inicia com um array vazio 

$pastaUpload = __DIR__ . '/../files/'; // pasta interna 
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;// concatena o diretorio com o nome do arquivo
$tmp = $_FILES['arquivo']['tmp_name']; 
if (move_uploaded_file($tmp, $arquivo)) { // pega o arquivo temporario e armazena no arquivo defoult
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br>Erro no upload de arquivo!";
}
// abaixo para suportar upload de arquivos em html
?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <li>
            <a href="../files/<?= $arquivo ?>">
                <?= $arquivo ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>