<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if ($_POST) {
    $_SESSION['carrinho'][] = $_POST['id'];
}

echo "Produtos no carrinho: ";
print_r($_SESSION['carrinho']);