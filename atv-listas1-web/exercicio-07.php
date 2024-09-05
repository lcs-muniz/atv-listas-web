<!-- 7. Construa um algoritmo que popule um array com 500 valores inteiros e positivos
e:
• Encontre o maior valor
• Encontre o menor valor
• Calcule a média dos números lidos -->

<?php
$numeros = array();

// array com 500 números inteiros e positivos aleatórios
for ($i = 0; $i < 500; $i++) {
    $numeros[] = rand(1, 1000); 
}

// exibe todos os números gerados
echo "Números gerados:\n";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo "\n\n";

// Encontra o maior valor
$maior_valor = max($numeros);

// Encontra o menor valor
$menor_valor = min($numeros);

// Calcula a soma dos valores
$soma = array_sum($numeros);

// Calcula a média
$media = $soma / count($numeros);

echo "Maior valor: $maior_valor\n";
echo "Menor valor: $menor_valor\n";
echo "Média dos valores: $media\n";
?>
