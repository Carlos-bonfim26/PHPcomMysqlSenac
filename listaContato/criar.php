<?php
include_once("vendor/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$descricao = $_POST['descricao'];



$sql = "INSERT INTO pessoa(NomePessoa, EmailPessoa, TelefonePessoa, Desc_pessoa) VALUES ( '$nome', '$email', '$telefone', '$descricao')";

$conexao -> query($sql);
header("Location: index.php");

?>