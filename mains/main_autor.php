<main class="container-fluid">

    <!-- Caixa titulo Autor - Sobre mim -->
    <div class="row justify-content-md-end ">
        <div class="col-10 caixa-bem-vindo caixa-scroll bg-white p-5">
            <div class="row justify-content-md-start">
                <div class="col-12 menu-selecionado" id="">
                    Autor
                </div>
                <div class="col-12 titulo-caption">
                    Sobre mim
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-12 mt-5 d-flex justify-content-center">
            <img src="<?= getImagemAutor(); ?>" alt="" id="img-pagina-autor">
        </div>
        <div class="col-8 d-none d-md-block p-texto mt-5" id="texto-completo">
            <?= getTextoAutor(); ?>
        </div>
        <div class="col-8 d-block d-md-none p-texto mt-5" id="texto-abreviado">
            <?= getTextoAbreviadoAutor(); ?>
            <div class="mt-5 d-flex justify-content-center">
                <button class="ver-mais" onclick="mostrarTexto(this)"></button>
            </div>
        </div>
        <div class="col-8 mt-5 d-flex justify-content-center justify-content-md-start">
            <button class="btn-voltar" onclick="voltar()"></button>
        </div>
    </div>



</main>