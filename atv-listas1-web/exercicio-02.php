<!-- 2. Faça um programa que leia um número inteiro e indique se este número é par ou ímpar, e se é positivo ou negativo. -->

<?php
echo "Digite um número inteiro: ";
$numero = trim(fgets(STDIN));

// verifica se o número é par ou ímpar
if ($numero % 2 == 0) {
    echo "O número $numero é Par.\n";
} else {
    echo "O número $numero é Ímpar.\n";
}

// verifica se o número é positivo, negativo ou zero
if ($numero > 0) {
    echo "O número $numero é Positivo.\n";
} elseif ($numero < 0) {
    echo "O número $numero é Negativo.\n";
} else {
    echo "O número é Zero.\n";
}
?>
