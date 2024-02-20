<?php 

$id = $_GET["editar"];

$destaques=getDestaqueUnico($id);
$livros=getTodosLivros();

$form=isset($_GET["destaque"]) && isset($_GET["observacao"]);

if($form){
    $novo_destaque=$_GET["destaque"];
    $observacao=$_GET["observacao"];

    iduSQL("UPDATE destaques SET id_livro='$novo_destaque', observacao='$observacao' WHERE id='$id'");

    header("Location: destaques.php");
}

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Editar Destaques</h3>
        </div>
    </div>

    <div class="row">
        <div class="caixa mt-5">
            <form action="">
                <input type="hidden" name="editar" value="<?= $id; ?>">
                <select name="destaque" id="">
                    <?php foreach($livros as $l): ?>
                        <option value="<?= $l["id"] ?>" <?= ($l["id"] == $destaques["id_livro"]) ? "selected" : ""; ?>><?= $l["titulo"]; ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="observacao">Observação</label>
                <input type="text" name="observacao" value="<?= $destaques["observacao"]; ?>">

                <input type="submit" value="Guardar" class="btn-novo">

            </form>
        </div>
    </div>
</main>