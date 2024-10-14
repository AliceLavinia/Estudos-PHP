<?php

//1 Escreva um programa em PHP que exiba seu nome na tela

echo"Alice\n";

//2 Crie um programa em PHP que calcule a média de três notas e exiba o resultado

$nota1 = 8.5;
$nota2 = 10;
$nota3 = 3.5;

$calculoMedia = (8.5 + 10 +3.5)/3;

echo"sua media equivale: $calculoMedia\n";

//3 Elabore um programa em PHP que receba um valor em metros e converta para centímetros

$metros = 20;
$conversaoCent = $metros * 100;

echo"A conversao de metros em centimetros equivale a : $conversaoCent\n";

//4 Desenvolva um programa em PHP que verifique se um ano é bissexto ou não

$ano = 2015;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.";
} else {
    echo "$ano não é bissexto.";
}

//5  Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit

$celsisus = 36;
$converFahrenheit = ($celsisus * 9/5) + 32;

echo "A conversao de celsius para fahrenheit equivale a : $converFahrenheit\n";
