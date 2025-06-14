<?php
include_once 'conexao.php';

$carrinho = isset($_COOKIE['carrinho']) ? json_decode($_COOKIE['carrinho'], true) : [];

$total = 0;



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Seu carrinho</h2>
    <?php
    if (empty($carrinho)) {
        echo "<p>Carrinho vazio</p>";
    } else {
        echo "<ul>";
        foreach ($carrinho as $id => $qtd) {
            $sql = "SELECT * FROM produto WHERE Id_User = $id";

            $resultado = $conexao->query($sql);

            if ($linha = $resultado->fetch_assoc()) {
                $nome = $linha['Nome_Produto'];
                $preco = $linha['Preco'];
                
                $subtotal = $preco * $qtd;
                $total += $subtotal;
            }
            echo "<li> $nome - R$ " . number_format($preco, 2, ',', '.') . " 
            x $qtd = R$ " . number_format($subtotal, 2, ',', '.') . "

            <a href='remover.php?id=$id> Remover</a>
            </li>";
        }
        echo "</ul>";

        echo "<h2> Total: R$" . number_format($total, 2,',', '.') . "</h2>";

        echo "<a href='limpar.php'> esvaziar </a> ";
    }
    echo "<br/> <a href='produtos.php'> Voltar aos produtos </a>"
    ?>

</body>

</html>