<?php
session_start();// inicia
session_destroy();// limpa e exclui a sessao
header('Location: basico_sessao.php');// volta pra pagina basico