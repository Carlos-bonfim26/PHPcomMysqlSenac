<?php 
echo "<h1> Bom dia </h1>";

$name = "Carlos";

echo "<p>Como voce está {$name}?</>";

$yearsOld = 19;
$student = "Php com MySql";
$height = 1.71;

echo "<p> vi que você tem {$yearsOld} anos e está estudando {$student},e tem {$height}cm de altura</p>";

echo "<h2> tipos de dados </h2>";
echo "<p>idade:".gettype($yearsOld) . "</p>";
echo "<p>altura:".gettype($height). "</p>";
echo "<p>nome:" .gettype($student). "</p>";

//retorna a qntd de caractere na string
echo "<p>quantos caracteres tem {$name}: ". strlen($name) . "</p>";

//posição da letra na string
echo stripos($name, "a") . "<br/>";

echo $student . "<br/>";
echo strlen($student). "<br/>";
//retorna posição da primeira letra
echo stripos($student, "p"). "<br/>";
//retorna a posição da ultima letra
echo strripos ($student, "p"). "<br/>";

// retorna a primeira diferenciando a minuscula da maiuscula
echo strpos($student, "p"). "<br/>";
echo  "<br/>";
$n1 = 10;
$n2 = 5;
$adicao = $n1 + $n2;
echo $adicao. "<br/>";
$subtracao = $n1 - $n2;
echo $subtracao. "<br/>";
$multiplicacao = $n1 * $n2;
echo $multiplicacao. "<br/>";
$divisao = $n1 / $n2;
echo $divisao. "<br/>";
$modulo = $n1 % $n2;
echo $modulo. "<br/>";
$potencia = $n1 ** $n2;
echo $potencia. "<br/>";
$raizCubica = pow($n1, $n2);
echo $raizCubica. "<br/>";
$raizQuadrada = sqrt($n1);
echo $raizQuadrada. "<br/>";
$incremento = $n1++;
echo $incremento. "<br/>";
$decremento = $n1--;
echo $decremento. "<br/>";
$incremento2 = ++$n1;
echo $incremento2. "<br/>";
$decremento2 = --$n1;
echo $decremento2. "<br/>";
?>