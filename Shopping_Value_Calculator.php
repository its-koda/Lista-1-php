<?php
$preco = 50.00;
$quantidade = 5;

$valorTotal = $preco * $quantidade;
$ValorFinal = $valorTotal;

echo "<h2>Calculadora de valor de compra</h2>";

if ($valorTotal >= 200) {
    $Desconto = $valorTotal * 0.10;
    $ValorFinal = $valorTotal - $Desconto;
    echo "Valor da Compra com desconto: $ValorFinal";
} else {
    echo "Sem Desconto <br>";
    echo "Valor da Compra: $valorTotal";
}
