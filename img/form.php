<?php
//lembrar de adicionar uma coluna nova no banco de dados
require_once 'conexao.php';
$nomeProduto =  $_POST['nome'];
$precoProduto =  $_POST['preco'];
$array_erros = array(
    UPLOAD_ERR_OK => 'Upload realizado com sucesso',
    UPLOAD_ERR_INI_SIZE => 'O arquivo enviado excede o tamanho máximo permitido pelo servidor',
    UPLOAD_ERR_FORM_SIZE => 'O arquivo enviado excede o tamanho máximo permitido pelo formulário',
    UPLOAD_ERR_PARTIAL => 'O arquivo enviado foi apenas parcialmente enviado',
    UPLOAD_ERR_NO_FILE => 'Nenhum arquivo foi enviado',
    UPLOAD_ERR_NO_TMP_DIR => 'Falta a pasta temporária',
    UPLOAD_ERR_CANT_WRITE => 'Falha ao escrever o arquivo no disco',
    UPLOAD_ERR_EXTENSION => 'Uma extensão do PHP interrompeu o upload do arquivo'
);
if (isset($_POST['enviar'])) {

    echo '<pre>';
    print_r($_FILES);
    echo '<pre>';

    if ($_FILES['imagem']['error'] == 0) {



        $pasta_temporaria = $_FILES['imagem']['tmp_name'];

        $arquivo = $_FILES['imagem']['name'];

        $pasta = 'uploads/';
        $tipo = $_FILES['imagem']['type'];

        echo $tipo;
        echo '<br/>';
        $extensao = strrchr($arquivo, '.');

        echo $extensao;
        echo '<br/>';


        if ($tipo == 'image/jpeg' || $tipo == 'image/jpg' || $tipo == 'image/webp') {
            move_uploaded_file($pasta_temporaria, $pasta . $arquivo);
            if (file_exists($pasta . $arquivo)) {
                echo 'arquivo enviado com sucesso';
                $sql = "INSERT INTO produto(Nome_Produto, Preco, Imagem_Produto) VALUES ('$nomeProduto', '$precoProduto', '$arquivo')";
                $resultado = $conexao->query($sql);
            } else {
                echo 'erro ao enviar arquivo';
            }
        } else {
            echo 'Erro: tipo do arquivo não permitido';
        }
    } else {
        echo $array_erros[$_FILES['imagem']['error']];
    }
}
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
    <form method="post" enctype="multipart/form-data">
        <input type="text" placeholder="nome" name="nome">
        <input type="number" placeholder="preco" name="preco">
        <input type="hidden" name="MAX_FILE_SIZE" value="45000">
        <label for="">Imagem:</label>
        <input type="file" name="imagem" accept=".jpg, .png, .webp, .jpeg">

        <input type="submit" value="enviar" name="enviar">
    </form>
</body>

</html>