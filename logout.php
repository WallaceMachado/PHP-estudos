<?php
session_start();
session_destroy();
unset($_COOKIE['usuario']);// excluir usuario do cookie
setcookie('usuario', ''); // limpar a informação do usuario do cookie, assim ele consegue deslogar
header('Location: login.php');