<?php
$peso = 63;
$altura = 1.81;

$imc = $peso / ($altura*$altura);

echo ("<h3> Resultado do IMC: <h3>") . number_format($imc, 2, ",");
echo ("<p> Peso: $peso kg</p>");
echo ("<p> Altura: $altura m</p>");

if ($imc <18.5) {
    echo ("<p> Abaixo do peso </p>");
} else if ($imc > 18.5 && $imc <= 24.9) {
    echo ("<p> Peso normal</p>");
} else if ($imc > 25 && $imc <= 29.9) {
    echo ("<p> Sobrepeso  </p>");
} else if ($imc > 30 && $imc <= 34.9) {
    echo ("<p> Obesidade Grau I </p>");
} else if ($imc > 35 && $imc <= 39.9) {
    echo ("<p> Obesidade Grau II </p>");
} else if ($imc >= 40) {
    echo ("<p> Obesidade Grau III </p>");
} 

/*Menor que 18,5: Abaixo do peso
18,5 – 24,9: Peso normal (Eutrófico)
25,0 – 29,9: Sobrepeso (acima do peso)
30,0 – 34,9: Obesidade Grau I
35,0 – 39,9: Obesidade Grau II
40,0 ou mais: Obesidade Grau III (Mórbida)*/ 