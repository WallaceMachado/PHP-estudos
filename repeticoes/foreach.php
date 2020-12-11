<div class="titulo">Foreach</div>

<?php
$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

foreach ($array as $valor) {
    echo "$valor <br>";
}

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha) {
    // echo "$linha <br>";
    foreach($linha as $letra) {
        echo "$letra ";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);
?>

    <!--
Enunciado: 
- Imprima apenas os valores do array que contém indice par
- Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE
-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i < count($array); $i++) {
    if($i % 2 === 1) continue;
    echo "{$array[$i]} ";
}

echo "<br>";

foreach($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor ";
}