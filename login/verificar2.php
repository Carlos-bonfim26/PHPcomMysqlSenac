<?php
include_once('conexao.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "select * from users where Email_User = '$usuario' and Password_User = '$senha'";

$login = mysqli_query($conexao, $sql);

if(mysqli_num_rows($login) > 0){
session_start();
$_SESSION['usuario_logado'] = $usuario;
$_SESSION['email_logado'] = mysqli_fetch_assoc($login)['Email_User'];
header('location:index.php');
}else{
    header("location: login.php?erro1");
}
?>
