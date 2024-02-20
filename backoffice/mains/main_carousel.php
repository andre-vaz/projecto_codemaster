<?php 

$carousel = getTodosCarousel();

?>

<main class="container-fluid">

    <div class="row mt-5">
        <div class="col-12 caixa">
            <div class="table-caixa">
                <table>
                    <tr>
                        <th>Imagem Desktop</th>
                        <th>Imagem Mobile</th>
                        <th>Título</th>
                        <th>Subtítulo</th>
                        <th>Observação</th>
                        <th>Data Actualização</th>
                        <th>Acções</th>
                    </tr>

                    <?php foreach($carousel as $i => $c): ?>

                        <tr>
                            <td> <img src="<?= $c["imagem_desktop"]; ?>" alt=""></td>
                            <td><img src="<?= $c["imagem_mobile"]; ?>" alt=""></td>
                            <td><?= $c["titulo"]; ?></td>
                            <td><?= $c["subtitulo"]; ?></td>
                            <td><?= $c["observacao"]; ?></td>
                            <td><?= $c["data_actualizacao"]; ?></td>
                            <td>
                                <form action="editar_carousel.php">
                                    <button class="btn-editar" name="editar" value="<?= $c["id"]; ?>">
                                        Editar
                                    </button>
                                </form>
                                <br>
                                <form action="apagar_carousel.php">
                                    <button class="btn-apagar" name="apagar" value="<?= $c["id"]; ?>">
                                        Apagar
                                    </button>
                                </form>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </table>
            </div>

            <div class="btn-caixa mt-3">
                <a href="novo_carousel.php">
                    <button class="btn-novo">Criar Novo</button>
                </a>
            </div>
        </div>
    </div>


</main>