<?php

$id = $_GET['id'] ?? null;

if ($id) {
    if (isset($_COOKIE['carrinho'])) {
        $carinho = json_decode($_COOKIE['carrinho'], true);
    } else {
        $carinho = [];
    }

    if (isset($carinho[$id])) {
        $carinho[$id]++;
    } else {
        $carinho[$id] = 1;
    }

    setcookie('carrinho', json_encode($carinho), time() + (86400 * 7), '/');
}

header('Location: carrinho.php');
exit;

?>
