<?php 

$id=$_GET["editar"];

$livro_especifico=getLivroEspecifico($id);

$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto_livro"]) ;

if($form){
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto_livro"];
    $data = getTimeDate();

    iduSQL("UPDATE livros SET imagem='$imagem', titulo='$titulo', texto_livro='$texto', data_actualizacao='$data' WHERE id='$id'");

    header("Location: livros.php");
    exit;
}

?>

<main class="container-fluid">

    <h1 class="text-center mt-5 mb-5">Editar livro</h1>

    <div class="caixa">

        <form action="" method="GET" autocomplete="off">

            <input type="hidden" name="editar" value="<?= $id; ?>">

            <img src="<?= $livro_especifico["imagem"]; ?>" alt="" class="img_home">

            <br><br>

            <label for="imagem">Link da imagem</label>
            <input type="text" name="imagem" required value="<?= $livro_especifico["imagem"]; ?>">

            <button onclick="openFileManager()">Gestor de Ficheiros</button>

            <script>
            function openFileManager() {
                window.open('/sebastiao_alves/tinyfilemanager-master/tinyfilemanager.php', '_blank');
            }
            </script>

            <br><br>

            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" required value="<?= $livro_especifico["titulo"]; ?>">

            <br><br>

            <label for="texto_livro">Texto</label>
            <textarea name="texto_livro" id="editor_livros" cols="80" rows="7"><?= $livro_especifico["texto_livro"]; ?></textarea>

            <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor_livros' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

            <br><br>

            <input type="submit" value="Guardar" class="btn-novo">

        </form>

    </div>

</main>