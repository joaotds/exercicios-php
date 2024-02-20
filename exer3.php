<?php
$somaPares = 0;
$somaImpares = 0;

for ($i = 20; $i <= 70; $i++) {
    if ($i % 2 === 0) {
        $somaPares += $i;
    } else {
        $somaImpares += $i;
    }
}

echo "A soma dos números pares de 20 a 70 é: $somaPares\n";
echo "A soma dos números ímpares de 20 a 70 é: $somaImpares\n";
?>
