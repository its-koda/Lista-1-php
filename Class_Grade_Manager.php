<?php
$notas = [8, 7, 9, 10, 4];

echo "<h2>Lista de Notas</h2>";

foreach ($notas as $indice => $nota) {
    $posicao = $indice + 1;
    echo "Posição: $posicao: $nota <br>";
}

echo "<h2>Média da Sala</h2>";

$soma = array_sum($notas);
$media = $soma / 5;
echo "A média da sala é: $media";

echo "<h2>Maior nota da Sala</h2>";

$maiorNumero = max($notas);
$indice = array_search($maiorNumero, $notas);

$menorNumero = min($notas);
$indice2 = array_search($menorNumero, $notas);

echo "A maior Nota da Sala é a do Aluno $indice, de nota: $maiorNumero <br>";
echo "A menor Nota da Sala é a do Aluno $indice2, de nota: $menorNumero <br>";
