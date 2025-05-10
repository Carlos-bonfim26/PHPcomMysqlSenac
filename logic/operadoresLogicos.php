<?php 

$n1 = 10;
$n2 = 9;
$igual = $n1 == $n2? "sim":"não";
$igualTipo =  $n1 === $n2? "sim":"não";
$diferente = $n1 != $n2? "sim":"não";
$diferenteTipo = $n1 !== $n2? "sim":"não";
$maior = $n1 > $n2? "sim":"não";
$menor = $n1 < $n2? "sim":"não";
$maiorIgual = $n1 >= $n2? "sim":"não";
$menorIgual = $n1 <= $n2? "sim":"não";

echo "número 1: {$n1}<br/>";
echo "número 2: {$n2}<br/>";
echo "Igual? ".$igual . "<br/>";
echo "Tipagem e número igual? ".$igualTipo . "<br/>";
echo "Diferente? ".$diferente . "<br/>";
echo "Tipagem e número diferente? ".$diferenteTipo . "<br/>";
echo "Maior que? ".$maior . "<br/>";
echo "menor que? ".$menor . "<br/>";
echo "Maior ou igual que? ".$maiorIgual . "<br/>";
echo "menor ou igual que? ".$menorIgual . "<br/>";
?>