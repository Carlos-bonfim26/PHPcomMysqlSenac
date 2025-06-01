<?php 

session_start();

$_SESSION['nome'] = 'Carlos Bonfim';
$_SESSION['idade'] = 19;
echo $_SESSION['nome'];
echo $_SESSION['idade'];
?>

<a href="page2.php">página 2</a>