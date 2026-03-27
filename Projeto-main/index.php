<?php
// Carrega o controlador
require_once 'controller/ProdutoController.php';

$controller = new ProdutoController();

// Verifica o que está escrito na URL em "?pagina=". Se não tiver nada, o padrão é 'home'.
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

// Roteador: Decide qual função do Controller chamar
if ($pagina == 'home') {
    $controller->index();
    
} elseif ($pagina == 'produtos') {
    $controller->produtos(); // Função que vamos criar no passo 3
    
} elseif ($pagina == 'sobre') {
    $controller->sobre(); // Função que vamos criar no passo 3
    
} else {
    // Se digitarem uma URL que não existe
    echo "<h2 style='text-align:center; padding: 50px;'>404 - Página não encontrada!</h2>";
}

?>