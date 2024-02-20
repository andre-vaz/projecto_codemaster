<?php 

// $imprensa = selectSQL("SELECT id FROM imprensa ORDER BY id DESC");

$pagina = 1;
$elementos_por_pagina = 2;

$form = isset($_GET["pagina"]);
if($form){
    $pagina = intval($_GET["pagina"]);
}


$ignorar = ($pagina - 1) * $elementos_por_pagina;

$imprensa = selectSQL("SELECT * FROM imprensa ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $ignorar");

$resultado = selectSQLUnico("SELECT Count(id) as total FROM imprensa");
$total_produtos = intval($resultado["total"]);

$total_paginas = ceil($total_produtos / $elementos_por_pagina);

?>

<main class="container-fluid">

    <!-- Caixa titulo Imprensa -->
    <div class="row justify-content-md-end ">
        <div class="col-10 caixa-bem-vindo caixa-scroll bg-white p-5">
            <div class="row justify-content-md-start">
                <div class="col-12 menu-selecionado" id="">
                    Imprensa
                </div>
                <div class="col-12 titulo-caption">
                    Últimas Notícias
                </div>
            </div>
        </div>
    </div>

    <?php foreach($imprensa as $i): ?>

    <div class="row justify-content-center mt-5 pb-5 shadow-row">
        <div class="col-8 titulo-1">
            <?= getTituloImprensa($i["id"]); ?>
        </div>
        <div class="col-8">
            <hr class="underline-imprensa">
        </div>
        <div class="col-8 text-end data-publicacao">
            <?= getDataImprensa($i["id"]) ?>
        </div>
        <div class="col-8 mt-4">
            <img src="<?= getImagemImprensa($i["id"]); ?>" alt="" class="w-100">
        </div>
        <div class="col-8 p-texto mt-5">
                <?= getTextoImprensa($i["id"]); ?>
        </div>
    </div>

    <?php endforeach; ?>

    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center">


            <form action="" method="GET">

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link custom-arrow" id="arrow-left" href="?pagina=<?= max(1, $pagina - 1); ?>" aria-label="Previous">
                                <!-- <span aria-hidden="true">&laquo;</span> -->
                            </a>
                        </li>

                        <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
                            <li class="page-item">
                                <button type="submit" name="pagina" value="<?= $i; ?>" class="page-link custom-pagination"><?= $i; ?></button>
                            </li>
                        <?php endfor; ?>

                        <li class="page-item">
                            <a class="page-link custom-arrow" id="arrow-right" href="?pagina=<?= min($total_paginas, $pagina + 1); ?>" aria-label="Next">
                                <!-- <span aria-hidden="true">&raquo;</span> -->
                            </a>
                        </li>
                    </ul>
                </nav>

            </form>

        </div>
    </div>


</main>