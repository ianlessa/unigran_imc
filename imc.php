<?php

if ($argc !== 3) {
    echo "--- CÁLCULO DE IMC ---" . PHP_EOL;
    echo "Uso: " . PHP_EOL;
    echo "php imc.php <peso em gramas> <altura em centímetros>" . PHP_EOL . PHP_EOL;
    echo "Exemplo: " . PHP_EOL;
    echo "php imc.php 9560 180" . PHP_EOL;
    die();
}

$peso = ($argv[1] ?? 1) / 100;
$altura = ($argv[2] ?? 1) / 100;

$imc = $peso / pow($altura,2);

echo sprintf(
    "Peso em KG: %.2f\nAltura em M: %.2f\nIMC: %.2f",
    $peso,
    $altura,
    $imc
);
