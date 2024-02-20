<?php 

$home=selectSQLUnico("SELECT * FROM home WHERE id=1");

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Home</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 caixa d-flex flex-column">

            <h3>Imagem do autor da página (HOME)</h3>

            <img src="<?= $home["imagem_autor_home"]; ?>" alt="" class="img_home mx-auto">
            
            <hr>
            <h3>Texto do "Últimos Livros" da página (HOME)</h3>
            <p><?= $home["texto_ultimos_livros"]; ?></p>
            <a href="editar_home.php">
                <button class="btn-editar">Editar</button>
            </a>

        </div>
    </div>
</main>