<?php 
$idade = 67;

if ($idade <13) {
    echo "criança";
}else if($idade >= 13 && $idade<18){
    echo "adolescente";
}else if($idade >= 60){
    echo "proximo de assinar com o gigante💢";
}
else{
    echo "adulto";
}
echo"<br/>";
$dia = 7;
switch($dia){
    case 1:
    echo "Domingo";
    break;
    case 2:
        echo "Segunda-feira";
    break;
    case 3:
        echo "Terça-feira";
    break;
    case 4:
        echo "Quarta-feira";
    break;
    case 5:
        echo "Quinta-feira";
    break;
    case 6:
        echo "Sexta-feira";
    break;
    case 7:
        echo "Sábado";
    break;
    default:
    echo "inválido";
}

?>

 