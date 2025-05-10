<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>receber dados</title>
</head>
<body>
    <?php 
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $senha = $_POST['senha'];

     echo"<p>".$nome.' '.$email."</p>";
 
  print_r($_POST);
    ?>
</body>
</html>