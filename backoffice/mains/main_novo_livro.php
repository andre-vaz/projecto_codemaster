<?php 

$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto_livro"]);

if($form){
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto_livro"];
    $data = getTimeDate();

    iduSQL("INSERT INTO livros(imagem, titulo, texto_livro, data_actualizacao) VALUES('$imagem', '$titulo', '$texto', '$data')");

    header("Location: livros.php");
    exit;
}

?>

<main class="container-fluid">

    <h1 class="text-center mt-5 mb-5">Novo Livro</h1>

    <div class="caixa">

        <form action="" method="GET" autocomplete="off">

            <label for="imagem">Link da imagem do livro</label>
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

            <label for="texto_livro">Texto</label>
            <textarea name="texto_livro" id="editor_novo_livro" cols="80" rows="7"></textarea>

            <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor_novo_livro' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

            <br><br>

            <input type="submit" value="Guardar" class="btn-novo">

        </form>

    </div>

</main>