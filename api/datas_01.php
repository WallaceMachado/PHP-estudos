<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>';//01/01/1970 marco zero, mostra quantos segundos passaram dessa data

//formatar data 1
echo date('D, d \d\e M \d\e Y H:i A') . '<br>';
//D maiusculo é para apareserec o dia da semanaa

// formatar data 2
echo strftime('%A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+10 year');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);