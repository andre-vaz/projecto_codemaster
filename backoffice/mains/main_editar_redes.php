<?php 

$redes=selectSQLUnico("SELECT * FROM redes WHERE id=1");

$form = isset($_GET["instagram"]) && isset($_GET["facebook"]) && isset($_GET["linkedin"]);

if($form){
    $instagram = $_GET["instagram"];
    $facebook = $_GET["facebook"];
    $linkedin = $_GET["linkedin"];

    iduSQL("UPDATE redes SET instagram='$instagram', facebook='$facebook', linkedin='$linkedin' WHERE id=1");

    header("Location: redes.php");

}

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Links da Redes Sociais</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 caixa">
            <form action="">
                <label for="instagram">Instagram</label>
                <input type="text" name="instagram" value="<?= $redes["instagram"]; ?>" required>
                <br><br>
                <label for="facebook">Facebook</label>
                <input type="text" name="facebook" value="<?= $redes["facebook"]; ?>" required>
                <br><br>
                <label for="linkedin">Linkedin</label>
                <input type="text" name="linkedin" value="<?= $redes["linkedin"]; ?>" required>
                <br><br>
                <input type="submit" value="Guardar" class="btn-novo">
            </form>
        </div>
    </div>
</main>