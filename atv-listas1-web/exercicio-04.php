<!-- 4. A Secretaria de Meio Ambiente que controla o índice de poluição mantém 3 grupos de
indústrias que são altamente poluentes do meio ambiente. O índice de poluição aceitável
varia de 0,05 até 0,25. Se o índice sobe para 0,3 as indústrias do 1º grupo são intimadas
a suspenderem suas atividades, se o índice crescer para 0,4 as industrias do 1º e 2º
grupo são intimadas a suspenderem suas atividades, se o índice atingir 0,5 todos os
grupos devem ser notificados a paralisarem suas atividades. Faça um programa que leia o
índice de poluição medido e emita a notificação adequada aos diferentes grupos de
empresas. -->

<?php
// índice de poluição
echo "Digite o índice de poluição: ";
$indice_pol = trim(fgets(STDIN));

// verifica o índice de poluição e emite a notificação adequada
if ($indice_pol >= 0.05 && $indice_pol <= 0.25) {
    echo "Índice de poluição dentro do aceitável.\n";
} elseif ($indice_pol > 0.25 && $indice_pol < 0.3) {
    echo "Índice de poluição elevado, mas ainda dentro dos limites.\n";
} elseif ($indice_pol >= 0.3 && $indice_pol < 0.4) {
    echo "Alerta: Indústrias do 1º grupo devem suspender suas atividades.\n";
} elseif ($indice_pol >= 0.4 && $indice_pol < 0.5) {
    echo "Alerta: Indústrias do 1º e 2º grupo devem suspender suas atividades.\n";
} elseif ($indice_pol >= 0.5) {
    echo "Alerta: Todos os grupos devem suspender suas atividades.\n";
} else {
    echo "Índice de poluição inválido.\n";
}
?>
