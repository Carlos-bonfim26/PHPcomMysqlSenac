<?php

$servidor = "localhost";
$user = "root";
$senha = "";
$banco = "contatos1";

mysqli_report(MYSQLI_REPORT_OFF);

$conexao = @mysqli_connect($servidor, $user, $senha, $banco);


if (mysqli_connect_errno()) {

    die("erro na conexão: (". mysqli_connect_error() ."): ". mysqli_connect_error());
}
// }else{
//     echo "conexão bem sucedida";
// }

$consulta = "SELECT * FROM PESSOA";

$resultado = mysqli_query($conexao, $consulta);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <?php
    
    if($resultado === false){
        echo "Erro na consulta: " . $conexao->error;
    }else{
    
    
    while($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>"; 
        echo "<td> Id: ". $linha['IdPessoa'] ." </td>";
        echo "<td> Nome: ". $linha['NomePessoa'] ." </td>";
        echo "<td> Email: ". $linha['EmailPessoa'] ." </td>";
        echo "<td> Telefone: ". $linha['TelefonePessoa'] ." </td>";
        echo "<td> Descrição: ". $linha['Desc_pessoa'] ." </td>";
        echo "</tr>"; 
    }

}
?>
</table>
</body>
</html>