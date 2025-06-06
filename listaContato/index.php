<?php
require_once "vendor/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="container mt-5">
        <div class="container header">
            <h2>Usuários cadastrados</h2>
            <a href="formulario-criar.php" class="btn btn-primary">Cadastrar usuário</a>
        </div>
        <?php
        $sql = "SELECT * FROM PESSOA ";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {


        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($linha = $resultado->fetch_assoc()) {

                        echo " <tr>
                    <th scope='row'>" . $linha['IdPessoa'] . "</th>
                    <td>" . $linha['NomePessoa'] . "</td>
                    <td>" . $linha['EmailPessoa'] . "</td>
                    <td>" . $linha['TelefonePessoa'] . "</td>" ?>
                    <td>
                        <a href='usuario.php?id= <?= $linha['IdPessoa'];?>' class="btn btn-secondary">Ver</a>
                        <a href='formulario-editar.php?id= <?= $linha['IdPessoa'];  ?>' class="btn btn-warning">Editar</a>
                        
                        <a href='deletar.php? id= <?= $linha['IdPessoa']; ?> ' onclick="return confirm('tem certeza que deseja deletar?')" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
                  <?php  } ?>

                    
                </tbody>
            </table>
        <?php } else {

        ?>
            <div class="alert alert-warning">
                <p>Não há contatos cadastrados</p>
            </div>
        <?php

        }

        ?>
       
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>