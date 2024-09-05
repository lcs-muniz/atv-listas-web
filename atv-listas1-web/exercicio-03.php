<!-- 3. Elabore um programa que leia as variáveis C e N, respectivamente código e número de
horas trabalhadas de um operário. E calcule o salário sabendo-se que ele ganha R$ 10,00
por hora. Quando o número de horas exceder a 50 calcule o excesso de pagamento
armazenando-o na variável E, caso contrário zerar tal variável. A hora excedente de
trabalho vale R$ 20,00. No final do processamento imprimir o salário total e o salário
excedente. -->

<?php
echo "Digite o código do operário: ";
$codigo = trim(fgets(STDIN));

echo "Digite o número de horas trabalhadas: ";
$horas_trabalhadas = trim(fgets(STDIN));

// Define as taxas de pagamento
$valor_hora_normal = 10.00;
$valor_hora_extra = 20.00;
$limite_horas_normais = 50;

// calcula o salário
if ($horas_trabalhadas > $limite_horas_normais) {
    $horas_extras = $horas_trabalhadas - $limite_horas_normais;
    $salario_normal = $limite_horas_normais * $valor_hora_normal;
    $salario_excedente = $horas_extras * $valor_hora_extra;
} else {
    $horas_extras = 0;
    $salario_normal = $horas_trabalhadas * $valor_hora_normal;
    $salario_excedente = 0;
}

// calcula o salário total
$salario_total = $salario_normal + $salario_excedente;

// resultados
echo "Código do operário: " . $codigo . "\n";
echo "Salário normal: R$ " . number_format($salario_normal, 2, ',', '.') . "\n";
echo "Salário excedente: R$ " . number_format($salario_excedente, 2, ',', '.') . "\n";
echo "Salário total: R$ " . number_format($salario_total, 2, ',', '.') . "\n";
?>
