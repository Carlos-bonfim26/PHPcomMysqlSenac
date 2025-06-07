<?php
session_start();
if(!isset($_SESSION['Usuario_Email'])){
    header('Location:login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<h1>Bem vindo, <?=$_SESSION['Usuario_Email']?></h1>

<p>Parabéns, você está logado no sistema</p>

<p>Você quer <a href="logout.php">sair?</a></p>
</body>
</html>