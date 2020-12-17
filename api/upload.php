<div class="titulo">Upload</div>

<?php 
print_r($_FILES); // array do ph para arquivos

if($_FILES && $_FILES['arquivo']) {// caso tenha algo detrno do array files
    $pastaUpload = '\\Users\Usuário\Desktop\Material de estudos em TI\PHP\curso_php_Leonardo_Mourao\curso-php\\'; // onde será salvo o arquivo, usar no inicio e no final da string dua barras ou uma contrabarra
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo; // concatenar o caminho da pasta com o nome do arquivo
    $tmp = $_FILES['arquivo']['tmp_name']; // diretorio temporario

    if (move_uploaded_file($tmp, $arquivo)) { //passando do tempoorario para o diretorio desejado
        echo "<br>Arquivo válido e enviado com sucesso.";
    } else {
        echo "<br>Erro no upload de arquivo!";
    }
}

// abaixo para suportar upload de arquivos em html
?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>