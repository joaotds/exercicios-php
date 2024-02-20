<?php
$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0) {
        $soma += $i;
    }
}

echo "A soma de todos os números divisíveis por 4 de 1 a 100 é: $soma";
?>
