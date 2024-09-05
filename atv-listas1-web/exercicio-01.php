<!-- 1. Leia 4 (quatro) números;
Calcule o quadrado de cada um;
Se o valor resultante do quadrado do terceiro for >= 1000, imprima-o e finalize;
Caso contrário, imprima os valores lidos e seus respectivos quadrados. -->

<?php
// função para calcular o quadrado
function calcularQuadrado($numero) {
    return $numero * $numero;
}

// Leitura dos 4 números
$numeros = array();
for ($i = 1; $i <= 4; $i++) {
    echo "Digite o número {$i}: ";
    $numeros[] = trim(fgets(STDIN)); // Recebe os números digitados pelo usuário
}

// Calcula o quadrado de cada número
$quadrados = array_map('calcularQuadrado', $numeros);

// Verifica o quadrado do terceiro número
if ($quadrados[2] >= 1000) {
    echo "O quadrado do terceiro número é: " . $quadrados[2] . "\n";
} else {
    // Caso o quadrado do terceiro número seja menor que 1000, imprime todos os números e seus quadrados
    for ($i = 0; $i < 4; $i++) {
        echo "Número: " . $numeros[$i] . " - Quadrado: " . $quadrados[$i] . "\n";
    }
}
?>
