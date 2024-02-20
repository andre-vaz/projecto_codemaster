<?php 

$livros = getTodosLivros();

?>

<main class="container-fluid">

    <div class="row">
        <div class="col-12 caixa mt-5">
            <div class="table-caixa">
                <table>
                    <tr>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Data Actualização</th>
                        <th>Acções</th>
                    </tr>

                    <?php foreach($livros as $i => $l): ?>

                        <tr>
                            <td> <img src="<?= $l["imagem"]; ?>" alt=""></td>
                            <td><?= $l["titulo"]; ?></td>
                            <td><?= $l["texto_livro"]; ?></td>
                            <td><?= $l["data_actualizacao"]; ?></td>
                            <td>
                                <form action="editar_livro.php">
                                    <button class="btn-editar" name="editar" value="<?= $l["id"]; ?>">
                                        Editar
                                    </button>
                                </form>
                                <br>
                                <form action="apagar_livro.php">
                                    <button class="btn-apagar" name="apagar" value="<?= $l["id"]; ?>">
                                        Apagar
                                    </button>
                                </form>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </table>
            </div>

            <div class="btn-caixa mt-3">
                <a href="novo_livro.php" class="mt-5">
                    <button class="btn-novo">Criar Novo</button>
                </a>
            </div>
        </div>
    </div>

</main>