<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 15; ) {
    echo "$cont <br>";
    $cont++;
}


$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

print_r($array);

echo "<hr>";

for($i = 1; $i <= count($array); $i++) {
    echo "{$array[$i]} <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo "<hr>";

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}

?>

<!-- 
Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
-->

<?php
$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

for(
    $impressao2 = '#';
    $impressao2 !== '######'; 
    $impressao2 .= '#'
) {
    echo "$impressao2 <br>";
}