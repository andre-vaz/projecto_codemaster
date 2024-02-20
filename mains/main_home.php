<?php

$destaques = getTodosDestaques();

?>

<main class="container-fluid d-block px-4">

    <!-- Area Bem-Vindo -->
    <div class="row d-flex justify-content-center justify-content-lg-end ">
        <div class="col-12 col-lg-11 caixa-bem-vindo bg-white p-5">
            <div class="row">
                <div class="col-10 col-lg-4" id="imagem-autor">
                    <img src="<?= getImagemHome(); ?>" alt="">
                </div>
                <div class="col-10 col-lg-8">
                    <div class="titulo-caption" id="titulo-bem-vindo">
                        Bem-Vindo ao meu website
                    </div>
                    <div id="texto-bem-vindo" class="p-texto">
                        <?= getTextoAbreviadoAutor(); ?>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="autor.php" class="btn-saber-mais" id="btn-bem-vindo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Area ultimos livros -->
    <div class="row" id="area-livros">
            
        <div class="col-8 caixa-ultimos-livros mt-4 mx-auto">
            <div id="titulo-ultimos" class="titulo-1">
                Últimos livros
            </div>
            <div id="texto-ultimos" class="p-texto">
                <?= getTextoUltimosLivros() ?>
            </div>
        </div>

        <div class="col-12 mx-auto">
            <!-- Area cards -->
            <div class="row d-flex flex-wrap justify-content-around area-cards mt-3 gap-5">

                <?php foreach($destaques as $i=>$d): ?>

                    <div class="col-lg-3 col-md-5 col-sm-6 p-0 card">
                        <div class="row flex-column h-100 mx-0">
                            <img src="<?= getImagemLivro($d["id_livro"]); ?>" class="card-img-top px-0" alt="...">
                            <div class="col-12 titulo-card"><?= getTituloLivro($d["id_livro"]); ?></div>
                            <div class="col-12 subtitulo-card"><?= $d["observacao"]; ?></div>
                            <div class="col-12 texto-card p-texto flex-grow-1">
                                <?= getTextoAbreviadoLivro($d["id_livro"]); ?>
                            </div>
                            <div class="col-12 btn-card d-flex justify-content-end mb-2">
                                <form action="livros.php">
                                    <button class="btn-saber-mais border-0" name="posicao" value="<?= $d["id_livro"]; ?>"></button>
                                </form>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div> 
</main>