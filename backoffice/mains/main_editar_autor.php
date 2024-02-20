<?php 

$autor=selectSQLUnico("SELECT * FROM autor WHERE id=1");

$form = isset($_GET["imagem_autor"]) && isset($_GET["texto_sobre_mim"]);

if($form){
    $img = $_GET["imagem_autor"];
    $texto = $_GET["texto_sobre_mim"];

    iduSQL("UPDATE autor SET imagem_autor='$img', texto_sobre_mim='$texto' WHERE id=1");

    header("Location: autor.php");

}

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Autor</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 caixa">
            <form action="">
                <img src="<?= $autor["imagem_autor"]; ?>" alt="" class="img_home">
                <br><br>
                <label for="imagem_autor">Link da imagem autor</label>
                <input type="text" name="imagem_autor" value="<?= $autor["imagem_autor"]; ?>" required>
                <button onclick="openFileManager()">Gestor de Ficheiros</button>

                <script>
                function openFileManager() {
                    window.open('/sebastiao_alves/tinyfilemanager-master/tinyfilemanager.php', '_blank');
                }
                </script>
                <br><br>
                <label for="texto_sobre_mim">Texto "Sobre mim"</label>
                <br>
                <textarea name="texto_sobre_mim" id="editor_autor" cols="80" rows="7"><?= $autor["texto_sobre_mim"]; ?></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor_autor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                <br><br>
                <input type="submit" value="Guardar" class="btn-novo">
            </form>
        </div>
    </div>
</main>