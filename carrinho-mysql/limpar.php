<?php
setcookie('carrinho', '', time() - 3600 , '/');

header('location: carrinho.php');
exit;

?>