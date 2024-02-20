<?php 

$id=$_GET["editar"];

$imprensa_especifica=getImprensaEspecifica($id);

$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["data_publicacao"]);

if($form){
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $data = $_GET["data_publicacao"];

    iduSQL("UPDATE imprensa SET imagem='$imagem', titulo='$titulo', texto='$texto', data_publicacao='$data' WHERE id='$id'");

    header("Location: imprensa.php");
    exit;
}

?>

<main class="container-fluid">

    <h1 class="text-center mt-5 mb-5">Editar Publicação</h1>

    <div class="caixa">

        <form action="" method="GET" autocomplete="off">

            <input type="hidden" name="editar" value="<?= $id; ?>">

            <label for="imagem">Link da imagem</label>
            <input type="text" name="imagem" required value="<?= $imprensa_especifica["imagem"]; ?>">
            <button onclick="openFileManager()">Gestor de Ficheiros</button>

            <script>
            function openFileManager() {
                window.open('/sebastiao_alves/tinyfilemanager-master/tinyfilemanager.php', '_blank');
            }
            </script>

            <br><br>

            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" required value="<?= $imprensa_especifica["titulo"]; ?>">

            <br><br>

            <label for="texto">Texto</label>
            <textarea name="texto" id="editor_editar_imprensa" cols="80" rows="7"><?= $imprensa_especifica["texto"]; ?></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor_editar_imprensa' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

            <br><br>

            <label for="data_publicacao">Data da publicação</label>
            <input type="text" name="data_publicacao" required value="<?= $imprensa_especifica["data_publicacao"]; ?>">

            <br><br>

            <input type="submit" value="Guardar" class="btn-novo">

        </form>

    </div>

</main>