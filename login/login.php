<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="verificar2.php" method="post">
        <input type="email" placeholder="digite seu email:" name="usuario">
        <input type="password" placeholder="digite sua senha" name="senha">
        <input type="submit" value="entrar">
    </form>

    <?php 
    
    if(isset($_GET['erro1'])){
        echo "<p style='color:red'>Usuário ou senha incorretos!</p>";
    }

    ?>
</body>

</html>