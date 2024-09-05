<!-- 10. Somar todos os números de um array com 20 posições populado de 1 a 20 -->

<?php
$numeros = range(1, 20);

$soma = 0;

// loop foreach para somar e exibir os valores acumulados
foreach ($numeros as $numero) {
    $soma += $numero;
    echo "Somando {$numero}: Total acumulado = {$soma}\n";
}
?>
