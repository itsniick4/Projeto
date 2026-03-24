<?php
class Produto {
    public function getVelas() {
        return [
            ["nome" => "Aromáticas", "imagem" => "https://images.unsplash.com/photo-1602874801007-bd458bb1b8b6?auto=format&fit=crop&w=200&q=80"],
            ["nome" => "Esculturais", "imagem" => "https://images.unsplash.com/photo-1610224213346-77881335b1d5?auto=format&fit=crop&w=200&q=80"],
            ["nome" => "Massagem", "imagem" => "https://images.unsplash.com/photo-1542841791-1925b02a2ab4?auto=format&fit=crop&w=200&q=80"]
        ];
    }

    public function getAromas() {
        return [
            ["nome" => "Cítricos", "imagem" => "https://images.unsplash.com/photo-1608681283307-5264871ccde2?auto=format&fit=crop&w=200&q=80"],
            ["nome" => "Amadeirado", "imagem" => "https://images.unsplash.com/photo-1554520735-0a6b8b6ce8b7?auto=format&fit=crop&w=200&q=80"],
            ["nome" => "Florais", "imagem" => "https://images.unsplash.com/photo-1563241527-3004b7be0ffd?auto=format&fit=crop&w=200&q=80"]
        ];
    }
}
?>