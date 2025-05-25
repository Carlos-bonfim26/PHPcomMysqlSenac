<?php
    include_once("vendor/conexao.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM pessoa WHERE idPessoa = $id" ;
    $resultado=$conexao->query($sql);

    $pessoa = $resultado->fetch_assoc();
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil do contato</title>

        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    </head>

    <body>

        <div class="container">
            <h2>Informações do Contato</h2>
        
        <ul>
            <li class="list-group-item"><strong>Nome: </strong> <?= $pessoa['NomePessoa'] ?></li>
            <li class="list-group-item"><strong>Email: </strong> <?= $pessoa['EmailPessoa'] ?></li>
            <li class="list-group-item"><strong>Telefone: </strong> <?= $pessoa['TelefonePessoa'] ?></li>
            <li class="list-group-item"><strong>Descrição: </strong> <?= $pessoa['Desc_pessoa'] ?></li>
        </ul>

        <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div>
        <!-- bootstrap script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>

    </html>