<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Oswald: wght @ 200; 300; 400; 500; 600; 700 & display = swap "rel =" stylesheet ">

    <link rel="stylesheet" href="recursos\css\estilo.css">
    <link rel="stylesheet" href="recursos\css\exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> 
        class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
        <?php
             include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); 
             /*http://localhost:8080/exercicio.php?dir=teste&file=teste*/
            // include('teste/teste.php')
            ?>
        </div>
    </main>
    <footer class="rodape"> 
        COD3R & ALUNOS ₢ <?= date ('Y'); /*<??> tudo que fica dentro é php e não html */?> 
    </footer>
    
</body>
</html>