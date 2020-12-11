<div class="titulo">Break/Continue</div>

<?php
$cont = 16;
for(;;) {
    echo "$cont <br>";
    $cont++;
    if($cont > 20) {
        break;
    }
}

echo "<br><hr>";

for(;;) {
    $cont++;
    if($cont % 2 === 1) continue;
    echo "$cont <br>";
    if($cont >= 30) {
        break;
    }
}

foreach(array(1,2,3,4,5,6) as $valor) {
    if($valor === 5) break;
    if($valor % 2 === 0) continue;
    echo "$valor <br>";
}

echo "Fim!";
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