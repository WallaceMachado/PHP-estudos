<div class="titulo">Switch</div>

<?php
$categoria = 'asdasdasd';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = 'LUXO';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
    case 'suv básico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";

// desafio 
?>



<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia Km(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
        break;
    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}° Celsius = {$conversao}° Fahrenheit";
        break;
    case 'fah-cel':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}° Fahrenheit = {$conversao}° Celsius";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";