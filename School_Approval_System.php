<?php
$faltas = 6;
$nota1 = 7;
$nota2 = 8;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "<h2>Aprovação</h2>";

if ($media >= 6 && $faltas <= 15) {
    echo "Aprovado 😃";
} else {
    echo "Reprovado 😭";
}
