<h1>Página protegida</h1>
<a href="logout.php">sair</a>
<?php
session_start();

echo $_SESSION['usuario_logado'];


if (!isset($_SESSION['usuario_logado'])) {
    header('location: login.php');
    exit();
}
?>