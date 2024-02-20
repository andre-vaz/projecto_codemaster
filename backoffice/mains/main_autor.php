<?php 

$autor=selectSQLUnico("SELECT * FROM autor WHERE id=1");

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Autor</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 caixa d-flex flex-column">
            <h3>Imagem do autor da página (AUTOR)</h3>

            <img src="<?= $autor["imagem_autor"]; ?>" alt="" class="img_home mx-auto">

            <hr>
            <h3>Texto "Sobre Mim" da página (AUTOR)</h3>
            <p><?= $autor["texto_sobre_mim"]; ?></p>
            <a href="editar_autor.php">
                <button class="btn-editar">Editar</button>
            </a>
        </div>
    </div>
</main>