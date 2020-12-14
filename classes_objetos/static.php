<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variável de instância'; // será instanciada no objeto
    public static $static = 'Variável de classe (estática)'; // é instanciada na própria classe

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}<br>";
        // Tentativa 2
        // echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>"; // para acessar atributo statico self::
    }
    
    public static function mostrarStaticA() { // função estatica só pode ter membros estáticos
        // echo "Não estática = {$this->naoStatic}<br>";
        // echo "Estática = {$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // não é a forma ideal

echo '<br>';
echo A::$static, '<br>'; // acessar diretamente pela classe quano o membro for estático
A::mostrarStaticA(); // acessar diretamente pela classe

A::$static = 'Alterado membro de classe!';
echo A::$static, '<br>'; // acessar diretamente pela classe