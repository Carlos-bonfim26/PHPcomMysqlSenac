<?php
include "vendor/conexao.php";
$id = $_GET['id'];

$sql = "DELETE FROM PESSOA WHERE IdPessoa = $id";

$conexao -> query($sql);

header("Location: index.php");
exit;
?>