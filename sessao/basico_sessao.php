<div class="titulo">Sessão</div>

<?php
session_start(); // iniar uma sessão

print_r($_SESSION);
echo '<br>';
// no primeiro acesso não será mostrado somente no segundo, quando atualizar a pagina
if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href='/sessao/basico_sessao_alterar.php'>
        Alterar Sessão
    </a>
</p>