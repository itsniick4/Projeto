<?php
require_once 'model/Produto.php';

class ProdutoController {
    
    // Essa é a que já estava aí (Página Inicial)
    public function index() {
        $model = new Produto();
        $velas = $model->getVelas();
        $aromas = $model->getAromas();
        
        require_once 'view/header.php';
        require_once 'view/home.php';
        require_once 'view/footer.php';
    }

    // NOVA FUNÇÃO: Página de Produtos
    public function produtos() {
        // Aproveitamos o mesmo header e footer, só mudamos o "miolo"
        require_once 'view/header.php';
        require_once 'view/produtos.php'; 
        require_once 'view/footer.php';
    }

    // NOVA FUNÇÃO: Página Sobre Nós
    public function sobre() {
        require_once 'view/header.php';
        require_once 'view/sobre.php'; 
        require_once 'view/footer.php';
    }
}
?>