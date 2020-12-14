<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Público'; // pode ser acessado pela própria classe, por herança e por um objeto instanciado
    protected $protegido = 'Protegido';// pode ser acessado pela própria classe e por herança. não poderá ser acessado  por um objeto instanciado
    private $privado = 'Privado'; //só poderá ser acessado na própria classe

    public function mostrarA() {
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo 'Serei transmitido por herança!<br>';
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!<br>';
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar();

class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>"; // não vai ser mostrado

        parent::vaiPorHeranca();
    }
}
echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();
// $b->vaiPorHeranca();
// $b->naoMostrar();