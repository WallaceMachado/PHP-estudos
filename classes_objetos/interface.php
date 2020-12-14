<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

// interface pode extender mais de uma interface
interface Canino extends Animal, Mamifero {
    function latir(): string;
    function correr();
}

interface Felino {
    function correr();
}

// interface pode implemntar mais de uma interface
class Cachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!";
    }

    function latir(): string {
        return 'Au Au';
    }

    function mamar() {
        return "Irei usar leite!";
    }

    function correr() {
        return "vrunnnnn!";
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->correr(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);