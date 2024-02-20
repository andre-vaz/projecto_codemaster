<?php

$form = isset($_GET["posicao"]);

if($form){
    $posicao = intval($_GET["posicao"]);
}
else{
    header("Location: index.php");
    exit;
}

?>

<main class="container-fluid">

    <!-- Caixa titulo Livros - Senhora do Amor e da Guerra -->
    <div class="row justify-content-md-end ">
        <div class="col-10 caixa-bem-vindo caixa-scroll bg-white p-5">
            <div class="row justify-content-md-start">
                <div class="col-12 menu-selecionado" id="">
                    Livros
                </div>
                <div class="col-12 titulo-caption">
                    <?= getTituloLivro($posicao); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 d-flex flex-wrap justify-content-center">

        <div class="col-8 col-md-6 col-lg-4">
            <img src="<?= getImagemLivro($posicao); ?>" alt="<?= getTituloLivro($posicao); ?>" class="img-fluid w-100">
        </div>
        
        <div class="col-8 col-md-6 col-lg-4 d-flex flex-column">
            <div class="p-texto">
                <?= getTextoLivro($posicao); ?>
            </div>

            <div class="d-flex justify-content-end mt-auto d-none d-md-block">
                <button class="btn-voltar" onclick="voltar()"></button>
            </div>
        </div>

    </div>

</main>