<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero) {
    $soma = 0;
    for($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(150) . '<br>';

function somaRecursivaUmAte($numero) {
    // Condição de Parada!!!!
    if($numero === 1) {
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(150) . '<br>';

function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150) . '<br>';

/*
> 1
> 2
>> 3
>> 4
>> 5
> 6
>> 7
>>> 8
>>> 9
> 10
*/

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>') {
    foreach($array as $elemento) {
        if(is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

imprimirArray($array);
imprimirArray($array, '#');