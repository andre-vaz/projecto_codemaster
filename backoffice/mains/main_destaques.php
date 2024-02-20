<?php 

$destaques=getTodosDestaques();

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Destaques</h3>
        </div>
    </div>

    <div class="row">
        <div class="caixa mt-5">
            <table>
                <tr>
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Observação</th>
                    <th>Acções</th>
                </tr>

                <?php foreach($destaques as $i => $d): ?>

                    <tr>
                        <td> <img src="<?= getImagemLivro($d["id_livro"]); ?>" alt=""></td>
                        <td><?= getTituloLivro($d["id_livro"]);; ?></td>
                        <td><?= $d["observacao"] ?></td>
                        <td>
                            <form action="editar_destaques.php">
                                <button class="btn-editar" name="editar" value="<?= $d["id"]; ?>">
                                    Editar
                                </button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>
        </div>
    </div>
</main>