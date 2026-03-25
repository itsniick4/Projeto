<?php
//img das velas e aromas
$categorias_velas = [
    [
        "nome" => "Aromáticas",
        "imagem" => "https://images.unsplash.com/photo-1602874801007-bd458bb1b8b6?auto=format&fit=crop&w=200&q=80"
    ],
    [
        "nome" => "Esculturais",
        "imagem" => "img/Captura de tela 2026-03-19 110420.png"
    ],
    [
        "nome" => "Massagem",
        "imagem" => "img/Captura de tela 2026-03-19 111359.png"
    ],





];


$categorias_aromas = [
    [
        "nome" => "Cítricos ",
        "imagem" => "img/Captura de tela 2026-03-19 113117.png"
    ],
    [
        "nome" => "Amadeirados",
        "imagem" => "img/Captura de tela 2026-03-24 085156.png"
    ],
    [
        "nome" => "Florais",
        "imagem" => "img/Captura de tela 2026-03-19 113102.png"
    ]

];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serena - Lumière & Parfum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>


<body>

    <div class="app-container">

        <div class="hero">

            <!-- CAROUSEL -->


            <div id="carouselExampleIndicators" class="carousel slide" >
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Captura de tela 2026-03-19 110420.png" class="d-block w-100" alt="..." >
                    </div>
                    <div class="carousel-item">
                        <img src="img/Captura de tela 2026-03-19 111242.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



        </div>

        <!--Parte das velas-->
        <div class="velas-section">
            <h2>VELAS</h2>

            <div class="categorias">
                <?php foreach ($categorias_velas as $vela): ?>
                    <div class="categoria-item">
                        <div class="img-anel">
                            <img src="<?= $vela['imagem'] ?>" alt="<?= $vela['nome'] ?>">
                        </div>
                        <span><?= $vela['nome'] ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>



        <!--Video de mkt-->
        <div class="video-section">

            <video src="img/videos/Criação_de_Vídeo_de_Velas_Aromáticas.mp4" class="w-100 rounded" autoplay muted loop playsinline></video>

 </div>

            <!--Parte dos aromas-->
            <div class="aromas-section">
                <h2>AROMAS</h2>
                        
                <div class="categorias">
                    <?php foreach ($categorias_aromas as $aroma): ?>
                        <div class="categoria-item">
                            <div class="img-anel">
                                <img src="<?= $aroma['imagem'] ?>" alt="<?= $aroma['nome'] ?>">
                            </div>
                            <span><?= $aroma['nome'] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>



            </div>
       

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>