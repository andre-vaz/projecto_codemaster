<?php 

$carousel = selectSQL("SELECT id FROM carousel");

$livros = selectSQL("SELECT id FROM livros");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastião Alves</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            
        <!-- CSS LOCAL -->
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="container-fluid d-block m-0 p-0 position-relative">
        <!-- Top-Banner -->
        <div class="row top-banner w-100">
            <!-- Titulo -->
            <div class="col-12 text-center" id="titulo-pagina">
                Sebastião Alves
            </div>
            <!-- HR -->
            <div class="col-12">
                <hr id="barra-topo" class="barra">
            </div>
            <!-- Nav-Bar -->
            <div class="col-12 p-0 m-0">
                <nav class="navbar navbar-expand-lg" id="top_nav">
                    <div class="container-fluid" id="nav-box">
                        <button class="navbar-toggler" type="button" onclick="mudar()" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse mt-5 mt-lg-0" id="navbarNavDropdown">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($pagina_actual == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($pagina_actual == "autor") ? "active" : ""; ?>" href="autor.php">Autor</a>
                                </li>
                                <li class="nav-item dropdown" id="menu-livros">
                                    <a class="nav-link dropdown-toggle <?= ($pagina_actual == "livros") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="custom-dropdown">
                                    Livros
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach($livros as $i=>$l): ?>

                                            <form action="livros.php#titulo">
                                                <li>
                                                    <button type="submit" href="#" class="dropdown-item" name="posicao" value="<?= $l["id"]; ?>">
                                                    <?= getTituloLivro($l["id"]); ?>
                                                    </button>
                                                </li>
                                            </form>

                                        <?php endforeach; ?>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($pagina_actual == "imprensa") ? "active" : ""; ?>" href="imprensa.php">Imprensa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($pagina_actual == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Carousel Desktop -->
        
        <div class="row w-100 carousel-desktop d-none d-md-block p-0">

            <div id="carouselExampleCaptions" class="carousel slide px-0 " data-bs-ride="carousel">
    
                <div class="carousel-inner">

                    <?php foreach($carousel as $i=>$c): ?>

                    <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                        <img src="<?= getImagemCarouselDesktop($c["id"]); ?>" class="d-block w-100 img-carousel" alt="<?= getTituloCarousel($c["id"]); ?>">
                        <div class="carousel-caption text-start">
                            <h6><?= getObservacaoCarousel($c["id"]); ?></h6>
                            <div class="titulo-caption"><?= getTituloCarousel($c["id"]); ?></div>
                            <div class="p-texto"><?= getTextoAbreviadoCarousel($c["id"]); ?></div>
                            <a href="<?= getLinkCarousel($c["id"]); ?>" class="btn-saber-mais mt-1"></a>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>

                <div class="carousel-indicators">

                    <?php for($i=0; $i<count($carousel); $i++): ?>

                        <?php if($i == 0): ?>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active btn-banner" aria-current="true" aria-label="Slide 1">
                            </button>

                        <?php else: ?>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i; ?>" aria-label="Slide 2" class="btn-banner"></button>

                        <?php endif; ?>

                    <?php endfor; ?>

                </div>

            </div>

        </div>

        <!-- Carousel Mobile -->

        <div class="row d-block d-md-none p-0 mx-0 w-100" id="carousel-mobile">

            <div id="carouselExampleCaptionsMobile" class="carousel slide " data-bs-ride="carousel">
    
                <div class="carousel-inner">

                <?php foreach($carousel as $i=>$c): ?>

                    <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                        <img src="<?= getImagemCarouselMobile($c["id"]); ?>" class="img-fluid d-block w-100 img-carousel" alt="...">
                        <div class="carousel-caption text-start">
                            <h6><?= getObservacaoCarousel($c["id"]); ?></h6>
                            <div class="titulo-caption"><?= getTituloCarousel($c["id"]); ?></div>
                            <div class="p-texto"><?= getTextoCarousel($c["id"]); ?></div>
                            <a href="<?= getLinkCarousel($c["id"]); ?>" class="btn-saber-mais mt-1"></a>
                        </div>
                    </div>

                <?php endforeach; ?>

                </div>

                <div class="carousel-indicators">

                    <?php for($i=0; $i<count($carousel); $i++): ?>

                        <?php if($i == 0): ?>

                            <button type="button" data-bs-target="#carouselExampleCaptionsMobile" data-bs-slide-to="0" class="active btn-banner" aria-current="true" aria-label="Slide 1">
                        </button>

                        <?php else: ?>

                            <button type="button" data-bs-target="#carouselExampleCaptionsMobile" data-bs-slide-to="<?= $i; ?>" aria-label="Slide 2" class="btn-banner"></button>

                        <?php endif; ?>

                    <?php endfor; ?>

                </div>

            </div>

        </div>

    </header>