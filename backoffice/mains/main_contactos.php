<?php 

$contactos=selectSQLUnico("SELECT * FROM contactos WHERE id=1");

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Contactos</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 caixa d-block">
                <h3>Morada</h3>
                <h6><?= $contactos["morada"]; ?></h6>
                <br><br>
                <h3>Telefone</h3>
                <h6><?= $contactos["telefone"]; ?></h6>
                <br><br>
                <h3>E-mail</h3>
                <h6><?= $contactos["email"]; ?></h6>
                <br><br>
                <a href="editar_contactos.php">
                    <button class="btn-editar">Editar</button>
                </a>
        </div>
    </div>
</main>