<?php
class Funcionario {
    private $nome;
    private $sobrenome;
    private $horasTrabalhadas;
    private $valorPorHora;

    // Construtor para inicializar os atributos
    public function __construct($nome, $sobrenome, $horasTrabalhadas, $valorPorHora) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->horasTrabalhadas = $horasTrabalhadas;
        $this->valorPorHora = $valorPorHora;
    }

    // Método para obter o nome completo
    public function nomeCompleto() {
        return $this->nome . ' ' . $this->sobrenome;
    }

    // Método para calcular o salário
    public function calcularSalario() {
        return $this->horasTrabalhadas * $this->valorPorHora;
    }

    // Método para incrementar o valor por hora
    public function incrementarHoras($horas) {
        $this->horasTrabalhadas += $horas;
    }
}
?>
