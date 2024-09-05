<?php
class ContaCorrente {
    private $saldo;

    public function definirSaldoInicial($valor) {
        $this->saldo = (double) $valor;
    }

    public function depositar($valor) {
        $this->saldo += (double) $valor;
    }

    public function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para sacar.\n";
        } else {
            $this->saldo -= (double) $valor;
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}
?>
