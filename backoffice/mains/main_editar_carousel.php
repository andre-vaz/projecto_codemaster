<?php 

$id=$_GET["editar"];

$carousel_especifico=getCarouselEspecifico($id);

$form = isset($_GET["imagem_desktop"]) && isset($_GET["imagem_mobile"]) && isset($_GET["observacao"]) && isset($_GET["titulo"]);
$form = $form && isset($_GET["subtitulo"]) && isset($_GET["link_livro"]);

if($form){
    $imagem_desktop = $_GET["imagem_desktop"];
    $imagem_mobile = $_GET["imagem_mobile"];
    $observacao = $_GET["observacao"];
    $titulo = $_GET["titulo"];
    $subtitulo = $_GET["subtitulo"];
    $link = $_GET["link_livro"];
    $data = getTimeDate();

    iduSQL("UPDATE carousel SET imagem_desktop='$imagem_desktop', imagem_mobile='$imagem_mobile', observacao='$observacao', titulo='$titulo', subtitulo='$subtitulo', link_livro='$link', data_actualizacao='$data' WHERE id='$id'");

    header("Location: carousel.php");
    exit;
}

?>

<main class="container-fluid">

    <h1 class="text-center mt-5 mb-5">Editar Carousel</h1>

    <div class="caixa">

        <form action="" method="GET" autocomplete="off">

            <input type="hidden" name="editar" value="<?= $id; ?>">

            <label for="imagem_desktop">Link da imagem para Desktop</label>
            <input type="text" name="imagem_desktop" required value="<?= $carousel_especifico["imagem_desktop"]; ?>">
            <button onclick="openFileManager()">Gestor de Ficheiros</button>

            <script>
            function openFileManager() {
                window.open('/sebastiao_alves/tinyfilemanager-master/tinyfilemanager.php', '_blank');
            }
            </script>

            <br><br>

            <label for="imagem_mobile">Link da imagem para Mobile</label>
            <input type="text" name="imagem_mobile" required value="<?= $carousel_especifico["imagem_mobile"]; ?>">
            <button onclick="openFileManager()">Gestor de Ficheiros</button>

            <script>
            function openFileManager() {
                window.open('/sebastiao_alves/tinyfilemanager-master/tinyfilemanager.php', '_blank');
            }
            </script>

            <br><br>

            <label for="observacao">Observação</label>
            <input type="text" name="observacao" required value="<?= $carousel_especifico["observacao"]; ?>">

            <br><br>

            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" required value="<?= $carousel_especifico["titulo"]; ?>">

            <br><br>

            <label for="subtitulo">Texto</label>

            <textarea name="subtitulo" id="editor_editar_carousel" cols="80" rows="7"><?= $carousel_especifico["subtitulo"]; ?></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor_editar_carousel' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

            <br><br>

            <label for="link_livro">Link da página</label>
            <input type="text" name="link_livro" required value="<?= $carousel_especifico["link_livro"]; ?>">

            <br><br>

            <input type="submit" value="Guardar" class="btn-novo">

        </form>

    </div>

</main>