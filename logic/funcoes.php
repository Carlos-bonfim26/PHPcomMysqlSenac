<?php 

function saudacao($nome): string{
return "Bom dia {$nome}, acorda <br/>";
}
echo saudacao("Carlos");
echo saudacao("Magnata");

function somar(...$x){
    $res = 0;
    $tamanhoArray = count($x);

    for($i = 0; $i < $tamanhoArray; $i++){
        $res += $x[$i];
    }
    return $res;                         
}                                                       function multiplicar(...$x){
    $res = 1;
    $tamanhoArray = count($x);

    for($i = 0; $i < $tamanhoArray; $i++){
        $res *= $x[$i];
    }
    return $res;                         
}                            

echo "<p>".somar(7, 3, 5, 6,11 )."</p>";

echo "<p>".multiplicar(2,5, 3)."</p>";
?>