<?php

echo "<h2>Função - IMC</h2>";

function calcularIMC($peso, $altura)
{
    $IMC = $peso / ($altura * $altura);
    echo "Valor do IMC: " . number_format($IMC, 2) . "<br>";

    if ($IMC < 18.5) {
        echo "Abaixo do peso";
    } elseif ($IMC < 25) {
        echo "Peso Normal";
    } elseif ($IMC < 30) {
        echo "Sobrepeso";
    } else {
        echo "Obesidade";
    }
}

calcularIMC(70.0, 1.75);
