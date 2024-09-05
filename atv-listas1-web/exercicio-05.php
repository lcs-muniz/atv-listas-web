<!-- 5. Elabore um algoritmo que dada a idade de um nadador classifique-o em uma das seguintes categorias:
Infantil A = 5 a 7 anos;
Infantil B = 8 a 11 anos;
Juvenil A = 12 a 13 anos;
Juvenil B = 14 a 17 anos;
Adultos = Maiores de 18 anos -->

<?php
// idade do nadador
echo "Digite a idade do nadador: ";
$idade = trim(fgets(STDIN));

// classifica o nadador de acordo com a idade
if ($idade >= 5 && $idade <= 7) {
    echo "Categoria: Infantil A (5 a 7 anos)\n";
} elseif ($idade >= 8 && $idade <= 11) {
    echo "Categoria: Infantil B (8 a 11 anos)\n";
} elseif ($idade >= 12 && $idade <= 13) {
    echo "Categoria: Juvenil A (12 a 13 anos)\n";
} elseif ($idade >= 14 && $idade <= 17) {
    echo "Categoria: Juvenil B (14 a 17 anos)\n";
} elseif ($idade >= 18) {
    echo "Categoria: Adultos (18 anos ou mais)\n";
} else {
    echo "Idade fora das categorias.\n";
}
?>
