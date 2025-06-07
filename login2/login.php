<?php
include_once('conexão.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];



    $sql = "SELECT * FROM users WHERE Email_User = '$usuario'";
    $login = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($login) > 0) {
        $row = $login -> fetch_assoc();
        $senhaDB = $row['Password_User'];

        $salt = md5($senha . $usuario);
        $custo = "06";
        $senhaCriptografada = crypt($senha, "$2b$" . $custo . "$" .  $salt . "$");

        if($senhaDB === $senhaCriptografada){
        session_start();
        $_SESSION['Usuario_ID'] = $row['ID_USER'];
        $_SESSION['Usuario_Email'] = $row['Email_User'];
      
        header('location:index.php');

       
        }else{
            echo "<p style='color:red'>Senha Incorreta!</p>";
        }
    } else {
        echo "<p style='color:red'>Usuário ou senha incorretos!</p>";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="post">
        <input type="email" placeholder="digite seu email:" name="usuario">
        <input type="password" placeholder="digite sua senha" name="senha">
        <input type="submit" value="entrar">
    </form>

    
</body>

</html>