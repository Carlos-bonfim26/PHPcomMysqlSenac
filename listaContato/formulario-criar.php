<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar contato</title>


    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h2>Cadastrar contato</h2>
        <form action="criar.php" method="post">
            <input type="text" placeholder="nome:" id="nome" name="nome" class="form-control mb-3" required>
            <input type="email" placeholder="email:" id="email" name="email" class="form-control mb-3" required>
            <input type="tel" placeholder="telefone:" id="telefone" name="telefone" class="form-control mb-3" required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}">
            <textarea name="descricao" id="descricao" class="form-control mb-3" placeholder="descrição:" rows="4"></textarea>

            <input type="submit" value="Criar" class="btn btn-success">
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </form>
    </div>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>