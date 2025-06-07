<?php

$host ="localhost" ;
$user = "root" ;
$pass= "";
$db = "carrinho";

$conexao = new mysqli($host,$user,$pass,$db);

if($conexao -> connect_error){
    die("erro na conexão: ". $conexao -> connect_error);
}

?>