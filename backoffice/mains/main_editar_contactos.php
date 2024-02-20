<?php 

$contactos=selectSQLUnico("SELECT * FROM contactos WHERE id=1");

$form = isset($_GET["morada"]) && isset($_GET["telefone"]) && isset($_GET["email"]);

if($form){
    $morada = $_GET["morada"];
    $telefone = $_GET["telefone"];
    $email = $_GET["email"];

    iduSQL("UPDATE contactos SET morada='$morada', telefone='$telefone', email='$email' WHERE id=1");

    header("Location: contactos.php");

}

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Contactos</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 caixa">
            <form action="">
                <label for="morada">Morada</label>
                <input type="text" name="morada" value="<?= $contactos["morada"]; ?>" required>
                <br><br>
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" value="<?= $contactos["telefone"]; ?>" required>
                <br><br>
                <label for="email">E-mail</label>
                <input type="email" name="email" value="<?= $contactos["email"]; ?>" required>
                <br><br>
                <input type="submit" value="Guardar" class="btn-novo">
            </form>
        </div>
    </div>
</main>