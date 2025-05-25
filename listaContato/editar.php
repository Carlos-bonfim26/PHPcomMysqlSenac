<?php

include_once("vendor/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$descricao = $_POST['descricao'];

$idUser = $_POST['id'];

$sql = "UPDATE pessoa SET NomePessoa = '$nome', EmailPessoa = '$email', TelefonePessoa = '$telefone', Desc_pessoa = '$descricao' WHERE idPessoa = $idUser ";

$conexao->query($sql);

header("Location: index.php");
?>