<?php

require_once 'conexao.php';



$sql = "select * from produto";
$resultado = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Produtos</h1>

    <ul>
        <?php
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {



        ?>
                <li>
                    <?= $row['Nome_Produto'] ?> -
                    R$<?= number_format($row['Preco'], 2, ',', '.') ?>
                    <a href="adicionar.php?id=  <?= $row['Id_User'] ?>">Add ao Carrinho</a>
                </li>
        <?php
            }
        } else {
            echo "<p>Nenhum produto encontrado</p>";
        }
        ?>
    </ul>
</body>

</html>