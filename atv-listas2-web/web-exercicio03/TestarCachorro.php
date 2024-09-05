<?php
require_once 'Cachorro.php';

class TestarCachorro {
    public static function main() {
        $cachorro1 = new Cachorro("Pipoca", "Vira-lata");
        $cachorro2 = new Cachorro("Churros", "Poodle");

        // exibe os valores iniciais
        echo "Cachorro 1: Nome = " . $cachorro1->getNome() . ", Raça = " . $cachorro1->getRaca() . "\n";
        echo "Cachorro 2: Nome = " . $cachorro2->getNome() . ", Raça = " . $cachorro2->getRaca() . "\n";

        // modifica os atributos usando os métodos setter
        $cachorro1->setNome("Bolacha");
        $cachorro1->setRaca("Beagle");

        $cachorro2->setNome("Pipoca");
        $cachorro2->setRaca("Labrador");

        // exibe os valores atualizados
        echo "Cachorro 1 atualizado: Nome = " . $cachorro1->getNome() . ", Raça = " . $cachorro1->getRaca() . "\n";
        echo "Cachorro 2 atualizado: Nome = " . $cachorro2->getNome() . ", Raça = " . $cachorro2->getRaca() . "\n";
    }
}

TestarCachorro::main();
?>
