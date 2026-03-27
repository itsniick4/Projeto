<?php
$tipo_escolhido = isset($_GET['tipo']) ? $_GET['tipo'] : 'todas';

// 2. Muda o título da página automaticamente
if ($tipo_escolhido == 'aromatica') {
    $titulo_pagina = "Velas Aromáticas";
} elseif ($tipo_escolhido == 'escultural') {
    $titulo_pagina = "Velas Esculturais";
} elseif ($tipo_escolhido == 'massagem') {
    $titulo_pagina = "Velas para Massagem";
} else {
    $titulo_pagina = "Todas as Velas";
}

// 3. SIMULAÇÃO DO SEU BANCO DE DADOS
// Note que cada vela agora tem um "tipo" cadastrado
$todas_as_velas = [
    [
        "nome" => "Lavanda Francesa", 
        "tipo" => "aromatica", 
        "preco" => "89,90", 
        "imagem" => "https://images.unsplash.com/photo-1603006905003-be475563bc59?auto=format&fit=crop&q=80&w=400"
    ],
    [
        "nome" => "Estátua de Vênus", 
        "tipo" => "escultural", 
        "preco" => "120,00", 
        "imagem" => "https://images.unsplash.com/photo-1572418535036-7c0b62e49c71?auto=format&fit=crop&q=80&w=400"
    ],
    [
        "nome" => "Óleo Quente Relaxante", 
        "tipo" => "massagem", 
        "preco" => "95,00", 
        "imagem" => "https://images.unsplash.com/photo-1526685827367-e9a924cd8cbf?auto=format&fit=crop&q=80&w=400"
    ],
    [
        "nome" => "Baunilha Intensa", 
        "tipo" => "aromatica", 
        "preco" => "75,00", 
        "imagem" => "https://images.unsplash.com/photo-1602874801007-bd458bb1b8b6?auto=format&fit=crop&q=80&w=400"
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo_pagina ?> - Serena</title>
    <style>
        /* Estilos básicos para a vitrine não ficar quebra */
        body { font-family: 'Montserrat', sans-serif; background-color: #f0f1f3; }
        .vitrine { padding: 50px 20px; text-align: center; }
        .grid { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-top: 30px;}
        .card { background: #fff; padding: 15px; border-radius: 8px; width: 250px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .card img { width: 100%; height: 200px; object-fit: cover; border-radius: 5px; }
    </style>
</head>
<body>

    <div class="vitrine">
        <h2><?= $titulo_pagina ?></h2>

        <div class="grid">
            <?php
            // 4. O FILTRO MÁGICO
            // O PHP vai passar por todas as velas da lista...
            foreach ($todas_as_velas as $vela) {
                
                // ...mas SÓ vai desenhar na tela se o tipo dela for o mesmo que o cliente escolheu!
                // (Ou se o cliente estiver vendo 'todas')
                if ($tipo_escolhido == 'todas' || $vela['tipo'] == $tipo_escolhido) {
                    ?>
                    
                    <div class="card">
                        <img src="<?= $vela['imagem'] ?>" alt="<?= $vela['nome'] ?>">
                        <h3 style="font-family: 'Playfair Display', serif; margin: 10px 0;"><?= $vela['nome'] ?></h3>
                        <p>R$ <?= $vela['preco'] ?></p>
                        <button style="width: 100%; padding: 8px; border: 1px solid #d4af37; background: transparent; cursor: pointer;">Comprar</button>
                    </div>

                    <?php
                }
            }
            ?>
        </div>
    </div>

</body>
</html>