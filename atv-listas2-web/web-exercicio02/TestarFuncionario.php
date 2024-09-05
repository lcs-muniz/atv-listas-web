<?php
require_once 'Funcionario.php';

class TestarFuncionario {
    public static function main() {
        $novoFuncionario = new Funcionario("Luis", "Silva", 10, 25.50);

        // Exibir o nome completo do funcionário
        echo "Nome completo: " . $novoFuncionario->nomeCompleto() . "\n";

        // Exibir o valor do salário calculado
        echo "Salário: " . $novoFuncionario->calcularSalario() . "\n";

        // Adicionar 8 horas ao total de horas trabalhadas
        $novoFuncionario->incrementarHoras(8);

        // Exibir o novo salário após o incremento de horas
        echo "Novo salário após incrementar 8 horas: " . $novoFuncionario->calcularSalario() . "\n";
    }
}

TestarFuncionario::main();
?>
