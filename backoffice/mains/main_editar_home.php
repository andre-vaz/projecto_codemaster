<?php 

$home=selectSQLUnico("SELECT * FROM home WHERE id=1");

$form = isset($_GET["imagem_bem_vindo"]) && isset($_GET["texto_ultimos_livros"]);

if($form){
    $img = $_GET["imagem_bem_vindo"];
    $texto = $_GET["texto_ultimos_livros"];

    iduSQL("UPDATE home SET imagem_autor_home='$img', texto_ultimos_livros='$texto' WHERE id=1");

    header("Location: home.php");

}

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Home</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 caixa">
            <form action="">
                <img src="<?= $home["imagem_autor_home"]; ?>" alt="" id="img_home">
                <br><br>
                <label for="imagem_bem_vindo">Link da imagem bem-vindo</label>
                <input type="text" name="imagem_bem_vindo" id="imagem_bem_vindo" value="<?= $home["imagem_autor_home"]; ?>" required>
                <button onclick="openFileManager()">Gestor de Ficheiros</button>

                <script>
                function openFileManager() {
                    window.open('/sebastiao_alves/tinyfilemanager-master/tinyfilemanager.php', '_blank');
                }
                </script>


                <br><br>
                <label for="editor">Texto "Últimos Livros"</label>
                <br>
                <textarea name="texto_ultimos_livros" id="editor_home" cols="80" rows="7"><?= $home["texto_ultimos_livros"]; ?></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor_home' ) )
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