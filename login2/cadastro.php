<?php
include_once('conexão.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
$usuario = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

$salt = md5($senha . $usuario);

$custo = "06";

$senhaCriptografada = crypt($senha, "$2b$" . $custo . "$" .  $salt ."$");

$sql = "insert into users (Email_User, Password_User) values ('$usuario', '$senhaCriptografada')";
}

if($conexao-> query($sql)){
    echo "Usuario cadastrado com sucesso";
}else{
    echo "erro no cadastro do usuario";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <form method="POST">
        <input type="email" placeholder="digite seu email:" name="usuario">
        <input type="password" placeholder="digite sua senha" name="senha">
        <input type="submit" value="cadastrar">
    </form>

    <?php 
    
    if(isset($_GET['erro1'])){
        echo "<p style='color:red'>Usuário ou senha incorretos!</p>";
    }

    ?>
</body>

</html>