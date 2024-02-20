<?php 

$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["data_publicacao"]);

if($form){
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $data = $_GET["data_publicacao"];


    iduSQL("INSERT INTO imprensa(imagem, titulo, texto, data_publicacao) VALUES('$imagem', '$titulo', '$texto', '$data')");

    header("Location: imprensa.php");
    exit;
}

?>

<main class="container-fluid">

    <h1 class="text-center mt-5 mb-5">Nova Publicação</h1>

    <div class="caixa">

        <form action="" method="GET" autocomplete="off">

            <label for="imagem">Link da imagem</label>
            <input type="text" name="imagem" required>
            <button onclick="openFileManager()">Gestor de Ficheiros</button>

            <script>
            function openFileManager() {
                window.open('/sebastiao_alves/tinyfilemanager-master/tinyfilemanager.php', '_blank');
            }
            </script>

            <br><br>

            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" required>

            <br><br>

            <label for="texto">Texto</label>
            <textarea name="texto" id="editor_nova_imprensa" cols="80" rows="7"></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor_nova_imprensa' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

            <br><br>

            <label for="data_publicacao">Data de Publicação</label>
            <input type="text" name="data_publicacao" required>

            <br><br>

            <input type="submit" value="Guardar" class="btn-novo">

        </form>

    </div>

</main>