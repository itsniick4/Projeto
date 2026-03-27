<?php
session_start();
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha']; // Em um sistema real, usaríamos password_verify() aqui

    // Busca o usuário no banco
    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email, 'senha' => $senha]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // Se achou o usuário no banco
    if ($usuario) {
        // Cria a "pulseirinha VIP" no sistema!
        $_SESSION['usuario_logado'] = true;
        $_SESSION['nome_usuario'] = $usuario['nome'];
        $_SESSION['cargo'] = $usuario['cargo']; // Aqui ele pega se é 'admin'

        // Manda o funcionário para a aba de produtos
        header("Location: cadastrar.php");
        exit();
    } else {
        echo "<p>Email ou senha incorretos!</p>";
    }
}
?>