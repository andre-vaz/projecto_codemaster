<?php 

$redes=selectSQLUnico("SELECT * FROM redes WHERE id=1");

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Links da Redes Sociais</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 caixa d-block">
            <h3>Instagram</h3>
            <h6><?= $redes["instagram"]; ?></h6>
            <br><br>
            <h3>Facebook</h3>
            <h6><?= $redes["facebook"]; ?></h6>
            <br><br>
            <h3>Linkedin</h3>
            <h6><?= $redes["linkedin"]; ?></h6>
            <br><br>
            <a href="editar_redes.php">
                <button class="btn-editar">Editar</button>
            </a>
        </div>
    </div>
</main>