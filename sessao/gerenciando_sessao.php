<div class="titulo">Gerenciando Sessão</div>

<?php
// session_id('bf1ttq6eujqi7i2fn4rbtujgi6'); // pegando o ID gerado e fazendo esse comando é possivel clonar a sessão em outro navegador
session_start();
echo session_id(); // pegar o id gerado ao inicar a sessão

// ao atualizar a pagina a sessão não é alterada (id), o contatdor permitir saber quanta vezes a pagina foi atualizada
$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

// quando o contador chegar a 5 é gerado um novo id
if($_SESSION['contador'] % 5 === 0)  {
    session_regenerate_id();
}


// quando o contador cegar a 15 a seeão é limpa, destruida e começa do zero
if($_SESSION['contador'] >= 15) {
    session_destroy();
}